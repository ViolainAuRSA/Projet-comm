<?php
    
    session_start();

    include_once ('../../Database1.php');

    if(!isset($_SESSION['id']) || $_SESSION['role'] != 1){
        echo "Trace ta route c'est pas pour toi ici";
        exit();
    }

?>
<DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <title>Admin - Sablier Tranquille</title>
</head>
<body>
    <header>
        <?php require_once 'menu_admin.php'; ?>
    </header>
    <main>
        <h1>Bienvenue sur l'espace administrateur</h1>
    </main>
        <h2>Gestion des produits</h2>
        <section class="featured-products">
        <h1>Nos produits pour votre bien-être</h1>
        <div class="product-container">



            <div class="product-card">
                <img src="../img/tapis-meditation-shop.jpeg" alt="Tapis de Méditation">
                <h2>Tapis de Méditation</h2>
                <p>Prix : 39,99€</p>
                    <form method="post">
                        <input type="hidden" name="product_id" value="6">
                        <input type="hidden" name="product_name" value="Tapis de Méditation">
                        <input type="hidden" name="product_price" value="39.99">
                        <input type="hidden" name="product_quantity" value="1">
                        <a href="page_modif_prod1.php">Gérer les stocks</a>
                    </form>
            </div>



            <div class="product-card">
                <img src="../img/encent-shop.jpg" alt="Encens Relaxants">
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
                <img src="../img/bougie-serenite-shop.jpeg" alt="Bougie de Sérénité">
                <h2>Bougie de Sérénité</h2>
                <p>Prix : 19,99€</p>
                <?php if (!isset($_SESSION['id'])) { ?>
                    <a href="login.php"><button>Ajouter au panier</button></a>
                <?php } else { ?>
                    <form method="post" action="">
                        <input type="hidden" name="product_id" value="8">
                        <input type="hidden" name="product_name" value="Bougie de Sérénité">
                        <input type="hidden" name="product_price" value="19.99">
                        <input type="hidden" name="product_quantity" value="1">
                        <button type="submit" class="add-to-cart-btn">Ajouter au panier</button>
                    </form>
                <?php } ?>
            </div>


            <div class="product-card">
                <img src="../img/oreiller-meditation-ergonomique.jpg" alt="Oreiller de Méditation Ergonomique">
                <h2>Oreiller de Méditation Ergonomique</h2>
                <p>Prix : 29,99€</p>
                <?php if (!isset($_SESSION['id'])) { ?>
                    <a href="login.php"><button>Ajouter au panier</button></a>
                <?php } else { ?>
                    <form method="post" action="">
                        <input type="hidden" name="product_id" value="9">
                        <input type="hidden" name="product_name" value="Oreiller de Méditation Ergonomique">
                        <input type="hidden" name="product_price" value="29.99">
                        <input type="hidden" name="product_quantity" value="1">
                        <button type="submit" class="add-to-cart-btn">Ajouter au panier</button>
                    </form>
                <?php } ?>
            </div>


        <div class="product-card">
            <img src="../img/Huiles-Essentielles-Relaxantes.jpg" alt="Huiles Essentielles Relaxantes">
            <h2>Huiles Essentielles Relaxantes</h2>
            <p>Prix : 14,99€</p>
            <?php if (!isset($_SESSION['id'])) { ?>
                    <a href="login.php"><button>Ajouter au panier</button></a>
                <?php } else { ?>
                    <form method="post" action="">
                        <input type="hidden" name="product_id" value="10">
                        <input type="hidden" name="product_name" value="Huiles Essentielles Relaxantes">
                        <input type="hidden" name="product_price" value="14.99">
                        <input type="hidden" name="product_quantity" value="1">
                        <button type="submit" class="add-to-cart-btn">Ajouter au panier</button>
                    </form>
                <?php } ?>
            </div>



        <div class="product-card">
            <img src="../img/Bol-Chantant-Tibetain.jpg" alt="Bol Chantant Tibétain">
            <h2>Bol Chantant Tibétain</h2>
            <p>Prix : 49,99€</p>
            <?php if (!isset($_SESSION['id'])) { ?>
                    <a href="login.php"><button>Ajouter au panier</button></a>
                <?php } else { ?>
                    <form method="post" action="">
                        <input type="hidden" name="product_id" value="11">
                        <input type="hidden" name="product_name" value="Bol Chantant Tibétain">
                        <input type="hidden" name="product_price" value="49.99">
                        <input type="hidden" name="product_quantity" value="1">
                        <button type="submit" class="add-to-cart-btn">Ajouter au panier</button>
                    </form>
                <?php } ?>
            </div>



        <div class="product-card">
            <img src="../img/Diffuseur-Huiles-Essentielles.jpg" alt="Diffuseur d'Huiles Essentielles">
            <h2>Diffuseur d'Huiles Essentielles</h2>
            <p>Prix : 39,99€</p>
            <?php if (!isset($_SESSION['id'])) { ?>
                    <a href="login.php"><button>Ajouter au panier</button></a>
                <?php } else { ?>
                    <form method="post" action="">
                        <input type="hidden" name="product_id" value="12">
                        <input type="hidden" name="product_name" value="Diffuseur d'Huiles Essentielles">
                        <input type="hidden" name="product_price" value="39.99">
                        <input type="hidden" name="product_quantity" value="1">
                        <button type="submit" class="add-to-cart-btn">Ajouter au panier</button>
                    </form>
                <?php } ?>
            </div>


        <div class="product-card">
            <img src="../img/Chaleur-Douce-Coussin-Chauffant.jpeg" alt="Chaleur Douce - Coussin Chauffant">
            <h2>Chaleur Douce - Coussin Chauffant</h2>
            <p>Prix : 24,99€</p>
            <?php if(!isset($_SESSION['id'])){ ?>
                <a href="login.php"><button>Ajouter au panier</button></a>
            <?php } else { ?>
                <form method="post" action="">
                    <input type="hidden" name="product_id" value="13">
                    <input type="hidden" name="product_name" value="Chaleur Douce - Coussin Chauffant">
                    <input type="hidden" name="product_price" value="24.99">
                    <input type="hidden" name="product_quantity" value="1">
                    <button type="submit" class="add-to-cart-btn">Ajouter au panier</button>
                </form>
            <?php } ?>
        </div>



        <div class="product-card">
            <img src="../img/The-Bien-etre-Serenite.jpg" alt="Thé Bien-être et Sérénité">
            <h2>Thé Bien-être et Sérénité</h2>
            <p>Prix : 8,99€</p>
            <?php if(!isset($_SESSION['id'])){ ?>
                <a href="login.php"><button>Ajouter au panier</button></a>
            <?php } else { ?>
                <form method="post" action="">
                    <input type="hidden" name="product_id" value="14">
                    <input type="hidden" name="product_name" value="Thé Bien-être et Sérénité">
                    <input type="hidden" name="product_price" value="8.99">
                    <input type="hidden" name="product_quantity" value="1">
                    <button type="submit" class="add-to-cart-btn">Ajouter au panier</button>
                </form>
            <?php } ?>
        </div>



        <div class="product-card">
            <img src="../img/Bandeau-Relaxant-Yeux.jpg" alt="Bandeau Relaxant pour les Yeux">
            <h2>Bandeau Relaxant pour les Yeux</h2>
            <p>Prix : 14,99€</p>
            <?php if(!isset($_SESSION['id'])){ ?>
                <a href="login.php"><button>Ajouter au panier</button></a>
            <?php } else { ?>
                <form method="post" action="">
                    <input type="hidden" name="product_id" value="15">
                    <input type="hidden" name="product_name" value="Bandeau Relaxant pour les Yeux">
                    <input type="hidden" name="product_price" value="14.99">
                    <input type="hidden" name="product_quantity" value="1">
                    <button type="submit" class="add-to-cart-btn">Ajouter au panier</button>
                </form>
            <?php } ?>
            </div>
        </div>
    </section>

        <footer>
        <?php require_once '../footer/footer.php'; ?>
    </footer>
    <style>
        a{
            color: black;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover{
            color: black;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</body>
</html>