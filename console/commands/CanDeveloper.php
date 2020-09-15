<?php

namespace console\commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use traits\Duties;


class CanDeveloper extends Command
{
    use Duties;
    protected static $defaultName = 'can:developer';

    protected function configure()
    {
        $this->setName('can:developer')
            ->setDescription('Developer duties')
            ->setHelp('Developer duties')
            ->addArgument('duties', InputArgument::OPTIONAL, 'Developer duties');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $duties = Duties::userDuties();
        $arg = $input->getArgument('duties');
        $check_duties = array_key_exists($arg, $duties['developer']);
        echo $check_duties === false ? 'false' : 'true';
        return Command::SUCCESS;
    }

}