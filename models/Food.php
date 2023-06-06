<?php

require_once __DIR__ . '/Product.php';

class Food extends Product
{

    protected $calories;

    public function __construct($_name, $_price, $_image, Category $_category, $_is_available = true, $_quantity = 10)
    {
        parent::__construct($_name, $_price, $_image, $_category, $_is_available, $_quantity);
    }

    public function getCalories()
    {
        return $this->calories;
    }

    public function setCalories($_calories)
    {

        if ($_calories < 300) {
            throw new Exception("Hai preso il prodotto sbagliato perchè le calorie sono meno di 300");
        } elseif ($_calories > 300) {
            throw new Exception("Hai preso il prodotto sbagliato perchè le calorie sono più di 300");
        } else {
            return $this->calories = $_calories;
        }

        // return $this->calories = $_calories;
    }

    public function getClassName()
    {
        return get_class();
    }
}
