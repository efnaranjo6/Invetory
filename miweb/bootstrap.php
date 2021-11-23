<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src/Entity"), $isDevMode, $proxyDir, $cache,
$useSimpleAnnotationReader);

$conn = [
'dbname' => 'inventario',
'user' => 'felipe',
'password' => '1234',
'host' => 'BD',
'driver' => 'pdo_mysql',
];
$entityManager = EntityManager::create($conn, $config);


