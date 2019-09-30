<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>WashIt</title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style2.css">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
              

                <ul class="list-unstyled components">
                <div align="center" style="background:#F2F2F2;padding-bottom:20px;margin-top:20px; margin-right:2px; margin-left:2px">
                     <img src="assets/img/mmm.png" align="center" style="background:#F2F2F2;width:50%"></img> <br>
                 
                 <?php
                 $link=mysqli_connect("localhost","root","","washit") or die("<p>Connection impossible : ".mysql_error(). "</p>") ; 
                 $query="select * from users where actif = 1";
                 $result=mysqli_query($link,$query);
                 $obj= mysqli_fetch_object($result);
                 $name = $obj->name;
                 echo "<a style='outline: none;text-decoration: none;font-size:19px;font-weight:bold;color:black;background:#F2F2F2;width:90%;margin-left:; margin-bottom: 50px;padding-top:10px;' href='profile.php'> $name </a>";

                 ?>
                 </div>
                   
                    <li class="active">
                    <a style="margin-top:20%" href="transport-index.php">Accueil</a>
                    </li>
                    <li><a href="#">Mes Livraisons</a></li>
                 <li><a href="#">Mes Activités</a></li>
                 <li><a href="transport-profile.php">Mon Profile</a></li>
                </ul>

                <ul class="list-unstyled CTAs">
                    <li><a href="index.html" class="download">Déconnexion</a></li>
                    
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

               

                        <div class="navbar-header">
                            <button style="background-color:#78B3DC" type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span></span>
                            </button>
                        </div>

                        
                        <div  align="center" style="width:50%; margin-left: 25%">
                               <img src="assets/img/mmm.png" align="center" style="width:30%"></img>
                         </div>
               
               <?php
                
                $link=mysqli_connect("localhost","root","","washit") or die("<p>Connection impossible : ".mysql_error(). "</p>") ; 
                $query="select * from users where actif = 1";
                $result=mysqli_query($link,$query);
                $obj= mysqli_fetch_object($result);
                $name = $obj->name;
                $mail = $obj->username;
                $tel = $obj->telephone;  
                $adr = $obj->cite;
                $wilaya = $obj->wilaya;
                
                echo "<h1 align='center' style='color:black;font-weight:bold'>$name</h1>"
            

                ?>    
    
                
                

            <?php
            echo "<div class='row' style='margin-top:5%'>";
                echo "<div class='col-md-12 portfolio-group no-padding'>";
                    echo "<div style='' class='col-md-4 portfolio-item margin-bottom-40 video'>";
                        echo "<img src='assets/img/tel.jpg' style='width:20%;margin-top:-5%; margin-left:50%' >";
                    echo "</div>";

                    echo "<div style='' class='col-md-4 portfolio-item margin-bottom-40 video'>";
                         echo "<p align='center' style='color:black;font-weight:bold;font-size: 20px'>+213 $tel</p>";    
                    
                    echo "</div>";

                    echo "<div style='' class='col-md-4 portfolio-item margin-bottom-40 video'>";
                    echo "<a  onClick='modifierTel()' style='margin-left:30%'>";
                    
                    echo "<img  style='' src='assets/img/modifier.png' >";                     
                           
                    echo "</a>"; 
                    echo "</div>";
                    
                echo "</div>";
            echo "</div>";


            echo "<div class='row' style='margin-top:5%'>";
              echo "<div class='col-md-12 portfolio-group no-padding'>";
                echo "<div style='' class='col-md-4 portfolio-item margin-bottom-40 video'>";
                    echo "<img src='assets/img/mail.jpg' style='width:20%;margin-top:-5%; margin-left:50%' >";
                echo "</div>";
                echo "<div style='' class='col-md-4 portfolio-item margin-bottom-40 video'>";
                    echo "<p align='center' style='color:black;font-weight:bold;font-size: 20px'>$mail</p>";
                echo "</div>";
                echo "<div style='' class='col-md-4 portfolio-item margin-bottom-40 video'>";
                    echo "<a  onClick='modifierMail()' style='margin-left:30%'>";
                     echo "<img  style='' src='assets/img/modifier.png'>";
                    echo "</a>";
                echo "</div>";
              echo "</div>";
            echo "</div>";


            echo "<div class='row' style='margin-top:5%'>";
              echo "<div class='col-md-12 portfolio-group no-padding'>";
                echo "<div style='' class='col-md-4 portfolio-item margin-bottom-40 video'>";
                    echo "<img src='assets/img/adresse.jpg' style='width:20%;margin-top:-5%; margin-left:50%' >";
                echo "</div>";
                echo "<div style='' class='col-md-4 portfolio-item margin-bottom-40 video'>";
                    echo "<p align='center' style='color:black;font-weight:bold;font-size: 20px'>Wilaya de, $wilaya</p>";
                echo "</div>";
                echo "<div style='' class='col-md-4 portfolio-item margin-bottom-40 video'>";
                    echo "<a  onClick='modifierAdr()' style='margin-left:30%'>";     
                      echo "<img  style='' src='assets/img/modifier.png'>";               
                    echo "</a>";
                echo "</div>";

           echo "</div>";
           echo "</div>";

            ?> 
            
           
           

            
            

            

            

            

            <script type="text/javascript">
            function modifierNom(){
                document.querySelector('.bg-bg').style.display = 'flex';
            }
            </script>

            <script type="text/javascript">
            function modifierTel(){
                document.querySelector('.bg-tel').style.display = 'flex';
            }
            </script>

            <script type="text/javascript">
            function modifierMail(){
                document.querySelector('.bg-mail').style.display = 'flex';
            }
            </script>

            <script type="text/javascript">
            function modifierAdr(){
                document.querySelector('.bg-adr').style.display = 'flex';
            }
            </script>

            <script type="text/javascript">
            function cacherModifierTel(){
                document.querySelector('.bg-tel').style.display = 'none';
            }
            </script>

            <script type="text/javascript">
            function cacherModifierMail(){
                document.querySelector('.bg-mail').style.display = 'none';
            }
            </script>

            <script type="text/javascript">
            function cacherModifierAdr(){
                document.querySelector('.bg-adr').style.display = 'none';
            }
            </script>
                             
            </div>
        </div>





        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar, #content').toggleClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>

<div class="bg-bg" style="width:100%;height: 100%;background-color: rgba(0, 0, 0, 0.7);position: absolute;top: 0;justify-content: center;align-items: center; display:none">
                <div class="bg-content" style="width:400px;height: 300px;background-color: rgb(241, 241, 241);padding:20px;border-radius: 4px;text-align: center;">
                    <div class="close" style="font-size:25px; margin-top:-8px;background-color: rgb(241, 241, 241)">
                    <button class="but-close" style="transform:rotate(45deg);background-color: rgb(241, 241, 241); border:0" type="button" onClick="cacherModifier()">+</button>
            
                    </div>
                     <img src="assets/img/profile.jpg" style="margin-left:15px">
                     <form action="#">
                         <label style="margin-left:-180px">Nom :</label>
                         <input class="form-control" style="margin-left:70px" type="text" placeholder="Entrez votre nouveau nom"> <br>
                         <button  class="btn btn-primary" type="submit" id="btn" name="submit">Sauvegarder</button>
            
                     </form>

                     <?php

                     ?>
                </div>
            </div>


            <div class="bg-tel" style="width:100%;height: 100%;background-color: rgba(0, 0, 0, 0.7);position: absolute;top: 0;justify-content: center;align-items: center; display:none">
                <div class="bg-content" style="width:400px;height: 300px;background-color: rgb(241, 241, 241);padding:20px;border-radius: 4px;text-align: center;">
                    <div class="close" style="font-size:25px; margin-top:-8px;background-color: rgb(241, 241, 241)">
                    <button class="but-close" style="transform:rotate(45deg);background-color: rgb(241, 241, 241); border:0" type="button" onClick="cacherModifierTel()">+</button>
            
                    </div>
                     <img src="assets/img/profile.jpg" style="margin-left:25px">
                     <form action="profileTel.php" method="POST">
                         <label style="margin-left:-150px">Téléphone :</label>
                         <input class="form-control" style="margin-left:40px; width:80%;" type="text" name="tel" id="tel" placeholder="Entrez votre nouveau numéro"> <br>
                         <button  class="btn btn-primary" type="submit" id="btn" name="submittel">Sauvegarder</button>
            
                     </form>

                     <?php

                     ?>
                </div>
            </div>

            <div class="bg-mail" style="width:100%;height: 100%;background-color: rgba(0, 0, 0, 0.7);position: absolute;top: 0;justify-content: center;align-items: center; display:none">
                <div class="bg-content" style="width:400px;height: 300px;background-color: rgb(241, 241, 241);padding:20px;border-radius: 4px;text-align: center;">
                    <div class="close" style="font-size:25px; margin-top:-8px;background-color: rgb(241, 241, 241)">
                    <button class="but-close" style="transform:rotate(45deg);background-color: rgb(241, 241, 241); border:0" type="button" onClick="cacherModifierMail()">+</button>
            
                    </div>
                     <img src="assets/img/profile.jpg" style="margin-left:15px">
                     <form action="profileMail.php" method="POST">
                         <label style="margin-left:-180px">Mail :</label>
                         <input class="form-control" style="margin-left:40px; width:80%;" type="text" name="mail" id="mail" placeholder="Entrez votre nouveau adresse mail"> <br>
                         <button  class="btn btn-primary" type="submit" id="btn" name="submitmail">Sauvegarder</button>
            
                     </form>

                     <?php

                     ?>
                </div>
            </div>


            <div class="bg-adr" style="width:100%;height: 100%;background-color: rgba(0, 0, 0, 0.7);position: absolute;top: 0;justify-content: center;align-items: center; display:none">
                <div class="bg-content" style="width:400px;height: 350px;background-color: rgb(241, 241, 241);padding:20px;border-radius: 4px;text-align: center;">
                    <div class="close" style="font-size:25px; margin-top:-8px;background-color: rgb(241, 241, 241)">
                    <button class="but-close" style="transform:rotate(45deg);background-color: rgb(241, 241, 241); border:0" type="button" onClick="cacherModifierAdr()">+</button>
            
                    </div>
                     <img src="assets/img/profile.jpg" style="margin-left:15px">
                     <form action="profileAdr.php" method="POST">
                         
                         <label style="margin-left:-180px; margin-top:-10px">Wilaya :</label>
                         <input class="form-control" style="margin-left:40px; width:80%;" type="text" name="wilaya" id="wilaya" placeholder="Entrez votre nouvelle wilaya"> <br>
                         <button  class="btn btn-primary" type="submit" id="btn" name="submitadr">Sauvegarder</button>
                     </form>

                     
                </div>
            </div>

    </body>
</html>
