<?php

namespace console\commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use traits\Duties;


class CanTester extends Command
{
    use Duties;
    protected static $defaultName = 'can:tester';

    protected function configure()
    {
        $this->setName('can:tester')
            ->setDescription('Tester duties')
            ->setHelp('Tester duties')
            ->addArgument('duties', InputArgument::OPTIONAL, 'tester duties');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $duties = Duties::userDuties();
        $arg = $input->getArgument('duties');
        $check_duties = array_key_exists($arg, $duties['tester']);
        echo $check_duties === false ? 'false' : 'true';
        return Command::SUCCESS;
    }

}