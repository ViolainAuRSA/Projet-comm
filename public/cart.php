<?php
    require_once 'include.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Panier Utilisateur - Sablier Tranquille</title>
        <?php require_once 'head/meta.php'; ?>
        <?php require_once 'head/link.php'; ?>
    </head>
<body>
    <!-- Header -->
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
                    <!-- Exemple de produit dans le panier -->
                    <tr>
                        <td>Tapis de Méditation</td>
                        <td>39,99€</td>
                        <td>
                            <input type="number" value="1" min="1" class="quantity-input">
                        </td>
                        <td>39,99€</td>
                        <td>
                            <button class="btn-remove">Supprimer</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Bougie de Sérénité</td>
                        <td>19,99€</td>
                        <td>
                            <input type="number" value="2" min="1" class="quantity-input">
                        </td>
                        <td>39,98€</td>
                        <td>
                            <button class="btn-remove">Supprimer</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="cart-summary">
                <p>Total général : <span class="cart-total">79,97€</span></p>
                <button class="btn-checkout">Passer à la caisse</button>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <?php require_once 'footer/footer.php'; ?>
</body>
</html>