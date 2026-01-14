<?php 

$host="localhost";

$login="root";

$pass="";

$dbname="supercar";

$bdd = mysqli_connect($host, $login, $pass, $dbname);
if (!$bdd){
			echo "Connexion non-reussie à MySQL: " . mysqli_connect_error();
	} 
	else{
			echo "Connexion reussie à MySQL";
	}
mysqli_set_charset($bdd, "utf8");

?>