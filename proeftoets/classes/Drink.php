<?php

class Drink
{
private $name;
private $category;
private $age;
private $price;

    function __construct(string $name, string $category, float $price, int $age)
    {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }
}