<?php
    
    session_start();

    include_once ('../../Database1.php');
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
    <footer>
        <?php require_once '../footer/footer.php'; ?>
    </footer>
</body>
</html>
