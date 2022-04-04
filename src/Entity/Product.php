<?php

namespace App\Entity;

class Product {
    private $id;
    private $description;
    private $value;
    private $shop;

    public function __construct(int $id = null, string $description, string $value, string $shop)
    {
        $this->id = $id;
        $this->description = $description;
        $this->value = $value;
        $this->shop = $shop;
    }

    public function getId() : int
    {
        return $this->id;
    }
    public function setId(int $id) : int
    {
        $this->id = $id;
        return $this->id;
    }

    public function getDescription() : string
    {
        return $this->description;
    }
    public function setDescription(string $description) : string
    {
        $this->description = $description;
        return $this->description;
    }

    public function getValue() : float
    {
        return $this->value;
    }
    public function setValue(string $value) : float
    {
        $this->value = $value;
        return $this->value;
    }

    public function getShop() : string
    {
        return $this->shop;
    }
    public function setShop(string $shop) :string
    {
        $this->shop = $shop;
        return $this->shop;
    }
}