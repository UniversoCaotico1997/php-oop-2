<?php

// Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
// L'e-commerce vende prodotti per animali.
// I prodotti sono categorizzati, le categorie sono Cani o Gatti.
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// Stampiamo delle card contenenti i dettagli dei prodotti,
// come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando 
// (prodotto, cibo, gioco, cuccia).

require __DIR__ . '/components/product.php';
require __DIR__ . '/components/category.php';


$cibo = new Product("Detastix", "Utilizzato per migliorare la resistenza dei denti", "Osso per cani", 20, new category('Cane'));
var_dump($cibo);

$gioco = new Product("Rimbalzina", "La palla che non smette di rimbalzare", "palla di plastica", 10, new category('Gatto'));
var_dump($gioco);
