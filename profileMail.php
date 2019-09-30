<?php


                    if(isset($_POST['submitmail']))
                    { 
                        $link=mysqli_connect("localhost","root","","washit") or die("<p>Connection impossible : ".mysql_error(). "</p>") ; 
                        $mail = $_POST['mail'];
                        $user = $_POST['user'];
                         
                        $query="select * from users where actif = 1 and username='".$user."'";
                        $result=mysqli_query($link,$query);
                        $obj= mysqli_fetch_object($result);
                        $type = $obj->type;
                        if($type=="CHAUFFEUR")
                        {
                            $sql="update users set username='".$mail."' where actif = 1 and username='".$user."'";
                            $res = mysqli_query($link,$sql);  
                            header('location: transport-profile.php');
                        }
                        if($type=="etud")
                        {
                            $user = $_POST['user'];
                           
                            $sql="update users set username='".$mail."' where actif = 1 and username='".$user."'";
                            $res = mysqli_query($link,$sql);  
                            header('location: profile.php');
                        }   
                        if($type=="lav")
                        {
                            $sql="update users set username='".$mail."' where actif = 1 and username='".$user."'";
                            $res = mysqli_query($link,$sql);  
                            echo "<script type= 'text/javascript'>alert('updated successfully');</script>";
    
                            header('location: lav-profile.php');
                        }                       
                        
                        
                        
                        
                    }

                     ?>