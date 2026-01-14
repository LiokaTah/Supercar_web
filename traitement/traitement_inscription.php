<?php
include('bdd.php');

$email = $_POST['email'];
$pwd = $_POST['password'];
$pwds = $_POST['confirm_password'];

$nom = $_POST['last_name'];
$prenom = $_POST['first-name'];
$contact = $_POST['contact'];
$statut = $_POST['statut'];

if($pwd == $pwds){
$requete = "INSERT INTO Utilisateurs(Nom, Prenom,Mot_de_passe,Contact,Email, Statut) 
            VALUES ('$nom', '$prenom', '$pwd', '$contact', 'email',$statut)";
            mysqli_query($bdd, $requete);
            header("Location:../pages/login.php");

}
else{
    header("Location:../pages/inscription.php");
    exit();
}





?>