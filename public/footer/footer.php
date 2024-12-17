<footer>
    <p>&copy; 2024 Sablier Tranquille. Tous droits réservés.</p>
</footer>

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