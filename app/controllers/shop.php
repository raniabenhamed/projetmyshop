<?php

class Shop extends Controller
{
    public function index()
    {
        $data['page_title'] = "Shop";
        
        // Exemple de produits
        $data['products'] = [
            ['img' => 'img1.jpg', 'name' => 'Produit 1', 'category' => 'enfant', 'price' => 25.99],
            ['img' => 'img2.jpg', 'name' => 'Produit 2', 'category' => 'femme', 'price' => 39.99],
            ['img' => 'img3.jpg', 'name' => 'Produit 3', 'category' => 'homme', 'price' => 49.99],
            // ... Ajoutez plus de produits selon vos besoins
        ];

        $this->view("myshop/shop", $data);
    }
}
