<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <section>
        <form id="formulaire" name="formulaire">
            <div class="nom" id="nomChamp">
            <h1>Nom</h1>
            <input type="text" placeholder="nom" id="nom" name="nom" onkeypress="verificationCaracteresNom(event); return false;">
            </div>
            <div class="prenom" id="prenomChamp">
            <h2>Prénom</h2>
            <input type="text" placeholder="prenom" id="prenom" name="prenom" onkeypress="verificationCaracteresPrenom(event); return false;">
            </div>
            <div class="dateDeNaissance" id="dateDeNaissanceChamp">
            <h2>Date de Naissance</h2>
            <input type="date" placeholder="dateDeNaissance" id="dateDeNaissance" name="dateDeNaissance" onkeyup="verificationDateDeNaissance()">
            </div>
            <label for ="homme">Homme</label>
            <input type="radio" placeholder="homme" id="homme" name="homme" value="homme">
            <br>
            <label for ="femme">Femme</label>
            <input type="radio" placeholder="femme" id="femme" name="femme" value="femme">
            <h2>Indiquez votre adresse email</h2>
            <div class="email" id="emailChamp">
            <input type="text" placeholder="email" id="email" name="email" onkeyup="verificationEmail()">
            </div>
            <h2>Votre Message</h2>
            <textarea type="text" placeholder="votreMessage" id="votreMessage" name="votreMessage" maxlength="255" onkeyup="compteurNombreCaracteres()"></textarea>
            <div id="compteurDeCaractere">
            </div>
            <br>
            <button type="submit" name="Envoyer">Envoyer</button>
            <?php

$message = "teste";

// Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Envoi du mail
mail('Dcl.maximea@18pixel.fr', 'Mon Sujet', $message);
?>
            










        </form>
    </section>
















    <script src="script.js"></script>
</body>
</html>