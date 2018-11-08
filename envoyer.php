
<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$dateNaissance = $_POST['dateDeNaissance'];
$gender = $_POST['genre'];
$email = $_POST['email'];
$message = $_POST['votreMessage'];

$msg = "Nom:\t$nom\n";
$msg .= "Prénom:\t$prenom\n";
$msg .= "Date de Naissance:\t$dateNaissance\n";
$msg .= "Genre:\t$gender\n";
$msg .= "E-Mail:\t$email\n";
$msg .= "Message:\t$message";

$from = "test@votredomaine.com";
 
$to = "Dcl.maximea@18pixel.fr";
 
$subject = "Envoi formulaire";
 
$headers = "From:" . $from;
 
mail($to,$subject,$msg,$headers);
 
?>