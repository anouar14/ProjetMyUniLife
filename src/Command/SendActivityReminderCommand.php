<?php
namespace App\Command;

use App\Message\SendActivityReminderMessage;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Messenger\MessageBusInterface;

class SendActivityReminderCommand extends Command
{
    protected static $defaultName = 'app:send-activity-reminder';

    private $bus;

    public function __construct(MessageBusInterface $bus)
    {
        parent::__construct();
        $this->bus = $bus;
    }

    protected function configure()
    {
        $this->setDescription('Send activity reminder emails for tomorrow');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // Envoyer le message pour planifier l'exécution
        $this->bus->dispatch(new SendActivityReminderMessage(1));  // Passer l'ID de l'activité ici

        return Command::SUCCESS;
    }
}

