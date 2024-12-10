<?php
    include_once ('../Database1.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require_once 'head/meta.php'; ?>
    <?php require_once 'head/link.php'; ?>
    <title>Sablier Tranquille | Méditation et Bien-être</title>
</head>

<body>
    <!-- Header -->
    <header>
    <?php require_once 'menu/menu.php'; ?>
    </header>

    <!-- Main Banner -->
    <section class="main-banner">
        <div class="banner-content">
            <h1>Plongez dans un voyage de sérénité</h1>
            <p>Découvrez nos produits et pratiques pour un bien-être total.</p>
            <div class="banner-buttons">
                <a href="product.php" class="explore-btn">Explorez nos produits</a>
                <a href="medit.php" class="meditation-btn">Commencez votre voyage de méditation</a>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="featured-products">
        <h1>Nos produits pour votre bien-être</h1>
        <div class="product-cards-accueil">
            <div class="product-card-accueil">
                <img src="img/tapis-meditation-shop.jpeg" alt="Tapis de méditation">
                <h3>Tapis de Méditation</h3>
                <p>Prix : 39,99€</p>
                <a href="cart.php" class="add-to-cart">Ajouter au panier</a>
            </div>
            <div class="product-card-accueil">
                <img src="img/encent-shop.jpg" alt="Encens Relaxants">
                <h3>Encens Relaxants</h3>
                <p>Prix : 9,99€</p>
                <a href="cart.php" class="add-to-cart">Ajouter au panier</a>
            </div>
            <div class="product-card-accueil">
                <img src="img/bougie-serenite-shop.jpeg" alt="Bougie de sérénité">
                <h3>Bougie de Sérénité</h3>
                <p>Prix : 19,99€</p>
                <a href="cart.php" class="add-to-cart">Ajouter au panier</a>
            </div>
        </div>
    </section>

    <!-- Meditation Section -->
    <section class="meditation-section">
        <h2>Commencez votre pratique de méditation</h2>
        <p>Explorez nos guides et accessoires pour vous aider à cultiver la paix intérieure.</p>
        <div class="links">
            <a href="#">Méditation guidée</a>
            <a href="#">Articles sur la pleine conscience</a>
            <a href="#">Programmes de méditation</a>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <h2>Ce que nos clients disent</h2>
        <div class="testimonials-cards">
            <div class="testimonial-card">
                <p>"Un véritable changement dans ma vie, je me sens beaucoup plus serein grâce aux produits de Sablier Tranquille."</p>
                <h4>Kaélé B.</h4>
            </div>
            <div class="testimonial-card">
                <p>"La bougie de sérénité est mon indispensable pour mes moments de méditation. Je recommande vivement!"</p>
                <h4>Quentin M.</h4>
            </div>
        </div>
    </section>
    <!-- Footer -->   
    <?php require_once 'footer/footer.php'; ?>
</body>
</html>
