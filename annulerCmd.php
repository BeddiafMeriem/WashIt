<?php

$idCmd = $_POST['idCmd'];

$link=mysqli_connect("localhost","root","","washit") or die("<p>Connection impossible : ".mysql_error(). "</p>") ; 

$query="update commandes set cmdsupp=1 where idCommande = '".$idCmd."'";
$result=mysqli_query($link,$query);
echo $idCmd;

?>