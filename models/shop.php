<?php

class Shop
{
    public $title;
    public $image;
    public $genre_image;
    public $price;
    public $type;
    public $genre;

    public function __construct($_title, $_image, $_genre_image, $_price, $_type, $_genre)
    {
        $this->title = $_title;
        $this->image = $_image;
        $this->genre_image = $_genre_image;
        $this->price = $_price;
        $this->type = $_type;
        $this->genre = $_genre;
    }
}
