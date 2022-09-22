<?php

class Food
{
    private $name;
    private $category;
    private $price;


    function __construct(string $name, string $category, float $price)
    {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
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
}