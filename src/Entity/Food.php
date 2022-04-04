<?php

namespace App\Entity;

class Food extends Product{
    private $calories;
    private $valDate;

    public function __construct(int $id = null, string $description, float $value, string $shop, float $calories, string $valDate)
    {
        parent::__construct($id, $description, $value, $shop);
        $this->calories = $calories;
        $this->valDate = $valDate;
    }

    public function getCalories() : float
    {
        return $this->calories;
    }
    public function setCalories(float $calories) : float
    {
        $this->calories = $calories;
        return $this->calories;
    }

    public function getValDate() : string
    {
        return $this->valDate;
    }
    public function setValDate(string $valDate) : string
    {
        $this->valDate = $valDate;
        return $this->valDate;
    }
}