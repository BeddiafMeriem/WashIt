<?php

if(isset($_POST['submit']))
   { 
if (empty($_POST['username']))  
{
   echo "Le champ E-mail est vide.";
}    
else
{
   if (empty($_POST['password'])) 
   {
      echo "Le champ Mot de passe est vide.";
   }
   else
   {
      $name = $_POST['username'];
      $mdp = $_POST['password'];
      $link=mysqli_connect("localhost","root","","washit") or die("<p>Connection impossible : ".mysql_error(). "</p>") ; 
      $query="select * from users where username='".$name."' and password='".$mdp."'";
      $result=mysqli_query($link,$query);
      $obj= mysqli_fetch_object($result);
      $type = $obj->type;
      $username = $obj->username;
      if($obj->username == $_POST['username'] && $obj->password == $_POST['password'])
       {
         $query1="update users set actif = 1 where username='".$name."'";
         $result1=mysqli_query($link,$query1);
         $obj1= mysqli_fetch_object($result1); 
         
         $query2="update users set actif = 0 where username <>'".$name."' and type='".$type."'";
         $result2=mysqli_query($link,$query2);
         $obj2= mysqli_fetch_object($result2); 

         if($type=="etud")
         {
		     session_start();
           $_SESSION['login'] = $_POST['username'];
           echo $_SESSION['login'];
           echo "<script>alert('Vous etes connecté')</script>";
           header('location: hommeconnectednonotif.html');
         }
         if($type=="admin")
         {
		     session_start();
           $_SESSION['login'] = $_POST['username'];
           echo $_SESSION['login'];
           echo "<script>alert('Vous etes connecté')</script>";
           header('location: Admin_index.php');
         }
         if($type=="CHAUFFEUR")
         {
            if($username=="mohamed_boualem@gmail.com")
            {  
            session_start();
            $_SESSION['login'] = $_POST['username'];
            echo $_SESSION['login'];
            echo "<script>alert('Vous etes connecté')</script>";
            header('location: m.php');
            }

            if($username=="mohamed_djebbar@gmail.com")
            {  
            session_start();
            $_SESSION['login'] = $_POST['username'];
            echo $_SESSION['login'];
            echo "<script>alert('Vous etes connecté')</script>";
            header('location: tansport-index2.php');
            }

            if($username=="brahim_sekkai@gmail.com")
            {  
            session_start();
            $_SESSION['login'] = $_POST['username'];
            echo $_SESSION['login'];
            echo "<script>alert('Vous etes connecté')</script>";
            header('location: tansport-index3.php');
            }

            if($username=="mohamed_boudiaf@gmail.com")
            {  
            session_start();
            $_SESSION['login'] = $_POST['username'];
            echo $_SESSION['login'];
            echo "<script>alert('Vous etes connecté')</script>";
            header('location: tansport-index4.php');
            }

            if($username=="brahim_boualem@gmail.com")
            {  
            session_start();
            $_SESSION['login'] = $_POST['username'];
            echo $_SESSION['login'];
            echo "<script>alert('Vous etes connecté')</script>";
            header('location: tansport-index5.php');
            }

            if($username=="brahim_boudiaf@gmail.com")
            {  
            session_start();
            $_SESSION['login'] = $_POST['username'];
            echo $_SESSION['login'];
            echo "<script>alert('Vous etes connecté')</script>";
            header('location: tansport-index6.php');
            }
         }

         if($type=="lav")
         {
            if($username=="rachid_laverie@gmail.com")
            {  
            session_start();
            $_SESSION['login'] = $_POST['username'];
            echo $_SESSION['login'];
            echo "<script>alert('Vous etes connecté')</script>";
            header('location: lav1.php');
            }

            if($username=="FLEN2")
            {  
            session_start();
            $_SESSION['login'] = $_POST['username'];
            echo $_SESSION['login'];
            echo "<script>alert('Vous etes connecté')</script>";
            header('location: lav2.php');
            }
            if($username=="FLEN3")
            {  
            session_start();
            $_SESSION['login'] = $_POST['username'];
            echo $_SESSION['login'];
            echo "<script>alert('Vous etes connecté')</script>";
            header('location: lav3.php');
            }
         }
       }
       else
       {
         echo "Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé.";
       }
   }
}

       
   }
?> 
</html>
       
               