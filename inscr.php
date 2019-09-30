<?php
            if(isset($_POST['submit']))
            { 

$name = $_POST['name'];
$username =$_POST['username'];
$password =$_POST['password'];
$confirm_password =$_POST['confirm_password'];
$tel = $_POST['telephone'];
$wilaya = $_POST['wilaya'];
$cite = $_POST['cite'];




$mysqli = mysqli_connect("localhost", "root", "", "washit");
//Check connection
if(!$mysqli){

				echo "Erreur de connexion à la base de données.";

} else {


    $query="select COUNT(*) as existe from users where username='".$username."'";
    $result=mysqli_query($mysqli,$query);
    $obj= mysqli_fetch_object($result);
    $existe = $obj->existe;
    if($existe != 0)
    {
        echo "<script type= 'text/javascript'>alert('Le mail est déjè utilisé.');</script>";
        header("location: inscription.php");
       
            
    }
    else{
    
        // Validate password
            
        if(strlen(trim($_POST["password"])) < 6){
             
            echo "<script type= 'text/javascript'>alert('Le mot de passe doit avoir au minimum 6 caractères.');</script>";
            
        }
            
        else{

            if($password != $confirm_password){
            
            echo "<script type= 'text/javascript'>alert('Password did not match.');</script>";
            
            }
            else{
                
    $sql3="INSERT INTO users (name,username,password,telephone,wilaya,cite,actif) VALUES ('".$name."','".$username."' ,'".$password."','".$tel."','".$wilaya."','".$cite."',1)";
    $res2 = mysqli_query($mysqli,$sql3);  

    $query2="update users set actif = 0 where username <>'".$name."' and password <>'".$mdp."'";
    $result2=mysqli_query($mysqli,$query2);
    $obj2= mysqli_fetch_object($result2); 
    echo "<script type= 'text/javascript'>alert('Inscription réussite.');</script>";
            
     header('Location: hommeconnectednonotif.html');
            }
            
        }
        
    }


}
            
            }    



?>