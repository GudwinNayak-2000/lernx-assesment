<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once dirname(__DIR__) . '/vendor/autoload.php';

use Dotenv\Dotenv;
use MongoDB\Client as Mongo;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));

$dotenv->load();

$mongoURI = $_ENV['MONGO_URI'];

$connection = new Mongo($mongoURI);
$db = $connection->selectDatabase($_ENV['MONGO_DB']);
