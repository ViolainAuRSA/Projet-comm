<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Panier Utilisateur - Sablier Tranquille</title>
        <link rel="stylesheet" href="styles.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    </head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <div class="logo">
                <img src="img/detoured_logo.png" alt="Sablier Tranquille Logo" class="site-logo">
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="product.php">Nos Produits</a></li>
                <li><a href="medit.php">Méditation</a></li>
                <li><a href="#">À propos</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="search-login">
                <input class="search-bar" type="text" placeholder="Rechercher...">
                <button class="search-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </button>
                <a href="#" class="login-btn">
                    <span class="login-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <circle cx="12" cy="7" r="4"></circle>
                            <path d="M5.5 21h13c1 0 2-1 2-2.5 0-3.5-4-6.5-8-6.5s-8 3-8 6.5c0 1.5 1 2.5 2 2.5z"></path>
                        </svg>
                    </span>
                </a>
                    <!-- Boutons séparés -->
                <a href="#" class="btn-cart">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </div>
        </nav>
    </header>

    <section class="cart-section">
        <div class="container">
            <h2 class="section-title">Votre Panier</h2>
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Exemple de produit dans le panier -->
                    <tr>
                        <td>Tapis de Méditation</td>
                        <td>39,99€</td>
                        <td>
                            <input type="number" value="1" min="1" class="quantity-input">
                        </td>
                        <td>39,99€</td>
                        <td>
                            <button class="btn-remove">Supprimer</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Bougie de Sérénité</td>
                        <td>19,99€</td>
                        <td>
                            <input type="number" value="2" min="1" class="quantity-input">
                        </td>
                        <td>39,98€</td>
                        <td>
                            <button class="btn-remove">Supprimer</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="cart-summary">
                <p>Total général : <span class="cart-total">79,97€</span></p>
                <button class="btn-checkout">Passer à la caisse</button>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Sablier Tranquille. Tous droits réservés.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>