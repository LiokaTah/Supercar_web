<?php
include('bdd.php');

$email = $_POST['email'];
$pwd = $_POST['pwd'];



$requete = "SELECT * FROM Utilisateurs WHERE email = '$email'";
$result = mysqli_query($bdd, $requete);

if($result && mysqli_num_rows($result) > 0) {
    $utilisateur = mysqli_fetch_assoc($result);
    
   
    if($pwd === $utilisateur['pwd']) {
        
        session_start();
        $_SESSION['ID_Utilisateurs'] = $utilisateur['id'];
        $_SESSION['email'] = $utilisateur['email'];
        $_SESSION['statut'] = $utilisateur['statut'];
        
        header("Location: accueil.php");
        exit();
    } else {
        header("Location: connexion.php?error=1");
        exit();
    }
} else {
    header("Location: login.php?error=2");
    exit();
}
?>