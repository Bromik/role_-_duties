<?php

namespace console\commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use traits\Duties;


class UserTester extends Command
{
    use Duties;
    protected static $defaultName = 'user:tester ';

    protected function configure()
    {
        $this->setName('user:tester')
            ->setDescription('Tester duties')
            ->setHelp('Tester  duties');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $duties = Duties::userDuties();

        foreach ($duties['tester']  as $duty) {
            $output->writeln(" --- {$duty}");
        }

        return Command::SUCCESS;
    }

}