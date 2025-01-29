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
            <?php if(isset($_SESSION['id']) && isset($_SESSION['role']) && $_SESSION['role'] == 1){ ?>
                <li><a href="admin/accueil.php">Admin</a></li>
            <?php } ?>
        </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
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
                <a href="profil.php" class="login-btn">
                    <span class="login-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <circle cx="12" cy="7" r="4"></circle>
                            <path d="M5.5 21h13c1 0 2-1 2-2.5 0-3.5-4-6.5-8-6.5s-8 3-8 6.5c0 1.5 1 2.5 2 2.5z"></path>
                        </svg>
                    </span>
                    <span class="user-name"><?php echo ucfirst($_SESSION['nom'] . ' ' ); ?></span>
                </a>

            <?php } ?>
                    <!-- Boutons séparés -->
            <?php if(!isset($_SESSION['id'])){ ?>
                <a href="login.php" class="btn-cart">
            <?php } else { ?>
                <a href="cart.php" class="btn-cart">
            <?php } ?>
                <i class="fas fa-shopping-cart"></i>
                <?php if(isset($_SESSION['cart_count']) && $_SESSION['cart_count'] > 0): ?>
                    <span class="cart-counter"><?php echo $_SESSION['cart_count']; ?></span>
                <?php endif; ?>
            </a>
        </div>
</nav>