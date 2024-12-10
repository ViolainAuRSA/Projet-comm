<?php
    require_once 'include.php';

    if(!empty($_POST)){
        extract($_POST);

        $valid = (boolean) true;

        if(isset($_POST['register'])){
            $nom = trim($nom);
            $mail = trim($mail);
            $password = trim($password);
            $confpassword = trim($confpassword);}

            if(empty($nom)){
                $valid = false;
                $err_nom = "Le nom est obligatoire";
            }elseif(grapheme_strlen($nom) < 3){
                $valid = false;
                $err_nom = "Le nom doit contenir plus de 3 caractères";
            }elseif(grapheme_strlen($nom) >= 25){
                $valid = false;
                $err_nom = "Le nom doit contenir moins de 25 caractères";
            }else{
                $req = $DB->prepare("SELECT id FROM Utilisateur WHERE nom = ?");

                $req->execute(array($nom));

                $req = $req->fetch();

                if(isset($req['id'])){
                    $valid = false;
                    $err_nom = "Le nom est déjà utilisé";
                }
            }

            
            if(empty($mail)){
                $valid = false;
                $err_mail = "L'email est obligatoire";

            }elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)){
                $valid = false;
                $err_mail = "L'email n'est pas valide";

            }elseif($mail != $confmail){
                $valid = false;
                $err_confmail = "Les emails ne correspondent pas";

            }else{
                $req = $DB->prepare("SELECT id FROM Utilisateur WHERE mail = ?");
                $req->execute(array($mail));
                $req = $req->fetchAll();
                if(isset($req['id'])){
                    $valid = false;
                    $err_name = "Le nom est déjà utilisé";
                }
            }
            if(empty($password)){
                $valid = false;
                $err_password = "Le mot de passe est obligatoire";
            }elseif($password != $confpassword){
                $valid = false;
                $err_confpassword = "Les mots de passe ne correspondent pas";
            }
            if($valid){

                $crypt_password = crypt($password, '$6$rounds=5000$3+z7utvR=!/uKQdd;nuh_?OuyBH(EV)`InQMyMEtKPEDxEI-fFE>}7Bl^D<<LcX^');

                $date_creation = date("Y-m-d H:i:s");
                $date_connexion = date("Y-m-d H:i:s");

                $req = $DB->prepare("INSERT INTO Utilisateur(nom, mail, password, date_creation, date_connexion) VALUES (?, ?, ?, ?, ?)");
                $req->execute(array($nom, $mail, $crypt_password, $date_creation, $date_connexion));

                
                header("Location: login.php");
                exit();
            }
        }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Inscription | Sablier Tranquille</title>
    <?php require_once 'head/meta.php'; ?>
    <?php require_once 'head/link.php'; ?>
</head>
<body>
    <!-- Header -->
    <header>
    <?php require_once 'menu/menu.php'; ?>
    </header>

    <main class="main-content">
        <div class="register-container">
            <h1>Inscription</h1>
            <form method="POST">
                <div class="form-group">
                    <label for="nom">Nom complet</label>
                    <input type="text" id="name" name="nom" placeholder="Nom complet" value="<?php if(isset($nom)) echo $nom; ?>">
                    <?php if(isset($err_nom)) echo $err_nom; ?>
                </div>
                <div class="form-group">
                    <label for="mail">Email</label>
                    <input type="email" id="mail" name="mail" placeholder="mail@exemple.com" value="<?php if(isset($mail)) echo $mail; ?>">
                    <?php if(isset($err_mail)) echo $err_mail; ?>
                </div>
                <div class="form-group">
                    <label for="confmail">Confirmation de l'email</label>
                    <input type="email" id="confmail" name="confmail" placeholder="mail@exemple.com" value="<?php if(isset($confmail)) echo $confmail; ?>">
                    <?php if(isset($err_confmail)) echo $err_confmail; ?>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" placeholder="Mot de passe" value="<?php if(isset($password)) echo $password; ?>">
                    <?php if(isset($err_password)) echo $err_password; ?>
                </div>
                <div class="form-group">
                    <label for="confpassword">Confirmation du mot de passe</label>
                    <input type="password" id="confpassword" name="confpassword" placeholder="Mot de passe">
                    <?php if(isset($err_confpassword)) echo $err_confpassword; ?>
                </div>
                <button type="submit" class="submit-btn" name="register">S'inscrire</button>
            </form>
            <div class="login-link">
                <p>Déjà un compte ? <a href="login.php">Se connecter</a></p>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php require_once 'footer/footer.php'; ?>
</body>
</html> 