<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Service\Database;
use App\Repository\ProductRepository;
use Symfony\Component\Dotenv\Dotenv;
use App\Entity\Product;

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env');

$productRepository = new ProductRepository();

// $entity = new Product(null, 'calçado', '55.50', 'Calçados CIA');
// $productRepository->addProduct($entity);
// var_dump($entity);

$productRepository->listAllProducts();