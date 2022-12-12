<?php

class Product
{
    public $name;
    public $type;
    public $description;
    public $price;
    public $category;

    public function __construct(string $name, string $description, string $type, int $price, string $category)
    {
        $this->name = $name;
        $this->type = $type;
        $this->description = $description;
        $this->price = $price;
        $this->set_category($category);
    }

    public function set_category($category)
    {
     if ($category == 'Cane') {
        $this->category = <i class="fa-solid fa-dog"></i>;
        else if ($category == 'Gatto') {
        $this->category = <i class="fa-solid fa-cat"></i>;
        }
     }
    }
    public function get_category($category)
    {
    return $this->category;
    }
}
