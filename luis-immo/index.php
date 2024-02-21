<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <meta name="description" content="L'Agence LUIS IMMOBILIER, situé près de la zone commerciale à Fitz-James
     dans l’Oise (60), est spécialisé dans le domaine de la vente et de la location de biens immobilier.">
    <meta name="keywords" content="maison, appartement, projet immobilier, équipe de professionnels">
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/styletelephone.css">
    <title>Accueil</title>
</head>

    <body>
        <?php
        include "./includes/header.php";
        ?>
        <main>
            <section id="banniere">
                <div class="mere">
                    <img src="./assets/images/banniere-accueil.jpg" alt="Facade agence immobilière">
                    <div class="enfant">
                        <h1><b>Bienvenue Chez Vous</b></h1>
                    </div>
                </div>
            </section>
            <br>
            <h2>Quelques annonces de notre agence</h2>
            <br>
            <br>
            <section id="annonces">
                <div class="bien">
                    <img src="./assets/images/annonce1.png" alt="Appartement">
                    <h3>Appartement</h3>
                    <p>215 000 euros<br>
                        92 m2 - 5 pièces<br>
                        CHAMBLY (60230)</p>
                    <br>
                    <a ref="./contact.php"><button class="btn">En savoir plus</button></a>
                </div>
                <div class="bien">
                    <img src="./assets/images/annonce2.png" alt="Maison">
                    <h3>Maison</h3>
                    <p>329 000 euros<br>
                        80 m2 - 5 pièces<br>
                        BEAUVAIS (60000)</p>
                    <br>
                    <a ref="./contact.php"><button class="btn">En savoir plus</button></a>
                </div>
                <div class="bien">
                    <img src="./assets/images/annonce3.jpg" alt="Appartement">
                    <h3>Appartement</h3>
                    <p>110 000 euros<br>
                        118 m2 - 5 pièces<br>
                        LIANCOURT (60140)</p>
                    <br>
                    <a ref="./contact.php"><button class="btn">En savoir plus</button></a>
                </div>
            </section>
            <br>
            <br>
            <br>
            <div class=texte>
                <p>Quels que soient votre état d’esprit et le projet immobilier qui vous amènent, nos professionnels de
                    l’immobilier,
                    véritables acteurs engagés depuis 2020 ont la chance d’exercer l’un des plus beaux métiers du monde ».
                    Ce métier consiste à vous accompagner dans :<br>
                    - vente d’un appartement, la vente d'une maison,<br>
                    - achat d’un appartement,<br>
                    - achat d’une maison,<br>
                    - location d’un appartement, d’une maison ou sa mise en location,<br>
                    - ainsi que sa gestion locative.<br>
                    <br>
                    Dans l’ancien ou dans le neuf, appartements, maisons principales ou secondaires... Que vous soyez en
                    solo, en duo ou plus nombreux, nous souhaitons vous offrir une vie la plus épanouie possible. Nous
                    espérons faire votre connaissance prochainement dans notre agence immobilière.<br>
                    <br>
                    Et en attendant, et comme le marché de l'immobilier est en constante évolution, nous vous invitons à
                    consulter les prix de l'immobilier partout dans l'Oise. Grâce à notre expérience sur le terrain, nous
                    avons collecté une multitude de datas qui seront une véritable aide à la décision en vue de votre prochaine
                    vente ou de votre prochain achat.
                </p><br>
                <br>
            </div>
            <br>
            <h2><b>LUIS IMMOBILIER, une équipe de professionnels</b><br>
                au service de votre satisfaction</h2>
            <br>








            <br>
        </main>
        <?php
        include "./includes/footer.php";
        ?>
    </body>

</html>