<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap-icons.css">
    <title>Document</title>
</head>

<body>
    <form action="traitement_inscription.php" method="post">
        <p>Nom :<input type="text" name="nom" id="" required></p>
        <p>Prenom : <input type="text" name="prenom" id="" required></p>
        <p>Email : <input type="text" name="email" id="" required></p>
        <p>Mot de passe : <input type="text" name="pwd" id="" required></p>
        <p>Veuillez reecrire le mot de passe : <input type="text" name="pwd2" id="" required></p>
        <p>Contact : <input type="text" name="contact" id="" required></p>
        <p>Statut : <select name="statut" id="" required>
                <option value="1">Admin</option>
                <option value="1">Client</option>

            </select>
        </p>
    <input type="submit" value="Valider">


    </form>
</body>

</html>