<?php
    require_once 'include.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Inscription | Sablier Tranquille</title>
    <?php require_once 'head/meta.php'; ?>
    <?php require_once 'head/link.php'; ?>
</head>
<body>
    <!-- Header -->
    <header>
    <?php require_once 'menu/menu.php'; ?>
    </header>

    <main class="main-content">
        <div class="register-container">
            <h1>Inscription</h1>
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="fullname">Nom complet</label>
                    <input type="text" id="fullname" name="fullname" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="submit-btn">S'inscrire</button>
            </form>
            <div class="login-link">
                <p>Déjà un compte ? <a href="login.php">Se connecter</a></p>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php require_once 'footer/footer.php'; ?>
</body>
</html> 