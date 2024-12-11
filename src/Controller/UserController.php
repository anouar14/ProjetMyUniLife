<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Security\Core\Password\PasswordHasherInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;


use Symfony\Component\Security\Core\Exception\UserNotFoundException;




use Symfony\Component\Routing\Attribute\Route;


// Déclare la classe du contrôleur UserController
final class UserController extends AbstractController
{
    // Route pour afficher tous les utilisateurs (admin)
    #[Route('/admin/Utilisateurs', name: 'app_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        // Récupère tous les utilisateurs de la base et les envoie à la vue
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    // Route pour créer un nouvel utilisateur
    #[Route('/new', name: 'app_log', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher ): Response
    {
        // Crée un nouvel objet utilisateur vide
        $user = new User();
        
        // Crée un formulaire pour l'objet $user
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request); // Traite la requête pour voir si le formulaire a été soumis

        // Si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {
            
            // Hachage du mot de passe pour sécurité (cryptage)
            $hashedPassword = $passwordHasher->hashPassword(
                $user,
                $user->getPassword() // Prend le mot de passe de l'utilisateur
            );
            $user->setPassword($hashedPassword); // Définit le mot de passe crypté

            // Sauvegarde l'utilisateur en base de données
            $entityManager->persist($user);
            $entityManager->flush();

            // Affiche un message flash pour informer de la réussite
            $this->addFlash('success', 'Utilisateur créé avec succès.');
            return $this->redirectToRoute('app_log', [], Response::HTTP_SEE_OTHER); // Redirige vers la page de connexion
        }

        // Affiche le formulaire de création d'un nouvel utilisateur
        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form, // Passe le formulaire à la vue
        ]);
    }

    // Route pour afficher les informations d'un utilisateur
    #[Route('/user/{id}', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        // Affiche les détails de l'utilisateur
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    // Route pour modifier un utilisateur existant
    #[Route('/user/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        // Crée le formulaire d'édition pour cet utilisateur
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request); // Traite la requête

        // Si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush(); // Sauvegarde les modifications en base de données

            // Redirige vers la page des utilisateurs après la modification
            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        // Affiche le formulaire d'édition
        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form, // Passe le formulaire d'édition à la vue
        ]);
    }

    // Route pour supprimer un utilisateur
    #[Route('/user/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        // Vérifie la validité du token CSRF pour sécuriser la suppression
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($user); // Supprime l'utilisateur de la base
            $entityManager->flush(); // Applique les modifications en base de données
        }

        // Redirige vers la liste des utilisateurs après suppression
        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }

    // Route pour afficher le formulaire de connexion
    #[Route('/login', name: 'app_join')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Vérifie si un utilisateur est connecté
        $user = $this->getUser();

        // Si un utilisateur est déjà connecté, redirige-le en fonction de son rôle
        if ($user) {
            $roles = $user->getRoles(); // Récupère les rôles de l'utilisateur
            if (in_array('ROLE_USER', $roles)) {
                return $this->redirectToRoute('app_home'); // Redirige l'utilisateur normal
            } else {
                return $this->redirectToRoute('app_admin'); // Redirige l'admin
            }
        }

        // Récupère les erreurs de connexion et l'email saisi dans le formulaire
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        // Affiche le formulaire de connexion avec les erreurs éventuelles
        return $this->render('user/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error, // Affiche l'erreur d'authentification si présente
        ]);
    }

    // Route pour se déconnecter
    #[Route('/logout', name: 'app_logout')]
    public function logout(SessionInterface $session)
    {
        // Efface toutes les données de la session
        $session->clear();

        // Redirige vers la page d'accueil après la déconnexion
        return $this->redirectToRoute('app_home');
    }

    // Route pour afficher le formulaire de mot de passe oublié
    #[Route('/mot-de-passe-oublie', name: 'app_forgot_password')]
    public function forgotPassword(Request $request, UserRepository $userRepository, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        // Si l'utilisateur est déjà connecté, on le redirige vers la page d'accueil
        if ($this->getUser()) {
            return $this->redirectToRoute('app_home');
        }

        // Si la requête est de type POST (formulaire soumis)
        if ($request->isMethod('POST')) {
            $email = $request->request->get('email'); // Récupère l'email saisi dans le formulaire

            // Cherche l'utilisateur par email dans la base
            $user = $userRepository->findOneByEmail($email);

            // Si l'utilisateur n'existe pas, affiche un message d'erreur
            if (!$user) {
                $this->addFlash('error', 'No user found with this email.');
                return $this->redirectToRoute('app_forgot_password');
            }

            // Génère un token de réinitialisation de mot de passe
            $resetToken = bin2hex(random_bytes(32)); // Génère un token aléatoire
            $user->setResetToken($resetToken); // Associe le token à l'utilisateur
            $entityManager->flush(); // Sauvegarde le token en base

            // Crée l'email avec un lien de réinitialisation
            $emailMessage = (new Email())
                ->from('MyUniLife@gmail.com')
                ->to($user->getEmail())
                ->subject('Password Reset Request')
                ->html('<p>Click the link to reset your password: <a href="' . 
                $this->generateUrl('app_reset_password', ['token' => $resetToken], UrlGeneratorInterface::ABSOLUTE_URL) . '">Reset Password</a></p>');

            try {
                $mailer->send($emailMessage); // Envoie l'email
                $this->addFlash('success', 'Password reset email sent.');
                return $this->redirectToRoute('app_join');
            } catch (\Exception $e) {
                // En cas d'erreur d'envoi, affiche un message d'erreur
                $this->addFlash('error', 'Failed to send email: ' . $e->getMessage());
                return $this->redirectToRoute('app_forgot_password');
            }
        }

        // Affiche le formulaire de mot de passe oublié
        return $this->render('user/forgot_password.html.twig');
    }

    // Route pour réinitialiser le mot de passe avec un token
    #[Route('/reinitialisation-mot-de-passe/{token}', name: 'app_reset_password')]
    public function resetPassword(string $token, Request $request, UserRepository $userRepository, UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $entityManager): Response
    {
        // Cherche l'utilisateur avec le token de réinitialisation
        $user = $userRepository->findOneBy(['resetToken' => $token]);

        // Si l'utilisateur n'existe pas, affiche un message d'erreur
        if (!$user) {
            $this->addFlash('error', 'Invalid token.');
            return $this->redirectToRoute('app_log');
        }

        // Si la requête est de type POST (formulaire soumis)
        if ($request->isMethod('POST')) {
            // Récupère le nouveau mot de passe
            $newPassword = $request->request->get('new_password');
            $hashedPassword = $passwordHasher->hashPassword($user, $newPassword); // Hache le mot de passe

            // Met à jour le mot de passe de l'utilisateur et supprime le token
            $user->setPassword($hashedPassword);
            $user->setResetToken(null);
            $entityManager->flush(); // Sauvegarde les modifications en base de données

            // Affiche un message de succès et redirige vers la page de connexion
            $this->addFlash('success', 'Password successfully reset.');
            return $this->redirectToRoute('app_log');
        }

        // Affiche le formulaire de réinitialisation de mot de passe
        return $this->render('user/reset_password.html.twig');
    }
}