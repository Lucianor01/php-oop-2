<?php

class Product
{
    public $name;

    public $price;

    public $image;

    public $category;

    public $is_available;

    public $quantity;

    public function __construct($_name, $_price, $_image, Category $_category, $_is_available = true, $_quantity = 10)
    {
        $this->name = $_name;

        $this->price = $_price;

        $this->image = $_image;

        $this->category = $_category;

        $this->is_available = $_is_available;

        $this->quantity = $_quantity;
    }

    // public function getProductDetails()
    // {
    //     return "Product Name: $this->name, Price: $this->price, Quantity: $this->quantity";
    // }

    public function getCategoryIcon()
    {
        $icon = $this->category->icon;
        return "<i class='$icon'></i>";
    }

    public function getClassName()
    {
        return get_class();
    }
}
