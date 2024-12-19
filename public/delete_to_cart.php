<?php
require_once 'include.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];

    try {
        $DB->beginTransaction();

        // Récupérer la quantité dans le panier avant suppression
        $sql_quantity = "SELECT stock_quantite FROM panier WHERE product_id = ? AND user_id = ?";
        $stmt_quantity = $DB->prepare($sql_quantity);
        $stmt_quantity->execute([$product_id, $_SESSION['id']]);
        $panier_quantity = $stmt_quantity->fetch();

        if ($panier_quantity) {
            // Restaurer le stock du produit
            $sql_restore = "UPDATE produits SET stock_quantite = stock_quantite + ? WHERE product_id = ?";
            $stmt_restore = $DB->prepare($sql_restore);
            $stmt_restore->execute([$panier_quantity['stock_quantite'], $product_id]);

            // Supprimer l'article du panier
            $sql_delete = "DELETE FROM panier WHERE product_id = ? AND user_id = ?";
            $stmt_delete = $DB->prepare($sql_delete);
            $stmt_delete->execute([$product_id, $_SESSION['id']]);

            // Mettre à jour le compteur du panier
            $sql_count = "SELECT SUM(stock_quantite) as total FROM panier WHERE panier_id = ?";
            $stmt_count = $DB->prepare($sql_count);
            $stmt_count->execute([$_SESSION['id']]);
            $result = $stmt_count->fetch();
            
            $_SESSION['cart_count'] = $result['total'] ?? 0;

            $DB->commit();
            header('Location: cart.php');
            exit();
        }
    } catch (Exception $e) {
        $DB->rollBack();
        echo "Une erreur est survenue : " . $e->getMessage();
    }
}
?>