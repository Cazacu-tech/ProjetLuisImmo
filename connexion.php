














































<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="L'Agence LUIS IMMOBILIER, situé près de la zone commerciale à Fitz-James
     dans l’Oise (60), est spécialisé dans le domaine de la vente et de la location de biens immobiliers.">
    <meta name="keywords" content="connexion, compte">
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/styletelephone.css">
    <title>Connexion</title>
</head>
    <body>
        <?php
        include "./includes/header.php";
        ?>
        <main>
            <br>
            <h3><b>Connexion</b></h3>
            <br>
            <div class="formulaire">
                <form action="" method="POST">
                    <input type="email" class="form-control" placeholder="jean.dupont@gmail.com" name="mail" required><br>
                    <?php
                    if (!empty($_POST["envoie"]) && ($validemail != 1)) {
                        echo $e;
                    }
                    if (!empty($_POST["envoie"]) && ($exist == 0)) {
                        echo $e;
                    }
                    if ((!empty($_POST["envoie"])) && ($validemdp == 0)) {
                        echo $e;
                    }
                    ?>
                    <input type="password" class="form-control" placeholder="************" name="mdp" required><br>
                    <input type="submit" value="Se connecter" name="envoie" class="btn"><br>
                </form>
                <br>
                    <div class="redirection">
                        <p><b>Vous n'êtes pas encore inscrit, inscrivez-vous par <a href="./inscription.php">ici</b></a></p>
                    </div>
                </div>
                <br>
            </main>
        <?php
            include "./includes/footer.php";
        ?>
    </body>
</html>