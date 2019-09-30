<!DOCTYPE html>
<html>
    <form method="post">
        <h2>Connexion</h2>
        <p> Nom d'utilisateur : <input type="text" name="username" id="username" placeholder="Entrer le nom d'utilisateur" required/></p>
        <p> mot de passe :<input type="password" name="password" id="password" placeholder="Entrer le mot de passe" required/></p>
        <button type="submit" id="btn" name="submit">Connexion</button>
<?php

if(isset($_POST['submit']))
   {
$name = $_POST['username'];
$mdp = $_POST['password'];

$link=mysqli_connect("localhost","root","meriem","web") or die("<p>Connection impossible : ".mysql_error(). "</p>") ; 
$query="select * from users where username='".$name."' and password='".$mdp."'";
$result=mysqli_query($link,$query);
       $obj= mysqli_fetch_object($result);
       if($obj->username == $_POST['username'] && $obj->password == $_POST['password'])
       {
           session_start();
           $_SESSION['login'] = $_POST['username'];
           echo $_SESSION['login'];
        header('location: commentaire.php');
       }
   }
?>
</html>