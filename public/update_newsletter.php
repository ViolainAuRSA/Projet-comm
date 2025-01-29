<?php
require_once 'include.php';

if(isset($_POST['newsletter-form']) && isset($_SESSION['id'])) {
    $newsletter_value = intval($_POST['newsletter-form']); // Conversion en entier
    $user_id = $_SESSION['id'];

    try {
        // Mise à jour dans la base de données
        $req = $DB->prepare("UPDATE Utilisateur SET newsletter = ? WHERE id = ?");
        $success = $req->execute(array($newsletter_value, $user_id));

        if($success) {
            // Vérification que la mise à jour a bien été effectuée
            $verify = $DB->prepare("SELECT newsletter FROM Utilisateur WHERE id = ?");
            $verify->execute(array($user_id));
            $result = $verify->fetch();

            if($result && $result['newsletter'] == $newsletter_value) {
                $_SESSION['newsletter'] = $newsletter_value;
                $_SESSION['flash_message'] = $newsletter_value == 1 ? 
                    "Vous êtes maintenant abonné à la newsletter" : 
                    "Vous êtes maintenant désabonné de la newsletter";
            } else {
                $_SESSION['flash_message'] = "Erreur lors de la mise à jour de votre statut";
            }
        } else {
            $_SESSION['flash_message'] = "Erreur lors de la mise à jour";
        }

        // Redirection vers la page précédente
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    } catch(Exception $e) {
        $_SESSION['flash_message'] = "Une erreur est survenue lors de la mise à jour";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }
} else {
    $_SESSION['flash_message'] = "Données invalides";
    header('Location: /');
    exit();
}
?> 
