<?php
$type = $_POST['type'];

if($type=="cite")
{
$nom = $_POST['nom'];
$com = $_POST['commune'];
$wil = $_POST['wilaya'];
$ord = $_POST['ordre'];

$link=mysqli_connect("localhost","root","","washit") or die("<p>Connection impossible : ".mysql_error(). "</p>") ; 

$query="INSERT INTO cites (nom,commune,wilaya,ordre,numero,supp) VALUES ('".$nom."','".$com."','".$wil."','".$ord."',0,0)";
$result=mysqli_query($link,$query);
echo $type;
}

if($type=="CHAUFFEUR")
{
$name = $_POST['name'];
$username = $_POST['username'];
$pswd = $_POST['pswd'];
$tel = $_POST['tel'];
$wil = $_POST['wilaya'];
$statut = $_POST['statut'];

$link=mysqli_connect("localhost","root","","washit") or die("<p>Connection impossible : ".mysql_error(). "</p>") ; 

$query1="INSERT INTO users (name,username,password,telephone,wilaya,cite,actif,type) VALUES ('".$name."','".$username."','".$pswd."','".$tel."','".$wil."',0,'".$statut."','".$type."')";
$result1=mysqli_query($link,$query1);

echo $type;
}

if($type=="lav")
{
$name = $_POST['name'];
$username = $_POST['username'];
$pswd = $_POST['pswd'];
$tel = $_POST['tel'];
$wil = $_POST['wilaya'];
$statut = $_POST['statut'];

$link=mysqli_connect("localhost","root","","washit") or die("<p>Connection impossible : ".mysql_error(). "</p>") ; 

$query1="INSERT INTO users (name,username,password,telephone,wilaya,cite,actif,type) VALUES ('".$name."','".$username."','".$pswd."','".$tel."','".$wil."',0,'".$statut."','".$type."')";
$result1=mysqli_query($link,$query1);

echo $type;
}

?>