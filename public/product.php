<?php
    require_once 'include.php';
    include 'valid/valid_product.php';

    // Message de confirmation
    $message = "";

    // Vérification si le formulaire a été soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_name'], $_POST['product_price'])) {
        $productName = $_POST['product_name'];
        $productPrice = $_POST['product_price'];

        // Ajouter au panier en session
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        $_SESSION['cart'][] = [
            'name' => $productName,
            'price' => $productPrice,
            'quantity' => 1,
        ];

    }
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Nos Produits - Sablier Tranquille</title>
    <?php require_once 'head/meta.php'; ?>
    <?php require_once 'head/link.php'; ?>
</head>
<body>
    <header>
    <?php require_once 'menu/menu.php'; ?>
    </header>

    <section class="featured-products">
        <h1>Nos produits pour votre bien-être</h1>
        <div class="product-container">

            <div class="product-container">



            <div class="product-card">
                <img src="img/tapis-meditation-shop.jpeg" alt="Tapis de Méditation">
                <h2>Tapis de Méditation</h2>
                <p>Prix : 39,99€</p>
                <?php if (!isset($_SESSION['id'])) { ?>
                    <a href="login.php"><button>Ajouter au panier</button></a>
                <?php } else { ?>
                    <form method="post" action="">
                        <input type="hidden" name="product_id" value="6">
                        <input type="hidden" name="product_name" value="Tapis de Méditation">
                        <input type="hidden" name="product_price" value="39.99">
                        <input type="hidden" name="product_quantity" value="1">
                        <button type="submit" class="add-to-cart-btn">Ajouter au panier</button>
                    </form>
                <?php } ?>
            </div>



            <div class="product-card">
                <img src="img/encent-shop.jpg" alt="Encens Relaxants">
                <h2>Encens Relaxants</h2>
                <p>Prix : 9,99€</p>
                <?php if (!isset($_SESSION['id'])) { ?>
                    <a href="login.php"><button>Ajouter au panier</button></a>
                <?php } else { ?>
                    <form method="post" action="">
                        <input type="hidden" name="product_id" value="7">
                        <input type="hidden" name="product_name" value="Encens Relaxants">
                        <input type="hidden" name="product_price" value="9.99">
                        <input type="hidden" name="product_quantity" value="1">
                        <button type="submit" class="add-to-cart-btn">Ajouter au panier</button>
                    </form>
                <?php } ?>
            </div>



            <div class="product-card">
                <img src="img/bougie-serenite-shop.jpeg" alt="Bougie de Sérénité">
                <h2>Bougie de Sérénité</h2>
                <p>Prix : 19,99€</p>
                <?php if (!isset($_SESSION['id'])) { ?>
                    <a href="login.php"><button>Ajouter au panier</button></a>
                <?php } else { ?>
                    <form method="post" action="">
                        <input type="hidden" name="product_name" value="Bougie de Sérénité">
                        <input type="hidden" name="product_price" value="19.99">
                        <button type="submit" class="add-to-cart-btn">Ajouter au panier</button>
                    </form>
                <?php } ?>
            </div>
            <div class="product-card">
                <img src="img/oreiller-meditation-ergonomique.jpg" alt="Oreiller de Méditation Ergonomique">
                <h2>Oreiller de Méditation Ergonomique</h2>
                <p>Prix : 29,99€</p>
                <?php if (!isset($_SESSION['id'])) { ?>
                    <a href="login.php"><button>Ajouter au panier</button></a>
                <?php } else { ?>
                    <form method="post" action="">
                        <input type="hidden" name="product_name" value="Encens Relaxants">
                        <input type="hidden" name="product_price" value="9.99">
                        <button type="submit" class="add-to-cart-btn">Ajouter au panier</button>
                    </form>
                <?php } ?>
            </div>
        <div class="product-card">
            <img src="img/Huiles-Essentielles-Relaxantes.jpg" alt="Huiles Essentielles Relaxantes">
            <h2>Huiles Essentielles Relaxantes</h2>
            <p>Prix : 14,99€</p>
            <?php if(!isset($_SESSION['id'])){ ?>
                <a href="login.php"><button>Ajouter au panier</button></a>
            <?php } else { ?>
                <button onclick="addToCart(this)" class="add-to-cart-btn">Ajouter au panier</button>
            <?php } ?>
        </div>
        <div class="product-card">
            <img src="img/Bol-Chantant-Tibetain.jpg" alt="Bol Chantant Tibétain">
            <h2>Bol Chantant Tibétain</h2>
            <p>Prix : 49,99€</p>
            <?php if(!isset($_SESSION['id'])){ ?>
                <a href="login.php"><button>Ajouter au panier</button></a>
            <?php } else { ?>
                <button onclick="addToCart(this)" class="add-to-cart-btn">Ajouter au panier</button>
            <?php } ?>
        </div>
        <div class="product-card">
            <img src="img/Diffuseur-Huiles-Essentielles.jpg" alt="Diffuseur d'Huiles Essentielles">
            <h2>Diffuseur d'Huiles Essentielles</h2>
            <p>Prix : 39,99€</p>
            <?php if(!isset($_SESSION['id'])){ ?>
                <a href="login.php"><button>Ajouter au panier</button></a>
            <?php } else { ?>
                <button onclick="addToCart(this)" class="add-to-cart-btn">Ajouter au panier</button>
            <?php } ?>
        </div>
        <div class="product-card">
            <img src="img/Chaleur-Douce-Coussin-Chauffant.jpeg" alt="Chaleur Douce - Coussin Chauffant">
            <h2>Chaleur Douce - Coussin Chauffant</h2>
            <p>Prix : 24,99€</p>
            <?php if(!isset($_SESSION['id'])){ ?>
                <a href="login.php"><button>Ajouter au panier</button></a>
            <?php } else { ?>
                <button onclick="addToCart(this)" class="add-to-cart-btn">Ajouter au panier</button>
            <?php } ?>
        </div>
        <div class="product-card">
            <img src="img/The-Bien-etre-Serenite.jpg" alt="Thé Bien-être et Sérénité">
            <h2>Thé Bien-être et Sérénité</h2>
            <p>Prix : 8,99€</p>
            <?php if(!isset($_SESSION['id'])){ ?>
                <a href="login.php"><button>Ajouter au panier</button></a>
            <?php } else { ?>
                <button onclick="addToCart(this)" class="add-to-cart-btn">Ajouter au panier</button>
            <?php } ?>
        </div>
        <div class="product-card">
            <img src="img/Bandeau-Relaxant-Yeux.jpg" alt="Bandeau Relaxant pour les Yeux">
            <h2>Bandeau Relaxant pour les Yeux</h2>
            <p>Prix : 14,99€</p>
            <?php if(!isset($_SESSION['id'])){ ?>
                <a href="login.php"><button>Ajouter au panier</button></a>
            <?php } else { ?>
                <button onclick="addToCart(this)" class="add-to-cart-btn">Ajouter au panier</button>
            <?php } ?>
        </div>
        </div>
    </section>

    <?php require_once 'footer/footer.php'; ?>
    <script>
    function addToCart(button) {
        fetch('add_to_cart.php', {
            method: 'POST'
        })
        .then(response => response.json())
        .then(data => {
            if(data.success) {
                updateCartCounter(data.cart_count);
            }
        });
    }

    function updateCartCounter(count) {
        let counter = document.querySelector('.cart-counter');
        if (!counter) {
            counter = document.createElement('span');
            counter.className = 'cart-counter';
            document.querySelector('.btn-cart').appendChild(counter);
        }
        counter.textContent = count;
    }
    </script>
</body>
</html>