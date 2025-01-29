<?php

    session_start();

    include_once ('../../Database1.php');


    if(isset($POST)){
        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];

        $req = $DB->prepare('UPDATE produits SET stock_quantite = ?, prix = ? WHERE product_id = ?');
        $req->execute([$quantity, $price, $product_id]);
    }

    

?>
<DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page d'administration pour la gestion des produits chez Sablier Tranquille. Modifiez les quantités et les prix des produits.">
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <title>Admin - Sablier Tranquille</title>
</head>
<body>
    <header>
        <?php require_once 'menu_admin.php'; ?>
    </header>
    <main>
        <h1>Gestion des produits</h1>
    </main>

    <div class="product-card">
        <img src="../img/tapis-meditation-shop.jpeg" alt="Tapis de Méditation" />
        <h2>Tapis de Méditation</h2>
        <form method="post">
            <label for="quantity">Quantité</label>
            <input type="number" name="quantity" placeholder="0">

            <input type="hidden" name="product_id" value="6">
            <input type="hidden" name="product_name" value="Tapis de Méditation">
            <input type="hidden" name="product_price" value="39.99">
        <button>Terminer</button>
    </form>
    </div>


    <?php require_once '../footer/footer.php'; ?>
</body>
</html>
