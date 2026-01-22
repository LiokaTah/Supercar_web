<?php
include('bdd.php');

$email = $_POST['email'];
$pwd = $_POST['password'];
$pwds = $_POST['confirm_password'];

$nom = $_POST['last_name'];
$prenom = $_POST['first_name'];
$contact = $_POST['contact'];
$statut = $_POST['status'];


$check_query = "SELECT * FROM Utilisateurs WHERE Email = '$email'";
$check_result = mysqli_query($bdd, $check_query);

if (mysqli_num_rows($check_result) > 0) {
    header("Location: ../pages/inscription.php?error=3");
    exit();
} else {
    if ($pwd == $pwds) {
        $requete = "INSERT INTO utilisateurs(Nom,Prenom,Mot_de_passe,Contact,Email,Statut) 
            VALUES ('$nom', '$prenom', '$pwd', '$contact', '$email','$statut')";
        mysqli_query($bdd, $requete);
        header("Location:../pages/login.php");
    } else {
        header("Location:../pages/inscription.php");
        exit();
    }
}

?>
