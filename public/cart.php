<?php
require_once 'include.php';

// Récupérer les produits du panier pour l'utilisateur connecté 
$sql = "SELECT * FROM panier WHERE user_id = ?";
$stmt = $DB->prepare($sql);
$stmt->execute([$_SESSION['id']]);  // Utilisez l'ID de l'utilisateur connecté
$products = $stmt->fetchAll(PDO::FETCH_ASSOC); // Récupérer tous les articles

$totalPriceFinal = 0; // Initialiser le total général
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Panier Utilisateur - Sablier Tranquille</title>
    <?php require_once 'head/meta.php'; ?>
    <?php require_once 'head/link.php'; ?>
</head>
<body>

    <header>
        <?php require_once 'menu/menu.php'; ?>
    </header>

    <section class="cart-section">
        <div class="container">
            <h2 class="section-title">Votre Panier</h2>
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($products)): ?>
                        <?php foreach ($products as $product): ?>
                            <?php
                            // Calculer le total pour cet article
                            $totalPrice = $product['prix'] * $product['stock_quantite'];
                            // Ajouter au total général
                            $totalPriceFinal += $totalPrice;
                            ?>
                            <tr>
                                <td><?= htmlspecialchars($product['nom']) ?></td>
                                <td><?= htmlspecialchars($product['prix']) ?>€</td>
                                <td><?= htmlspecialchars($product['stock_quantite']) ?></td>
                                <td><?= htmlspecialchars($totalPrice) ?>€</td>
                                <td>
                                    <form method="POST" action="delete_to_cart.php" class="remove-form">
                                        <input type="hidden" name="product_id" value="<?= htmlspecialchars($product['product_id']) ?>">
                                        <button type="submit" class="btn-remove">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="text-center">Votre panier est vide.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            <div class="cart-summary">
                <p>Total général : <span class="cart-total"><?= htmlspecialchars($totalPriceFinal) ?>€</span></p>
                <button class="btn-checkout">Passer à la caisse</button>
            </div>
        </div>
    </section>
    
    <?php require_once 'footer/footer.php'; ?>
</body>
</html>

