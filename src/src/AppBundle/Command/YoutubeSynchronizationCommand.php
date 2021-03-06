<?php
namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class YoutubeSynchronizationCommand extends ContainerAwareCommand
{

    protected function configure()
    {
        $this
            ->setName('itworks:youtube:sync')
        ;
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->getContainer()->get('api.youtube')->synchronization();
    }
}