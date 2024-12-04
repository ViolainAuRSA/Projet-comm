<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Produits - Sablier Tranquille</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="img/detoured_logo.png" alt="Sablier Tranquille Logo" class="site-logo">
            </div>
            <ul class="nav-links">
                <li><a href="index.html">Accueil</a></li>
                <li><a href="product.html">Nos Produits</a></li>
                <li><a href="medit.html">Méditation</a></li>
                <li><a href="#">À propos</a></li>
                <li><a href="contact.html">Contact</a></li>
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
                <a href="cart.html" class="btn-cart">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </div>
        </nav>
    </header>

    <section class="featured-products">
        <h1>Nos produits pour votre bien-être</h1>
        <div class="product-container">
            <!-- Exemple d'une carte produit -->
            <div class="product-card">
                <img src="img/tapis-meditation-shop.jpeg" alt="Tapis de Méditation">
                <h2>Tapis de Méditation</h2>
                <p>Prix : 39,99€</p>
                <button>Ajouter au panier</button>
            </div>
            <div class="product-card">
                <img src="img/encent-shop.jpg" alt="Encens Relaxants">
                <h2>Encens Relaxants</h2>
                <p>Prix : 9,99€</p>
                <button>Ajouter au panier</button>
            </div>
            <div class="product-card">
                <img src="img/bougie-serenite-shop.jpeg" alt="Bougie de Sérénité">
                <h2>Bougie de Sérénité</h2>
                <p>Prix : 19,99€</p>
                <button>Ajouter au panier</button>
            </div>
              <!-- Nouveaux produits -->
        <div class="product-card">
            <img src="img/Oreiller-Meditation-Ergonomique.jpg" alt="Oreiller de Méditation Ergonomique">
            <h2>Oreiller de Méditation Ergonomique</h2>
            <p>Prix : 29,99€</p>
            <button>Ajouter au panier</button>
        </div>
        <div class="product-card">
            <img src="img/Huiles-Essentielles-Relaxantes.jpg" alt="Huiles Essentielles Relaxantes">
            <h2>Huiles Essentielles Relaxantes</h2>
            <p>Prix : 14,99€</p>
            <button>Ajouter au panier</button>
        </div>
        <div class="product-card">
            <img src="img/Bol-Chantant-Tibetain.jpg" alt="Bol Chantant Tibétain">
            <h2>Bol Chantant Tibétain</h2>
            <p>Prix : 49,99€</p>
            <button>Ajouter au panier</button>
        </div>
        <div class="product-card">
            <img src="img/Diffuseur-Huiles-Essentielles.jpg" alt="Diffuseur d'Huiles Essentielles">
            <h2>Diffuseur d'Huiles Essentielles</h2>
            <p>Prix : 39,99€</p>
            <button>Ajouter au panier</button>
        </div>
        <div class="product-card">
            <img src="img/Chaleur-Douce-Coussin-Chauffant.jpeg" alt="Chaleur Douce - Coussin Chauffant">
            <h2>Chaleur Douce - Coussin Chauffant</h2>
            <p>Prix : 24,99€</p>
            <button>Ajouter au panier</button>
        </div>
        <div class="product-card">
            <img src="img/The-Bien-etre-Serenite.jpg" alt="Thé Bien-être et Sérénité">
            <h2>Thé Bien-être et Sérénité</h2>
            <p>Prix : 8,99€</p>
            <button>Ajouter au panier</button>
        </div>
        <div class="product-card">
            <img src="img/Bandeau-Relaxant-Yeux.jpg" alt="Bandeau Relaxant pour les Yeux">
            <h2>Bandeau Relaxant pour les Yeux</h2>
            <p>Prix : 14,99€</p>
            <button>Ajouter au panier</button>
        </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Sablier Tranquille. Tous droits réservés.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>