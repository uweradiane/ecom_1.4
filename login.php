<?php
require-once "../functions/userCrud.php";
//if $_post action asgnup faire le traitement
var_dump($post);
//validation des donnees du form
//envoi a la DB
if(isset($_POST['action'])&&['action']){
    createUser($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="...index.php"> Retour Accueil</a></br>
<form method="post" action="./login.php">
    <input hidden  name="action" value="siggnup">
<label for="user_name">Nom d'utulisateur</label>
<input id="use_name" name="user_name" type="text">
<label for="password">mon de passe</label>
<input id="password" name="password" type="text">

<button id="submit" name="submit" type="submit">
</form>






</body>
</html>
