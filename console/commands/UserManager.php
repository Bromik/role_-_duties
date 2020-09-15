<?php

namespace console\commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use traits\Duties;

class UserManager extends Command
{
    use Duties;
    protected static $defaultName = 'user:manager ';

    protected function configure()
    {
        $this->setName('user:manager')
            ->setDescription('Manager duties')
            ->setHelp('Manager duties');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $duties = Duties::userDuties();

        foreach ($duties['manager']  as $duty) {
            $output->writeln(" --- {$duty}");
        }

        return Command::SUCCESS;
    }

}