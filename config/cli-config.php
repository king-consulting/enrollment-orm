<?php

// replace with file to your own project bootstrap
require_once __DIR__ . '/../bootstrap.php';

use \Doctrine\ORM\Tools\Console\ConsoleRunner;
use Symfony\Component\Console\Helper\QuestionHelper;

$helperSet = ConsoleRunner::createHelperSet($entityManager);
$helperSet->set(new QuestionHelper(), 'question');

// Add Doctrine Migration commands
$cli = ConsoleRunner::createApplication($helperSet,[
    new \Doctrine\DBAL\Migrations\Tools\Console\Command\DiffCommand(),
    new \Doctrine\DBAL\Migrations\Tools\Console\Command\ExecuteCommand(),
    new \Doctrine\DBAL\Migrations\Tools\Console\Command\GenerateCommand(),
    new \Doctrine\DBAL\Migrations\Tools\Console\Command\MigrateCommand(),
    new \Doctrine\DBAL\Migrations\Tools\Console\Command\StatusCommand(),
    new \Doctrine\DBAL\Migrations\Tools\Console\Command\VersionCommand(),
]);

return $cli->run();

