<nav>
            <div class="logo">
                <img src="img/detoured_logo.png" alt="Sablier Tranquille Logo" class="site-logo">
            </div>
            <ul class="nav-links">
                <li><a href="/">Accueil</a></li>
                <li><a href="product.php">Nos Produits</a></li>
                <li><a href="medit.php">Méditation</a></li>
                <li><a href="">À propos</a></li>
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
                <?php 
                if(!isset($_SESSION['id'])){
                ?>
                <a href="register.php" class="login-btn">
                    <span class="login-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <circle cx="12" cy="7" r="4"></circle>
                            <path d="M5.5 21h13c1 0 2-1 2-2.5 0-3.5-4-6.5-8-6.5s-8 3-8 6.5c0 1.5 1 2.5 2 2.5z"></path>
                        </svg>
                    </span>
                </a>
                <?php }else {
                ?>
                 <a href="deconnexion.php" class="login-btn">
                    <span class="login-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <circle cx="12" cy="7" r="4"></circle>
                            <path d="M5.5 21h13c1 0 2-1 2-2.5 0-3.5-4-6.5-8-6.5s-8 3-8 6.5c0 1.5 1 2.5 2 2.5z"></path>
                        </svg>
                    </span>
                </a>

                <?php } ?>
                    <!-- Boutons séparés -->
                <a href="cart.php" class="btn-cart">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </div>
        </nav>