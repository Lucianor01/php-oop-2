<?php

require_once __DIR__ . '/Product.php';

class Game extends Product
{

    protected $genre;

    public function __construct($_name, $_price, $_image, Category $_category, $_is_available = true, $_quantity = 10)
    {
        parent::__construct($_name, $_price, $_image, $_category, $_is_available, $_quantity);
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function setGenre($_genre)
    {
        return $this->genre = $_genre;
    }

    public function getClassName()
    {
        return get_class();
    }
}
