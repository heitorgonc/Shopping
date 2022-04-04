<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Service\Database;
use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env');

$db = Database::getInstance();

$db->exec("CREATE TABLE products (id INTEGER PRIMARY KEY AUTOINCREMENT, description TEXT, value TEXT, shop TEXT)");