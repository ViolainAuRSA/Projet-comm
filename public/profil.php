<?php
    require_once 'include.php';

    // Vérifier si l'utilisateur est connecté
    if(!isset($_SESSION['id'])){
        header("Location: login.php");
        exit();
    }

    // Récupérer les informations de l'utilisateur connecté
    $req = $DB->prepare("SELECT nom, mail, date_creation, date_connexion FROM Utilisateur WHERE id = ?");
    $req->execute(array($_SESSION['id']));
    $user = $req->fetch();

    if(!$user){
        header("Location: login.php");
        exit();
    }
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
            echo "Nom : " . htmlspecialchars($user['nom']) . "<br>";
            echo "Email : " . htmlspecialchars($user['mail']) . "<br>";
            echo "Membre depuis : " . date('d/m/Y', strtotime($user['date_creation'])) . "<br>";
            echo "Dernière connexion : " . date('d/m/Y à H:i', strtotime($user['date_connexion']));
        }
    ?>
    <div class="product-card-accueil">
        <a href="deconnexion.php" class="add-to-cart">Se déconnecter</a>
    </div>

    <!-- Footer -->   
    <?php require_once 'footer/footer.php'; ?>
</body>
</html>
