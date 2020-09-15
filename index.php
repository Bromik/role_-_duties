#!/usr/bin/env php
<?php

require __DIR__ . '/vendor/autoload.php';

use console\commands\CanDesigner;
use console\commands\CanDeveloper;
use console\commands\CanManager;
use console\commands\CanTester;
use console\commands\UserDesigner;
use console\commands\UserDeveloper;
use console\commands\UserManager;
use console\commands\UserTester;
use Symfony\Component\Console\Application;

$application = new Application();

$application->add(new UserDeveloper());
$application->add(new UserTester());
$application->add(new UserManager());
$application->add(new UserDesigner());
$application->add(new CanDeveloper());
$application->add(new CanTester());
$application->add(new CanManager());
$application->add(new CanDesigner());


$application->run();