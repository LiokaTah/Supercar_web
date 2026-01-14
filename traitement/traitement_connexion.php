<?php
include('bdd.php');

$email = $_POST['email'];
$pwd = $_POST['password'];



$requete = "SELECT * FROM Utilisateurs WHERE Email = '$email'";
$result = mysqli_query($bdd, $requete);

if($result && mysqli_num_rows($result) > 0) {
    $utilisateur = mysqli_fetch_assoc($result);
    
   
    if($pwd === $utilisateur['Mot_de_passe']) {
        
        session_start();
        $_SESSION['ID_Utilisateurs'] = $utilisateur['ID_Utilisateur'];
        $_SESSION['email'] = $utilisateur['Email'];
        $_SESSION['statut'] = $utilisateur['Statut'];
        
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