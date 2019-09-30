<?php

$idCmd = $_POST['id'];

$link=mysqli_connect("localhost","root","","washit") or die("<p>Connection impossible : ".mysql_error(). "</p>") ; 

$query="update commandes set lave=1 where idCommande = '".$idCmd."'";
$result=mysqli_query($link,$query);
echo $idCmd;



?>