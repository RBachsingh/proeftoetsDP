<?php

class Winkelwagen
{
    private $color;
    private  $drinks;
    private  $food;

    public function __construct(string $color){
        $this->color = $color;
        $this->food = [];
        $this->drinks = [];
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    public function addfood(Food $food): bool {
       $this->food [] = $food;
        return true;
}
    public function adddrink(Drink $drink): bool{
        $this->drinks[]= $drink;
        return true;
    }
    public function printProducts(): void{
    foreach ($this->food as $item){
        echo $item->getName() . "<br>";
        echo $item->getCategory() . "<br>";
        echo $item->getPrice() . "<br> <br>";
    }
        foreach ($this->drinks as $drink){
            echo $drink->getName() . "<br>";
            echo $drink->getCategory() . "<br>";
            echo $drink->getPrice() . "<br>";
            echo $drink->getAge() . "<br> <br>";
        }

    }

    public function getNumberOfProducts(): void {
        $counter = 0;
        foreach ($this->food as $item){
            $counter ++;
        }

        foreach ($this->drinks as $drink){
            $counter ++;
        }
        echo "total is" . $counter;
    }
}