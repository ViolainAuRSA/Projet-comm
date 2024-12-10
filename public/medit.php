<?php
    require_once 'include.php';
?>

<!DOCTYPE html>
<html lang="fr">
    <title>Sablier Tranquille | Méditation et Bien-être</title>
    <?php require_once 'head/meta.php'; ?>
    <?php require_once 'head/link.php'; ?>
</head>
<body>
        <!-- Header -->
        <header>
        <?php require_once 'menu/menu.php'; ?>
        </header>
        
        <section class="meditation-section">
            <div class="container">
                <h2 class="section-title">Pratiques et Conseils de Méditation</h2>
                <p class="intro-text">
                    Découvrez nos conseils pour une pratique de méditation réussie. Que vous soyez débutant ou pratiquant expérimenté, ces techniques vous guideront vers un état de relaxation profonde et de bien-être.
                </p>
        
                <!-- Conseils de Méditation -->
                <div class="meditation-tips">
                    <article class="tip">
                        <h3>1. Créez un espace calme</h3>
                        <p>
                            Choisissez un endroit paisible où vous ne serez pas dérangé. Éteignez votre téléphone, tamisez les lumières et installez un tapis ou un coussin confortable.
                        </p>
                    </article>
                    <article class="tip">
                        <h3>2. Concentrez-vous sur votre respiration</h3>
                        <p>
                            Asseyez-vous en tailleur ou en position confortable. Fermez les yeux et prenez de profondes inspirations. Concentrez-vous sur l'air qui entre et sort de vos narines.
                        </p>
                    </article>
                    <article class="tip">
                        <h3>3. Méditez quotidiennement</h3>
                        <p>
                            Essayez de méditer à la même heure chaque jour. Commencez avec 5 à 10 minutes, puis augmentez progressivement la durée de vos séances.
                        </p>
                    </article>
                    <article class="tip">
                        <h3>4. Essayez la pleine conscience</h3>
                        <p>
                            Pendant la méditation, laissez vos pensées venir et repartir sans jugement. Revenez doucement à votre respiration si votre esprit s'égare.
                        </p>
                    </article>
                    <article class="tip">
                        <h3>5. Combinez méditation et yoga</h3>
                        <p>
                            Intégrez des postures de yoga simples comme la posture de l'enfant ou la posture du chien tête en bas pour approfondir votre relaxation.
                        </p>
                    </article>
                </div>
        
                <!-- Séance guidée -->
                <div class="guided-session">
                    <h3>Séance de Méditation Guidée</h3>
                    <p>
                        Vous pouvez suivre une séance guidée en utilisant notre <a href="#">playlist de méditation</a> ou en téléchargeant notre guide audio gratuit.
                    </p>
                </div>
            </div>
        </section>
    
        <!-- Footer -->
        <?php require_once 'footer/footer.php'; ?>
</body>
</html>