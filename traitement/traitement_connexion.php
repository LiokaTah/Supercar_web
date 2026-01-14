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
        $_SESSION['ID_Utilisateurs'] = $utilisateur['ID_utilisateur']; // Attention à la casse (u ou U)
        $_SESSION['email'] = $utilisateur['Email'];
        $_SESSION['statut'] = $utilisateur['Statut']; // Corrigé : Statut (sans S)
        
        header("Location:../pages/accueil.php");
        exit();
    } else {
        // Redirection vers la page de login avec erreur 1
        header("Location: ../pages/login.php?error=1"); 
        exit();
    }
} else {
    // Redirection vers la page de login avec erreur 2
    header("Location: ../pages/login.php?error=2");
    exit();
}
?>