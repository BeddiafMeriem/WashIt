<?php

$idCmd = $_POST['action'];
$paye = $_POST['payer'];
$recupere = $_POST['recuperer'];
$dolivre = $_POST['dolivre'];
$affiche = $_POST['affiche'];
$un = 0;
if($paye == "OUI")
{
$link=mysqli_connect("localhost","root","","washit") or die("<p>Connection impossible : ".mysql_error(). "</p>") ; 

$query="update commandes set paye=1, collecte=1,affiche=1 where idCommande = '".$idCmd."'";
$result=mysqli_query($link,$query);
echo $idCmd;
}
if($paye == "NON")
{

$link=mysqli_connect("localhost","root","","washit") or die("<p>Connection impossible : ".mysql_error(). "</p>") ; 

$query="update commandes set paye=0, collecte=0,affiche='".$affiche."' where idCommande = '".$idCmd."'";
$result=mysqli_query($link,$query);
echo $idCmd;
}


if($dolivre == 1)
{
if($recupere == "OUI")
{
    $un = 1;
}
if($recupere == "NON")
{
    $un = 0;
}

$link=mysqli_connect("localhost","root","","washit") or die("<p>Connection impossible : ".mysql_error(). "</p>") ; 

$query="update commandes set livre=1,recupere='".$un."' where idCommande = '".$idCmd."'";
$result=mysqli_query($link,$query);
echo $idCmd;
}



?>