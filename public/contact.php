<?php
    require_once 'include.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contactez l'équipe de Sablier Tranquille pour toute question sur nos produits de méditation et de bien-être. Notre équipe est à votre écoute.">
    <meta name="robots" content="index, follow">
    <title>Contact - Sablier Tranquille</title>
    <?php require_once 'head/meta.php'; ?>
    <?php require_once 'head/link.php'; ?>
    <?php require_once 'head/script.php'; ?>
</head>

<body>
    <!-- Header -->
    <header>
    <?php require_once 'menu/menu.php'; ?>
    </header>

    <section class="contact-section">
        <div class="container">
            <h2 class="section-title">Contactez-nous</h2>
            <p class="section-subtitle">Une question ? Un conseil ? Nous sommes à votre écoute.</p>
            <form class="contact-form" action="#" method="post">
                <div class="form-group">
                    <label for="name">Nom complet</label>
                    <input type="text" id="name" name="name" placeholder="Votre nom" required>
                </div>
                <div class="form-group">
                    <label for="email">Adresse email</label>
                    <input type="email" id="email" name="email" placeholder="Votre adresse email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Sujet</label>
                    <input type="text" id="subject" name="subject" placeholder="Sujet de votre message" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="Votre message" required></textarea>
                </div>
                <button type="submit" class="btn-submit">Envoyer</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <?php require_once 'footer/footer.php'; ?>
</body>
</html>