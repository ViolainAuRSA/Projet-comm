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

        // Vérifiez si le produit existe déjà dans le panier
        $sql_check = "SELECT stock_quantite FROM panier WHERE panier_id = ? AND product_id = ?";
        $stmt_check = $DB->prepare($sql_check);
        $stmt_check->execute([$panier_id, $id_produit]);
        $existing_product = $stmt_check->fetch();

        if ($existing_product) {
            // Produit déjà dans le panier, mettez à jour la quantité
            $new_quantity = $existing_product['stock_quantite'] + $quantite_produit;
            $sql_update = "UPDATE panier SET stock_quantite = ? WHERE panier_id = ? AND product_id = ?";
            $stmt_update = $DB->prepare($sql_update);
            $stmt_update->execute([$new_quantity, $panier_id, $id_produit]);

            echo "<p>Quantité mise à jour : $nom_produit</p>";
            echo "<p>Nouvelle quantité : $new_quantity</p>";
        } else {
            // Produit non présent dans le panier, insérez-le
            $sql_insert = "INSERT INTO panier (panier_id, user_id, product_id, nom, prix, stock_quantite) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt_insert = $DB->prepare($sql_insert);
            $stmt_insert->execute([$panier_id, $user_id, $id_produit, $nom_produit, $prix_produit, $quantite_produit]);

            echo "<p>Produit ajouté : $nom_produit</p>";
            echo "<p>Quantité : $quantite_produit</p>";
        }

        // Mettez à jour le compteur total dans la session
        if (!isset($_SESSION['cart_count'])) {
            $_SESSION['cart_count'] = 0;
        }
        $_SESSION['cart_count'] += $quantite_produit;

        echo "<p>Total des articles dans le panier : " . $_SESSION['cart_count'] . "</p>";
        exit;
    } else {
        echo "<p>Erreur : Données manquantes pour ajouter au panier.</p>";
        exit;
    }
}
?>
