<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TempController extends AbstractController
{
    
    #[Route('/temp', name:'app_home')]
    function showtemplate(){
        return $this->render('base.html.twig');

    }
    #[Route('/new', name: 'app_log')]
    function showlogin(): Response
    {
        // Retourne et affiche la vue 'login/base.html.twig'.
        return $this->render('user/new.html.twig');
    }

    #[Route('/service', name:'app_service')]
    function showservice(){
        return $this->render('base.html.twig');

    }
   
}
