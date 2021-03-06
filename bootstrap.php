<?php

require_once __DIR__ . '/vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use KingConsulting\Service\RawDataService;
use KingConsulting\Service\CountyService;

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/config/Entity"), $isDevMode);
$config->addCustomDatetimeFunction('year', 'Oro\ORM\Query\AST\Functions\SimpleFunction');

// database configuration parameters
/*
$conn = array(
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/db.sqlite',
);
*/

// the connection configuration
$conn = array(
  'driver'   => 'pdo_mysql',
  'user'     => '__USER__',
  'password' => '__PASSWORD__',
  'dbname'   => 'Enrollment',
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);

$RawDataService = new RawDataService($entityManager);
$CountyService = new CountyService($entityManager);

