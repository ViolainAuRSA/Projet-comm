<?php
require_once 'include.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];

    // Supprimer l'article du panier pour l'utilisateur connecté
    $sql = "DELETE FROM panier WHERE product_id = ? AND user_id = ?";
    $stmt = $DB->prepare($sql);

    if ($stmt->execute([$product_id, $_SESSION['id']])) {
        // Après la suppression, mettre à jour le compteur
        $sql_count = "SELECT SUM(stock_quantite) as total FROM panier WHERE panier_id = ?";
        $stmt_count = $DB->prepare($sql_count);
        $stmt_count->execute([$_SESSION['id']]);
        $result = $stmt_count->fetch();
        
        $_SESSION['cart_count'] = $result['total'] ?? 0;
        
        header('Location: cart.php');
        exit();
    } else {
        echo "Erreur lors de la suppression de l'article.";
    }
}
?>