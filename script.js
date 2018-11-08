        // Verification de nom //
function verificationCaracteresNom(event) {
	 		
	var keyCode = event.which ? event.which : event.keyCode;
	var touche = String.fromCharCode(keyCode);
    var caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-';
    var champNom = document.getElementById('nom');
			
	if(caracteres.indexOf(touche) >= 0) {
        champNom.value += touche;
	} 
			
}
          // Verification de prenom //
function verificationCaracteresPrenom(event) {
    var keyCode = event.which ? event.which : event.keyCode;
    var touche = String.fromCharCode(keyCode);
    var caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-';
    var champPrenom = document.getElementById('prenom');

if (caracteres.indexOf(touche)>= 0) {
    champPrenom.value += touche;
    console.log(caracteres.indexOf(touche));
}
};
        // Verification de la date de naissance //
function verificationDateDeNaissance() {

        var dateDeNaissance = parseFloat(document.forms["formulaire"].elements["dateDeNaissance"].value);
if(dateDeNaissance >= 2001) {
    document.getElementById("dateDeNaissanceChamp").style.backgroundColor="red";
} else {
    document.getElementById("dateDeNaissanceChamp").style.backgroundColor="green";
}
}    
        // Verification de l'email //
function verificationEmail() {
        var testEmail =  /^(([^<>()[]\.,;:s@]+(.[^<>()[]\.,;:s@]+)*)|(.+))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/;
if (testEmail.test(document.getElementById("email").value)) {
    document.getElementById("email").style.backgroundColor="green";
} else {
    document.getElementById("email").style.backgroundColor="red";
}
}
        // Limité le nombre de caractère d'un message //
function compteurNombreCaracteres() {
 var maxCaractere = 255;
 var caracteresActuelle = document.forms["formulaire"].elements["votreMessage"].value.length;
 var caracteresRestant = 255 - caracteresActuelle;
 document.getElementById("compteurDeCaractere").innerHTML="Nombre de caractères restant "+caracteresRestant+" /255";
 if (caracteresActuelle >= maxCaractere) {
    document.getElementById("votreMessage").style.backgroundColor="red";
 } else {
    document.getElementById("votreMessage").style.backgroundColor="white";

 }
};