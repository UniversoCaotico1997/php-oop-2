<?php

// Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
// L'e-commerce vende prodotti per animali.
// I prodotti sono categorizzati, le categorie sono Cani o Gatti.
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// Stampiamo delle card contenenti i dettagli dei prodotti,
// come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando 
// (prodotto, cibo, gioco, cuccia).

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
    public function get_category( $category)
    {
    return $this->category;
    }
}
?>