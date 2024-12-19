<?php
if (isset($_SESSION['id'])) {

    // Récupérer le rôle actuel de la newsletter pour l'utilisateur connecté
    $req = $DB->prepare("SELECT newsletter FROM Utilisateur WHERE id = ?");
    $req->execute([$_SESSION['id']]);
    $user = $req->fetch();

    if (!$user) {
        die("Utilisateur non trouvé.");
    }

    $newsletter = $user['newsletter'];

    // Vérifier si le formulaire a été soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Inverser la valeur actuelle de newsletter
        $newNewsletter = $newsletter == 0 ? 1 : 0;

        // Mettre à jour la valeur dans la base de données
        $update = $DB->prepare("UPDATE Utilisateur SET newsletter = ? WHERE id = ?");
        $update->execute([$newNewsletter, $_SESSION['id']]);

    }
}
?>
<footer class="main-footer">
    <div class="footer-content">
        <!-- À propos -->
        <div class="footer-section">
            <h3>À propos de Sablier Tranquille</h3>
            <p>Votre destination bien-être pour la méditation et la relaxation. Nous sélectionnons avec soin des produits de qualité pour enrichir votre pratique quotidienne.</p>
            <div class="social-media">
                <a href="#" aria-label="Suivez-nous sur Facebook"><i class="fab fa-facebook"></i></a>
                <a href="#" aria-label="Suivez-nous sur Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" aria-label="Suivez-nous sur Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" aria-label="Suivez-nous sur Pinterest"><i class="fab fa-pinterest"></i></a>
            </div>
        </div>

        <!-- Navigation rapide -->
        <div class="footer-section">
            <h3>Navigation</h3>
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="product.php">Nos Produits</a></li>
                <li><a href="medit.php">Méditation</a></li>
                <li><a href="about.php">À propos</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="blog.php">Blog</a></li>
            </ul>
        </div>

        <!-- Informations pratiques -->
        <div class="footer-section">
            <h3>Informations</h3>
            <ul>
                <li><a href="shipping.php">Livraison</a></li>
                <li><a href="returns.php">Retours</a></li>
                <li><a href="terms.php">Conditions générales</a></li>
                <li><a href="privacy.php">Politique de confidentialité</a></li>
                <li><a href="faq.php">FAQ</a></li>
            </ul>
        </div>

        <!-- Newsletter -->
        <div class="footer-section">
            <h3>Newsletter</h3>
            <p>Restez informé de nos nouveautés et promotions</p>
            <form class="newsletter-form" method="POST">
                <div class="form-group">
                    <?php
                    if(isset($_SESSION['id'])){
                        if($newsletter == 1){
                            echo '<button type="submit" class="btn-subscribe">Se désabonner</button>';
                        }elseif($newsletter == 0){
                            echo '<button type="submit" class="btn-subscribe">S\'abonner</button>';
                        }
                    }
                    ?>
                </div>
            </form>
        </div>
    </div>

    <!-- Paiement sécurisé -->
    <div class="payment-methods">
        <h3>Paiement 100% sécurisé</h3>
        <div class="payment-icons">
            <i class="fab fa-cc-visa"></i>
            <i class="fab fa-cc-mastercard"></i>
            <i class="fab fa-cc-paypal"></i>
            <i class="fab fa-cc-apple-pay"></i>
        </div>
    </div>

    <!-- Copyright -->
    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> Sablier Tranquille. Tous droits réservés.</p>
    </div>
</footer>

<style>
.main-footer {
    background-color: #f8f9fa;
    padding: 4rem 0 0 0;
    color: #333;
    font-family: 'Arial', sans-serif;
}

.footer-content {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    padding: 0 2rem;
}

.footer-section {
    margin-bottom: 2rem;
}

.footer-section h3 {
    color: #2c3e50;
    font-size: 1.2rem;
    margin-bottom: 1.2rem;
    font-weight: 600;
}

.footer-section p {
    line-height: 1.6;
    color: #666;
    margin-bottom: 1rem;
}

.footer-section ul {
    list-style: none;
    padding: 0;
}

.footer-section ul li {
    margin-bottom: 0.8rem;
}

.footer-section ul li a {
    color: #666;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-section ul li a:hover {
    color: #4CAF50;
}

.social-media {
    display: flex;
    gap: 1rem;
    margin-top: 1rem;
}

.social-media a {
    color: #666;
    font-size: 1.5rem;
    transition: color 0.3s ease;
}

.social-media a:hover {
    color: #4CAF50;
}

.newsletter-form .form-group {
    display: flex;
    gap: 0.5rem;
}

.newsletter-form input {
    padding: 0.8rem;
    border: 1px solid #ddd;
    border-radius: 4px;
    flex-grow: 1;
}

.btn-subscribe {
    padding: 0.8rem 1.5rem;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-subscribe:hover {
    background-color: #45a049;
}

.payment-methods {
    text-align: center;
    padding: 2rem 0;
    background-color: #fff;
    margin-top: 2rem;
}

.payment-methods h3 {
    color: #2c3e50;
    font-size: 1.1rem;
    margin-bottom: 1rem;
}

.payment-icons {
    display: flex;
    justify-content: center;
    gap: 1.5rem;
    font-size: 2rem;
    color: #666;
}

.footer-bottom {
    text-align: center;
    padding: 1.5rem;
    background-color: #2c3e50;
    color: #fff;
    margin-top: 2rem;
}

@media (max-width: 768px) {
    .footer-content {
        grid-template-columns: 1fr;
    }

    .newsletter-form .form-group {
        flex-direction: column;
    }

    .payment-icons {
        flex-wrap: wrap;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const menuBtn = document.querySelector('.menu-btn');
    const navLinks = document.querySelector('.nav-links');
    
    if (menuBtn && navLinks) {
        menuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('mobile-menu');
        });
    }
});
</script>

<body>
</body>
</html>