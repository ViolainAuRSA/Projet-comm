<?php

    require_once 'include.php';
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


    <?php
        if(isset($_SESSION['id'])){
            $var = "Bonjour " . $_SESSION['nom'];
        }else{
            $var = "Bonjour, veuillez vous connecter";
        }
        echo $var;
    ?>
    <div class="product-card-accueil">
                <a href="deconnexion.php" class="add-to-cart">Se déconnecter</a>
            </div>

    <!-- Footer -->   
    <?php require_once 'footer/footer.php'; ?>
</body>
</html>
