<?php
session_start();
?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="L'Agence LUIS IMMOBILIER, situé près de la zone commerciale à Fitz-James
     dans l’Oise (60), est spécialisé dans le domaine de la vente et de la location de biens immobiliers.">
    <meta name="keywords" content="Renseignements, annonce, maison, appartement">
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/styletelephone.css">
    <title>Contact</title>
</head>

<body>
    <?php
    include "./includes/header.php";
    ?>
    <main>
        <br>
        <h3><b>Contactez-nous !</b></h3>
        <h4><br><b>Pour toute demande de renseignements, remplissez le formulaire ci-dessous</b></h4>
        <div class="formulaire">
            <form action="" method="POST">
                <input type="text" name="prenom" class="form-control" placeholder="Prénom" required maxlength="20"
                    pattern="^[a-zA-Z-éàèêë]+$"><br>
                <?php
                if (!empty($_POST["envoie"]) && ($valideprenom != 1)) {
                    echo "<span style= 'color: red'>Le prénom ne doit contenir que des lettres.</span><br>";
                }
                ?>
                <input type="text" name="nom" class="form-control" placeholder="Nom" required
                    pattern="^[a-zA-Z-éàèêë]+$"><br>
                <?php
                if (!empty($_POST["envoie"]) && ($valideprenom != 1)) {
                    echo "<span style= 'color: red'>Le nom ne doit contenir que des lettres.</span><br>";
                }
                ?>
                <input type="email" name="mail" class="form-control" placeholder="Mail" required
                    pattern="^[a-zA-Z0-9]+[@]{1}+[a-zA-Z0-9.]"><br>
                <?php
                if (!empty($_POST["envoie"]) && ($validemail != 1)) {
                    echo "<span style= 'color: red'>L'adresse mail saisie est incorrecte.</span><br>";
                }
                if (!empty($_POST["envoie"]) && ($exist != 0)) {
                    echo "<span style= 'color: red'>L'adresse mail saisie est déjà utilisée par un autre utilisateur.</span><br>";
                }
                ?>
                <input type="number" name="telephone" class="form-control" placeholder="Téléphone" required
                    pattern="^[\d]{10}+$"><br>
                <?php
                if (!empty($_POST["envoie"]) && ($validetelelephone != 1)) {
                    echo "<span style= 'color: red'> Le téléphone doit être composé de 10 chiffres.</span><br>";
                }
                ?>
                <input type="text" name="sujet" class="form-control" placeholder="Sujet" required
                    pattern="^[a-zA-Z-éàèêë]+$"><br>
                <?php
                if (!empty($_POST["envoie"]) && ($validesujet != 1)) {
                    echo "<span style= 'color: red'> Le sujet ne doit contenir que des lettres.</span><br>";
                }
                ?>
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                <br>
                <div class=consentement>
                    <p><b>En remplissant ce formulaire, vous consentez à ce que LUIS IMMOBILIER, en sa qualité de
                            responsable de traitement, collecte vos données.<br>
                            <br>
                            Pour faire valoir votre droit d'accès ou de suppression de vos données,
                            consultez notre <a href='./politiqueconfidentialite.php'><b>Politique de
                                    confidentialité.</b></a></p>
                </div>
                <input type="submit" value="Envoyer" name="envoie" class="btn"><br>
            </form>
        </div>
    </main>
    <!-- Si le formulaire a été envoyé -->
    <?php
    if (isset($_POST["message"])) {
        $message = "Ce message vous a été envoyé via la page contact du site luisimmobilier.fr
                            Nom : " . $_POST['nom'] . "
                            Mail : " . $_POST['mail'] . "
                            Message : " . $_POST["message"];

        $retour = mail("luisimmobilier@gmail.com", $_POST['sujet'], $message, "from:contact@luisimmobiler.fr" . "\r\n" .
            'Reply-to: ' . $_POST['mail']);
        if ($retour) {
            echo "<span style= 'color: green'> Votre message a bien été envoyé.</span><br>";
        } else {
            echo "<span style= 'color: red'> Une erreur est survenue, votre message n'a pas été envoyé.</span><br>";
        }
    }
    ?>
    <br>
    <?php
    include "./includes/footer.php";
    ?>
</body>

</html>