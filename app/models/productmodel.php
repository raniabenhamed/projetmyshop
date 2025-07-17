<?php

class ProductModel
{
    // Méthode pour récupérer les détails d'un produit en fonction de son ID
    public function getProductDetails($productId)
    {
        // Dans une application réelle, cela impliquerait probablement une requête à la base de données
        // pour obtenir les détails du produit en fonction de l'ID fourni.

        // Exemple fictif pour illustrer le concept :
        $products = [
            1 => ['name' => 'Produit 1', 'price' => 25.99],
            2 => ['name' => 'Produit 2', 'price' => 39.99],
            3 => ['name' => 'Produit 3', 'price' => 49.99],
            // ... Ajoutez plus de produits selon vos besoins
        ];

        // Vérifier si le produit avec l'ID spécifié existe dans la liste
        if (isset($products[$productId])) {
            return $products[$productId];
        } else {
            // Si le produit n'est pas trouvé, vous pouvez retourner false ou déclencher une exception, selon vos besoins.
            return false;
        }
    }
}
