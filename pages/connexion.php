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
    <form action="traitement_connexion.php" method="post">
        <p>Email: <input type="text" name="email" required></p>
        <p>Mot de passe : <input type="password" name="pwd" required>
        </p>
        <input type="submit" value="Valider">
    </form>
    <a href="inscription.php">Creer un nouveau compte</a>
    <?php
    if (isset($_GET['error'])){
        if($_GET['error']==1){
            ?>
            <div class="alert alert-danger" role="alert">
  Veuillez trou
</div>
 <?php 
        }
        
          }

    ?>


</body>

</html>