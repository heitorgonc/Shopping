<?php

namespace App\Repository;

use App\Entity\Product;
use App\Service\Database;

class ProductRepository{
    /**
     * @var Database
     */
    private $database;

    public function __construct(){
        $this->database = Database::getInstance();
    }

    public function listAllProducts() : array {
        $query = $this->database->query('SELECT * FROM products');
        $list = $query->fetchAll(\PDO::FETCH_CLASS, Product::class);
        return $list;
    }

    public function addProduct(Product $product){
        // Estudar formas de prevenir SQL injection
        $statement = $this->database->prepare('INSERT INTO products (description, value, shop) VALUES (:description, :value, :shop)');
        $statement->execute(['description'=> $product->getDescription(), 'value'=> $product->getValue(), 'shop'=> $product->getShop()]);
        $product->setId($this->database->lastInsertId());
    }
}