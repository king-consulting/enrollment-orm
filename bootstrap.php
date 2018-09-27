<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

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
  'user'     => 'root',
  'password' => '&$#$JFl23asfjA)8wfLFr29&^',
  'dbname'   => 'Enrollment',
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);

$RawDataService = new RawDataService($entityManager);
