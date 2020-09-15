<?php

namespace console\commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use traits\Duties;


class UserDeveloper extends Command
{
    use Duties;
    protected static $defaultName = 'user:developer ';

    protected function configure()
    {
        $this->setName('user:developer')
            ->setDescription('Developer duties')
            ->setHelp('Developer duties');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $duties = Duties::userDuties();

        foreach ($duties['developer']  as $duty) {
            $output->writeln(" --- {$duty}");
        }

        return Command::SUCCESS;
    }

}