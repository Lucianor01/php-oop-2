<?php

require_once __DIR__ . '/Product.php';

class Category extends Product
{
    public $name;
    public $icon;

    public function __construct($_name, $_icon)
    {
        $this->name = $_name;
        $this->icon = $_icon;
    }
}
