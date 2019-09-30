<?php

$nom = $_POST['nom'];
$com = $_POST['commune'];
$wil = $_POST['wilaya'];
$ord = $_POST['ordre'];
$ancien = $_POST['ancien'];


$link=mysqli_connect("localhost","root","","washit") or die("<p>Connection impossible : ".mysql_error(). "</p>") ; 

$query="update cites set nom='".$nom."', commune='".$com."', wilaya='".$wil."', ordre='".$ord."' where nom='".$ancien."'";
$result=mysqli_query($link,$query);

$query1="update users set cite='".$nom."' where cite = '".$ancien."'";
$result1=mysqli_query($link,$query1);

$query4="update commandes set adresse='".$nom."' where adresse = '".$ancien."'";
$result4=mysqli_query($link,$query4);

echo $nom;


?>