<?php
$type = $_POST['type'];

if($type=="cite")
{
$nom = $_POST['nom'];
$com = $_POST['commune'];
$wil = $_POST['wilaya'];
$ord = $_POST['ordre'];


$link=mysqli_connect("localhost","root","","washit") or die("<p>Connection impossible : ".mysql_error(). "</p>") ; 

$query="update cites set supp=1 where nom = '".$nom."' and commune = '".$com."' and wilaya = '".$wil."' and ordre = '".$ord."'";
$result=mysqli_query($link,$query);

$query1="update users set usersupp=1 where cite = '".$nom."' and wilaya = '".$wil."'";
$result1=mysqli_query($link,$query1);

$query4="update commandes set cmdsupp=1 where adresse = '".$nom."'";
$result4=mysqli_query($link,$query4);

$query3="select idCommande FROM commandes where cmdsupp=1";
$result3=mysqli_query($link,$query3);
while($row=$result3->fetch_assoc())
{
    $query2="update articles set artsupp=1 where idCommande = '".$row['idCommande']."'";
    $result2=mysqli_query($link,$query2);
}
echo $nom;
}

if($type=="chauffeur")
{
$name = $_POST['name'];
$username = $_POST['username'];
$pswd = $_POST['pswd'];
$tel = $_POST['tel'];
$wil = $_POST['wilaya'];
$statut = $_POST['statut'];

$link=mysqli_connect("localhost","root","","washit") or die("<p>Connection impossible : ".mysql_error(). "</p>") ; 

$query1="update users set usersupp=1 where username = '".$username."'";
$result1=mysqli_query($link,$query1);

echo $nom;
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

$query1="update users set usersupp=1 where username = '".$username."'";
$result1=mysqli_query($link,$query1);

echo $nom;
}





?>