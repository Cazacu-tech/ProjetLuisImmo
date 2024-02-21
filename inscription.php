<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="L'Agence LUIS IMMOBILIER, situé près de la zone commerciale à Fitz-James
     dans l’Oise (60), est spécialisé dans le domaine de la vente et de la location de biens immobiliers.">
    <meta name="keywords" content="inscription, formulaire, collecte de données">
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/styletelephone.css">
    <title>Inscription</title>
</head>

<body>
    <?php
    include "./includes/header.php";
    ?>
    <main>
        <br>
        <h3><b>Inscription</b></h3>
        <br>
        <div class="formulaire">
            <form action="" method="POST">
                <input type="text" class="form-control" placeholder="Jean" name="prenom" required maxlength="20"
                    pattern="^[a-zA-Z-éàèêë]+$"> <br>
                <?php
                if (!empty($_POST["envoie"]) && ($valideprenom != 1)) {
                    echo "<span style= 'color: red'> Le prénom ne doit contenir que des lettres</span><br>";
                }
                ?>
                <input type="text" class="form-control" placeholder="Dupont" name="nom" required
                    pattern="^[a-zA-Z-éàèêë]+$"><br>
                <?php
                if (!empty($_POST["envoie"]) && ($validenom != 1)) {
                    echo "<span style= 'color: red'> Le nom ne doit contenir que des lettres</span><br>";
                }
                ?>
                <input type="email" class="form-control" placeholder="jean.dupont@gmail.com" name="mail" required
                    pattern="^[a-zA-Z0-9]+[@]{1}+[a-zA-Z0-9.]"><br>
                <?php
                if (!empty($_POST["envoie"]) && ($validemail != 1)) {
                    echo "<span style= 'color: red'> L'adresse mail saisie est incorrecte.</span><br>";
                }
                if (!empty($_POST["envoie"]) && ($exist != 0)) {
                    echo "<span style= 'color: red'> L'adresse mail saisie est déjà utilisée par un autre utilisateur.</span><br>";
                }
                ?>
                <input type="number" class="form-control" placeholder="0665234589" name="telephone" required
                    pattern="^[\d]{10}+$"><br>
                <?php
                if (!empty($_POST["envoie"]) && ($validetel != 1)) {
                    echo "<span style= 'color: red'> Le téléphone doit être composé de 10 chiffres.</span><br>";
                }
                ?>
                <input type="password" class="form-control" placeholder="************" name="mdp" required
                    pattern="^([A-Z]+[a-z]+[0-9]+[#?!@$%^&*-]+{12,})"><br>
                <input type="password" class="form-control" placeholder="Confirmez mot de passe" name="mdpverify"
                    required pattern="^([A-Z]+[a-z]+[0-9]+[#?!@$%^&*-]+{12,})"><br>
                <?php
                if (!empty($_POST["envoie"]) && ($validemdp != 1)) {
                    echo "<span style= 'color: red'> Le mot de passe doit : <br>
                                - Comporter au moins 12 caractères. <br>
                                - Avoir au moins une lettre majuscule. <br>
                                - Avoir au moins une lettre minuscule. <br>
                                - Avoir au moins un chiffre.<br>
                                - Avoir au moins un caractère spécial.<br></span>";
                }
                if (!empty($_POST["envoie"]) && ($_POST["mdp"] != $_POST["mdpverify"])) {
                    echo "<span style= 'color: red'> Les mots de passes saisis sont différents.</span> <br>";
                }
                ?>
                <input type="text" class="form-control" placeholder="5 rue de la Paix" name="adresse" required
                    pattern="^[a-zA-Z0-9 -éàèêëï]+$"><br>
                <?php
                if (!empty($_POST["envoie"]) && ($valideadresse != 1)) {
                    echo "<span style= 'color: red'> L'adresse saisie est incorrecte.</span><br>";
                }
                ?>
                <input type="number" class="form-control" placeholder="75000" name="codePostal" required min="1000"
                    max="99999" pattern="^[\d]{5}+$"><br>
                <?php
                if (!empty($_POST["envoie"]) && ($validecodePostal != 1)) {
                    echo "<span style= 'color: red'> Le Code postal est incorrect.</span><br>";
                }
                ?>
                <input type="text" class="form-control" placeholder="Paris" name="ville" required
                    pattern="^[a-zA-Z-éàèêë]+$"><br>
                <?php
                if (!empty($_POST["envoie"]) && ($valideville != 1)) {
                    echo "<span style= 'color: red'> La ville ne doit contenir que des lettres.</span><br>";
                }
                ?>
                <div class=consentement>
                    <p><b>En remplissant ce formulaire, vous consentez à ce que LUIS IMMOBILIER, <br>
                            en sa qualité de responsable de traitement, collecte vos données. <br>
                            <br>
                            Pour faire valoir votre droit d'accès ou de suppression de vos données, <br>
                            consultez notre <a href='./politiqueconfidentialite.php'><b>Politique de
                                    confidentialité.</b></a></p>
                </div>
                <input type="submit" value="Je m'inscris" name="envoie" class="btn"><br>
                <br>
                <div class="redirection">
                    <p><b>Vous êtes déjà inscrit, connectez-vous par <a href="./connexion.php">ici</a></b></p>
                </div>
            </form>
        </div>
        <br>
    </main>
    <?php
    include "./includes/footer.php";
    ?>
</body>

</html>