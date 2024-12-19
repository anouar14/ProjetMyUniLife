<?php
namespace App\MessageHandler;

use App\Message\SendActivityReminderMessage;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use App\Repository\ActiviteRepository;

class SendActivityReminderHandler implements MessageHandlerInterface
{
    private $mailer;
    private $activiteRepository;

    public function __construct(MailerInterface $mailer, ActiviteRepository $activiteRepository)
    {
        $this->mailer = $mailer;
        $this->activiteRepository = $activiteRepository;
    }

    public function __invoke(SendActivityReminderMessage $message)
    {
        $activities = $this->activiteRepository->findActivitiesForTomorrow();

        foreach ($activities as $activity) {
            if ($activity->getUser()) {
                $user = $activity->getUser();
                $email = (new Email())
                    ->from('Rappel@myUniLife.com')
                    ->to($user->getEmail())
                    ->subject('Rappel : Activité demain')
                    ->html('<p>Cher(e) ' . $user->getPrenom() . ',<br>Nous vous rappelons que vous avez une activité prévue demain : <strong>' . $activity->getNomAC() . '</strong> à ' . $activity->getHeureAC()->format('H:i') . '.</p>');

                $this->mailer->send($email);
            }
        }
    }
}
