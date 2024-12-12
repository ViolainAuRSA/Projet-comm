<?php
    require_once 'include.php';
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
            <!-- Exemple d'une carte produit -->
            <div class="product-card">
                <img src="img/tapis-meditation-shop.jpeg" alt="Tapis de Méditation">
                <h2>Tapis de Méditation</h2>
                <p>Prix : 39,99€</p>
                <?php if(!isset($_SESSION['id'])){ ?>
                    <a href="login.php"><button>Ajouter au panier</button></a>
                <?php } else { ?>
                    <a href="cart.php"><button>Ajouter au panier</button></a>
                <?php } ?>
            </div>
            <div class="product-card">
                <img src="img/encent-shop.jpg" alt="Encens Relaxants">
                <h2>Encens Relaxants</h2>
                <p>Prix : 9,99€</p>
                <?php if(!isset($_SESSION['id'])){ ?>
                    <a href="login.php"><button>Ajouter au panier</button></a>
                <?php } else { ?>
                    <a href="cart.php"><button>Ajouter au panier</button></a>
                <?php } ?>
            </div>
            <div class="product-card">
                <img src="img/bougie-serenite-shop.jpeg" alt="Bougie de Sérénité">
                <h2>Bougie de Sérénité</h2>
                <p>Prix : 19,99€</p>
                <?php if(!isset($_SESSION['id'])){ ?>
                    <a href="login.php"><button>Ajouter au panier</button></a>
                <?php } else { ?>
                    <a href="cart.php"><button>Ajouter au panier</button></a>
                <?php } ?>
            </div>
              <!-- Nouveaux produits -->
        <div class="product-card">
            <img src="img/Oreiller-Meditation-Ergonomique.jpg" alt="Oreiller de Méditation Ergonomique">
            <h2>Oreiller de Méditation Ergonomique</h2>
            <p>Prix : 29,99€</p>
            <?php if(!isset($_SESSION['id'])){ ?>
                <a href="login.php"><button>Ajouter au panier</button></a>
            <?php } else { ?>
                <a href="cart.php"><button>Ajouter au panier</button></a>
            <?php } ?>
        </div>
        <div class="product-card">
            <img src="img/Huiles-Essentielles-Relaxantes.jpg" alt="Huiles Essentielles Relaxantes">
            <h2>Huiles Essentielles Relaxantes</h2>
            <p>Prix : 14,99€</p>
            <?php if(!isset($_SESSION['id'])){ ?>
                <a href="login.php"><button>Ajouter au panier</button></a>
            <?php } else { ?>
                <a href="cart.php"><button>Ajouter au panier</button></a>
            <?php } ?>
        </div>
        <div class="product-card">
            <img src="img/Bol-Chantant-Tibetain.jpg" alt="Bol Chantant Tibétain">
            <h2>Bol Chantant Tibétain</h2>
            <p>Prix : 49,99€</p>
            <?php if(!isset($_SESSION['id'])){ ?>
                <a href="login.php"><button>Ajouter au panier</button></a>
            <?php } else { ?>
                <a href="cart.php"><button>Ajouter au panier</button></a>
            <?php } ?>
        </div>
        <div class="product-card">
            <img src="img/Diffuseur-Huiles-Essentielles.jpg" alt="Diffuseur d'Huiles Essentielles">
            <h2>Diffuseur d'Huiles Essentielles</h2>
            <p>Prix : 39,99€</p>
            <?php if(!isset($_SESSION['id'])){ ?>
                <a href="login.php"><button>Ajouter au panier</button></a>
            <?php } else { ?>
                <a href="cart.php"><button>Ajouter au panier</button></a>
            <?php } ?>
        </div>
        <div class="product-card">
            <img src="img/Chaleur-Douce-Coussin-Chauffant.jpeg" alt="Chaleur Douce - Coussin Chauffant">
            <h2>Chaleur Douce - Coussin Chauffant</h2>
            <p>Prix : 24,99€</p>
            <?php if(!isset($_SESSION['id'])){ ?>
                <a href="login.php"><button>Ajouter au panier</button></a>
            <?php } else { ?>
                <a href="cart.php"><button>Ajouter au panier</button></a>
            <?php } ?>
        </div>
        <div class="product-card">
            <img src="img/The-Bien-etre-Serenite.jpg" alt="Thé Bien-être et Sérénité">
            <h2>Thé Bien-être et Sérénité</h2>
            <p>Prix : 8,99€</p>
            <?php if(!isset($_SESSION['id'])){ ?>
                <a href="login.php"><button>Ajouter au panier</button></a>
            <?php } else { ?>
                <a href="cart.php"><button>Ajouter au panier</button></a>
            <?php } ?>
        </div>
        <div class="product-card">
            <img src="img/Bandeau-Relaxant-Yeux.jpg" alt="Bandeau Relaxant pour les Yeux">
            <h2>Bandeau Relaxant pour les Yeux</h2>
            <p>Prix : 14,99€</p>
            <?php if(!isset($_SESSION['id'])){ ?>
                <a href="login.php"><button>Ajouter au panier</button></a>
            <?php } else { ?>
                <a href="cart.php"><button>Ajouter au panier</button></a>
            <?php } ?>
        </div>
        </div>
    </section>

    <?php require_once 'footer/footer.php'; ?>
</body>
</html>