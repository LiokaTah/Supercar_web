<?php
include('bdd.php');

$email = $_POST['email'];
$pwd = $_POST['pwd'];
$pwds = $_POST['pwd2'];

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$contact = $_POST['contact'];
$statut = $_POST['statut'];

// Version corrigée - si ID_Utilisateurs est AUTO_INCREMENT
if($pwd == $pwds){
$requete = "INSERT INTO Utilisateurs(Nom, Prenom, Email, mdp, Contact, Statut) 
            VALUES ('$nom', '$prenom', '$email', '$pwd', '$contact', $statut)";
            mysqli_query($bdd, $requete);

}
else{
    header("Location:../pages/inscription.php");
    exit();
}





?>