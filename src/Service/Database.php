<?php

namespace App\Service;

class Database extends \PDO
{
    static private $instance;

    private function __construct($dsn){
        parent:: __construct($dsn);
    }

    static public function getInstance()
    {
        if(! self::$instance){
            self::$instance = new self('sqlite:'.$_ENV['DATABASE_PATH']);
        }

        return self::$instance;
    }
}