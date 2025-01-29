<?php
// Définition des meta descriptions pour chaque page
$metaDescriptions = [
    'index' => [
        'title' => 'Sablier Tranquille - Boutique de Méditation et Bien-être',
        'description' => 'Découvrez Sablier Tranquille, votre boutique en ligne spécialisée dans les produits de méditation et de bien-être. Trouvez la sérénité avec notre sélection de produits de qualité.',
        'keywords' => 'méditation, bien-être, zen, relaxation, sablier tranquille',
        'robots' => 'index, follow'
    ],
    'product' => [
        'title' => 'Nos Produits - Sablier Tranquille',
        'description' => 'Découvrez notre sélection de produits de méditation et de bien-être. Des articles soigneusement sélectionnés pour votre pratique quotidienne.',
        'keywords' => 'produits méditation, accessoires bien-être, boutique zen',
        'robots' => 'index, follow'
    ],
    'cart' => [
        'title' => 'Votre Panier - Sablier Tranquille',
        'description' => 'Votre panier d\'achats chez Sablier Tranquille. Retrouvez vos produits sélectionnés et finalisez votre commande en toute sécurité.',
        'keywords' => 'panier, achats, commande',
        'robots' => 'noindex, nofollow'
    ],
    'login' => [
        'title' => 'Connexion - Sablier Tranquille',
        'description' => 'Connectez-vous à votre compte Sablier Tranquille pour accéder à votre espace personnel et gérer vos commandes.',
        'keywords' => 'connexion, login, compte client',
        'robots' => 'noindex, nofollow'
    ],
    'register' => [
        'title' => 'Inscription - Sablier Tranquille',
        'description' => 'Créez votre compte sur Sablier Tranquille pour accéder à tous nos services et profiter d\'une expérience personnalisée.',
        'keywords' => 'inscription, création compte, nouveau client',
        'robots' => 'noindex, nofollow'
    ],
    'contact' => [
        'title' => 'Contact - Sablier Tranquille',
        'description' => 'Contactez l\'équipe de Sablier Tranquille pour toute question sur nos produits de méditation et de bien-être. Notre équipe est à votre écoute.',
        'keywords' => 'contact, support, aide, questions',
        'robots' => 'index, follow'
    ],
    'meditation' => [
        'title' => 'Méditation - Sablier Tranquille',
        'description' => 'Découvrez nos guides et ressources de méditation pour développer votre pratique quotidienne et atteindre la sérénité.',
        'keywords' => 'méditation, guides, pratique, sérénité',
        'robots' => 'index, follow'
    ]
];

// Déterminer la page actuelle
$currentPage = basename($_SERVER['PHP_SELF'], '.php');
if ($currentPage === 'Index') $currentPage = 'index';

// Récupérer les meta données pour la page actuelle
$meta = $metaDescriptions[$currentPage] ?? $metaDescriptions['index'];
?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo htmlspecialchars($meta['description']); ?>">
<meta name="keywords" content="<?php echo htmlspecialchars($meta['keywords']); ?>">
<meta name="robots" content="<?php echo htmlspecialchars($meta['robots']); ?>">
<title><?php echo htmlspecialchars($meta['title']); ?></title>

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://sabliertranquille.com<?php echo $_SERVER['REQUEST_URI']; ?>">
<meta property="og:title" content="<?php echo htmlspecialchars($meta['title']); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($meta['description']); ?>">
<meta property="og:image" content="https://sabliertranquille.com/img/og-image.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://sabliertranquille.com<?php echo $_SERVER['REQUEST_URI']; ?>">
<meta property="twitter:title" content="<?php echo htmlspecialchars($meta['title']); ?>">
<meta property="twitter:description" content="<?php echo htmlspecialchars($meta['description']); ?>">
<meta property="twitter:image" content="https://sabliertranquille.com/img/og-image.jpg">

<!-- Autres meta tags -->
<meta name="author" content="Sablier Tranquille">
<meta name="theme-color" content="#4CAF50">
<link rel="canonical" href="https://sabliertranquille.com<?php echo $_SERVER['REQUEST_URI']; ?>" />