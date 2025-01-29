<?php
include_once('../Database1.php');

if (isset($_SESSION['id'])) {
    $panier_id = $_SESSION['id'];
    $user_id = $_SESSION['id'];
}   

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['product_id'], $_POST['product_name'], $_POST['product_price'], $_POST['product_quantity'])) {
        $id_produit = $_POST['product_id'];
        $nom_produit = $_POST['product_name'];
        $prix_produit = $_POST['product_price'];
        $quantite_produit = $_POST['product_quantity'];

        // Vérifier le stock disponible
        $sql_stock = "SELECT stock_quantite FROM produits WHERE product_id = ?";
        $stmt_stock = $DB->prepare($sql_stock);
        $stmt_stock->execute([$id_produit]);
        $product_stock = $stmt_stock->fetch();

        if (!$product_stock || $product_stock['stock_quantite'] < $quantite_produit) {
            echo "Stock insuffisant";
            exit;
        }

        // Vérifier si le produit existe déjà dans le panier
        $sql_check = "SELECT stock_quantite FROM panier WHERE panier_id = ? AND product_id = ?";
        $stmt_check = $DB->prepare($sql_check);
        $stmt_check->execute([$panier_id, $id_produit]);
        $existing_product = $stmt_check->fetch();

        try {
            // Démarrer une transaction
            $DB->beginTransaction();

        if ($existing_product) {
                // Vérifier si le stock est suffisant pour l'augmentation
                if ($product_stock['stock_quantite'] < 0) {
                $DB->rollBack();
                    echo "Stock insuffisant";
                exit;
            }

                // Mettre à jour la quantité dans le panier
                $new_quantity = $existing_product['stock_quantite'] + $quantite_produit;
                $sql_update = "UPDATE panier SET stock_quantite = ? WHERE panier_id = ? AND product_id = ?";
            $stmt_update = $DB->prepare($sql_update);
                $stmt_update->execute([$new_quantity, $panier_id, $id_produit]);
        } else {
            // Ajouter au panier
                $sql_insert = "INSERT INTO panier (panier_id, user_id, product_id, nom, prix, stock_quantite) 
                              VALUES (?, ?, ?, ?, ?, ?)";
            $stmt_insert = $DB->prepare($sql_insert);
                $stmt_insert->execute([$panier_id, $user_id, $id_produit, $nom_produit, $prix_produit, $quantite_produit]);
        }

        // Mettre à jour le stock du produit
        $new_stock = $product_stock['stock_quantite'] - $quantite_produit;
        $sql_update_stock = "UPDATE produits SET stock_quantite = ? WHERE product_id = ?";
        $stmt_update_stock = $DB->prepare($sql_update_stock);
        $stmt_update_stock->execute([$new_stock, $id_produit]);

        // Calculer le nombre total de produits dans le panier
            $sql_count = "SELECT SUM(stock_quantite) as total FROM panier WHERE panier_id = ?";
        $stmt_count = $DB->prepare($sql_count);
            $stmt_count->execute([$panier_id]);
        $result = $stmt_count->fetch();
        
        $_SESSION['cart_count'] = $result['total'] ?? 0;

        // Valider la transaction
        $DB->commit();

            header('Location: ../product.php');
        exit;
    } catch (Exception $e) {
            // En cas d'erreur, annuler toutes les modifications
        $DB->rollBack();
            echo "Une erreur est survenue : " . $e->getMessage();
        exit;
        }
    }
}
?>
