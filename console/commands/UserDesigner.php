<?php

namespace console\commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use traits\Duties;


class UserDesigner extends Command
{
    use Duties;
    protected static $defaultName = 'user:designer';

    protected function configure()
    {
        $this->setName('user:designer')
            ->setDescription('Designer duties')
            ->setHelp('Designer duties');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $duties = Duties::userDuties();

        foreach ($duties['designer']  as $duty) {
            $output->writeln(" --- {$duty}");
        }

        return Command::SUCCESS;
    }

}