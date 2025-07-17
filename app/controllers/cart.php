<?php

class Cart extends Controller
{
    function index()
    {
        $data['page_title'] = "Cart";
        $this->view("myshop/cart", $data);
  
            // Récupérer les articles ajoutés au panier à partir de la requête GET
            $cartItems = $this->getCartItems();
    
        
            $data['cartItems'] = $cartItems;
    
            $this->view("myshop/cart", $data);
        }
    
        // Fonction pour récupérer les articles ajoutés au panier
        private function getCartItems() {
            $cartItems = [];
    
            // Vérifier si des articles ont été ajoutés à partir de la requête GET
            if (isset($_GET['id'])) {
                // Supposons que vous ayez un modèle pour les produits (ProductModel)
                // Vous devrez peut-être ajuster cela en fonction de votre structure de modèle
                $productModel = $this->loadModel('ProductModel');
                $productId = $_GET['id'];
    
                // Récupérer les détails du produit à partir de la base de données
                $productDetails = $productModel->getProductDetails($productId);
    
                // Ajouter le produit à la liste des articles dans le panier
                if ($productDetails) {
                    $cartItems[] = $productDetails;
                }
            }
    
            return $cartItems;
        }
    }

?>