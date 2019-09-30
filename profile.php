<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>WashIt</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="assets/img/title.png" />
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=PT+Sans" type="text/css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">

        
    </head>
    <body>
        <div id="body-bg">
            <ul class="social-icons pull-right hidden-xs">
                <li class="social-rss">
                    <a href="#" target="_blank" title="RSS"></a>
                </li>
                <li class="social-twitter">
                    <a href="#" target="_blank" title="Twitter"></a>
                </li>
                <li class="social-facebook">
                    <a href="#" target="_blank" title="Facebook"></a>
                </li>
                <li class="social-googleplus">
                    <a href="#" target="_blank" title="GooglePlus"></a>
                </li>
            </ul>
            <div id="pre-header" class="container" style="height:0px">
            </div>
            <div id="header">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html" title="">
                            <img  src="assets/img/logo2.png" style="width:25%" alt="Logo" />
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>
                </div>
            </div>
            <!-- Top Menu -->
            <div id="hornav" class="container no-padding">
                <div class="row">
                    <div class="col-md-12 no-padding">
                        <div class="text-center visible-lg">
                            <ul id="hornavmenu" class="nav navbar-nav">
                                <li>
                                    <a href="hommeconnectednonotif.html" class="fa-home" id="ecriture_navbar">Accueil</a>
                                </li>
                                <li>
                                    <a href="presentation.html" class="fa-gears">Qui Somme Nous</a>
                                </li>
                                <li>
                                    <a href="inscription.php" class="fa-copy">Inscription</a>
                                </li>
                                <li>
                                    <a href="index.html" class="fa-th">Déconnexion</a>
                                </li>
                                
                                <li>
                                    <a href="contact.html" class="fa-comment">Contactez Nous</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Menu -->
       
            <!-- === END HEADER === -->
            <!-- === BEGIN CONTENT === -->
            <div id="content" style="margin-top:-10px">
               
                <div class="container background-gray-lighter">
                <div  align="center" style="width:50%; margin-left: 25%">
                    <img src="assets/img/mmm.png" align="center" style="width:30%; margin-top:3%"></img>
                </div>
               
               <?php
                
                $link=mysqli_connect("localhost","root","","washit") or die("<p>Connection impossible : ".mysql_error(). "</p>") ; 
                $type="etud";
                $query="select * from users where actif =1 and type = '".$type."'";
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
            echo "<div class='row' style='margin-top:10%'>";
                echo "<div class='col-md-12 portfolio-group no-padding'>";

                    echo "<div style='' class='col-md-4 portfolio-item margin-bottom-40 video'>";
                        echo "<img src='assets/img/tel.jpg' style='width:20%;margin-top:-5%' >";
                    echo "</div>";

                    echo "<div style='' class='col-md-4 portfolio-item margin-bottom-40 video'>";
                         echo "<p align='center' style='color:black;font-weight:bold;font-size: 20px'>+213 $tel</p>";    
                    
                    echo "</div>";

                    echo "<div style='' class='col-md-4 portfolio-item margin-bottom-40 video'>";
                    echo "<a  onClick='modifierTel()'>";
                    
                    echo "<img  style='' class='btn' src='assets/img/modifier.png'>";                     
                           
                    echo "</a>"; 
                    echo "</div>";
                    
                echo "</div>";
            echo "</div>";


            echo "<div class='row'>";
              echo "<div class='col-md-12 portfolio-group no-padding'>";
                echo "<div style='' class='col-md-4 portfolio-item margin-bottom-40 video'>";
                    echo "<img src='assets/img/mail.jpg' style='width:20%;margin-top:-5%' >";
                echo "</div>";
                echo "<div style='' class='col-md-4 portfolio-item margin-bottom-40 video'>";
                    echo "<p align='center' style='color:black;font-weight:bold;font-size: 20px'>$mail</p>";
                echo "</div>";
                echo "<div style='' class='col-md-4 portfolio-item margin-bottom-40 video'>";
                    echo "<a  onClick='modifierMail()'>";
                     echo "<img  style='' class='btn' src='assets/img/modifier.png'>";
                    echo "</a>";
                echo "</div>";
              echo "</div>";
            echo "</div>";


            echo "<div class='row'>";
              echo "<div class='col-md-12 portfolio-group no-padding'>";
                echo "<div style='' class='col-md-4 portfolio-item margin-bottom-40 video'>";
                    echo "<img src='assets/img/adresse.jpg' style='width:20%;margin-top:-5%' >";
                echo "</div>";
                echo "<div style='' class='col-md-4 portfolio-item margin-bottom-40 video'>";
                    echo "<p align='center' style='color:black;font-weight:bold;font-size: 20px'>Résidence universiatire $adr, $wilaya</p>";
                echo "</div>";
                echo "<div style='' class='col-md-4 portfolio-item margin-bottom-40 video'>";
                    echo "<a  onClick='modifierAdr()'>";     
                      echo "<img  style='' class='btn' src='assets/img/modifier.png'>";               
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
                <div class="container background-gray-lighter"> 
                   
                </div>
                <!--
                <div class="container background-white">
                    <div class="row padding-vert-40">
                        <div class="col-md-12">
                            <h2 class="animate fadeIn text-center">WE ARE CURRENTLY HIRING!</h2>
                            <p class="animate fadeIn text-center">If you like to work with a creative team in a lively and friendly enviroment then call us today!.</p>
                            <p class="animate fadeInUp text-center">
                                <button class="btn btn-primary btn-lg" type="button">View Details</button>
                            </p>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === -->
            <div id="content-bottom-border" class="container">
            </div>
            <div id="base">
                <div class="container padding-vert-30 margin-top-60">
                    <div class="row">
                        <!-- Contact Details -->
                        <div class="col-md-4 margin-bottom-20">
                            <h3 class="margin-bottom-10" >Contactez nous via</h3>
                            <p>
                                <span class="fa-phone">Telephone:</span>(213)558 863 413
                                <br>
                                <span class="fa-envelope">Email:</span>
                                <a href="mailto:info@washit.com">info@washit.com</a>
                                <br>
                                <span class="fa-link">Website:</span>
                                <a href="http://www.washit.com">www.washit.com</a>
                            </p>
                            <br>
                            
                            <h3 class="margin-bottom-10" >Localisation</h3>
                            <p class="p">Cheraga,
                                <br>Alger,
                                <br>Algérie
                                </p>
                        </div>
                        <!-- End Contact Details -->
            
                        <div class="col-md-1"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- JS -->
            <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
            <!-- End JS -->
            <div class="bg-bg" style="width:100%;height: 100%;background-color: rgba(0, 0, 0, 0.7);position: absolute;top: 0;justify-content: center;align-items: center; display:none">
                <div class="bg-content" style="width:400px;height: 400px;background-color: rgb(241, 241, 241);padding:20px;border-radius: 4px;text-align: center;">
                    <div class="close" style="font-size:25px; margin-top:-8px;background-color: rgb(241, 241, 241)">
                    <button class="but-close" style="transform:rotate(45deg);background-color: rgb(241, 241, 241); border:0" type="button" onClick="cacherModifier()">+</button>
            
                    </div>
                     <img src="assets/img/profile.jpg" style="margin-left:15px">
                     <form action="#">
                         <label style="margin-left:-180px">Nom :</label>
                         <?php
                        echo '<input class="form-control" style="margin-left:70px;display:none" type="text" name="user" id="user" value="'.$mail.'"> <br>';
?>
                         <input class="form-control" style="margin-left:70px" type="text" placeholder="Entrez votre nouveau nom"> <br>
                         <button  class="btn btn-primary" type="submit" id="btn" name="submit">Sauvegarder</button>
            
                     </form>

                     <?php

                     ?>
                </div>
            </div>


            <div class="bg-tel" style="width:100%;height: 100%;background-color: rgba(0, 0, 0, 0.7);position: absolute;top: 0;justify-content: center;align-items: center; display:none">
                <div class="bg-content" style="width:400px;height: 330px;background-color: rgb(241, 241, 241);padding:20px;border-radius: 4px;text-align: center;">
                    <div class="close" style="font-size:25px; margin-top:-8px;background-color: rgb(241, 241, 241)">
                    <button class="but-close" style="transform:rotate(45deg);background-color: rgb(241, 241, 241); border:0" type="button" onClick="cacherModifierTel()">+</button>
            
                    </div>
                     <img src="assets/img/profile.jpg" style="margin-left:25px">
                     <form action="profileTel.php" method="POST">
                         <label style="margin-left:-150px">Téléphone :</label>
                         <input class="form-control" style="margin-left:70px" type="text" name="tel" id="tel" placeholder="Entrez votre nouveau numéro"> <br>
<?php
                        echo '<input class="form-control" style="margin-left:70px;display:none" type="text" name="user" id="user" value="'.$mail.'"> <br>';
?>
                         <button  class="btn btn-primary" type="submit" id="btn" name="submittel">Sauvegarder</button>
            
                     </form>

                     <?php

                     ?>
                </div>
            </div>

            <div class="bg-mail" style="width:100%;height: 100%;background-color: rgba(0, 0, 0, 0.7);position: absolute;top: 0;justify-content: center;align-items: center; display:none">
                <div class="bg-content" style="width:400px;height: 330px;background-color: rgb(241, 241, 241);padding:20px;border-radius: 4px;text-align: center;">
                    <div class="close" style="font-size:25px; margin-top:-8px;background-color: rgb(241, 241, 241)">
                    <button class="but-close" style="transform:rotate(45deg);background-color: rgb(241, 241, 241); border:0" type="button" onClick="cacherModifierMail()">+</button>
            
                    </div>
                     <img src="assets/img/profile.jpg" style="margin-left:15px">
                     <form action="profileMail.php" method="POST">
                         <label style="margin-left:-180px">Mail :</label>
                         <?php
                        echo '<input class="form-control" style="margin-left:70px;display:none" type="text" name="user" id="user" value="'.$mail.'"> <br>';
?>
                         <input class="form-control" style="margin-left:70px" type="text" name="mail" id="mail" placeholder="Entrez votre nouveau adresse mail"> <br>
                         <button  class="btn btn-primary" type="submit" id="btn" name="submitmail">Sauvegarder</button>
            
                     </form>

                     <?php

                     ?>
                </div>
            </div>


            <div class="bg-adr" style="width:100%;height: 100%;background-color: rgba(0, 0, 0, 0.7);position: absolute;top: 0;justify-content: center;align-items: center; display:none">
                <div class="bg-content" style="width:400px;height: 400px;background-color: rgb(241, 241, 241);padding:20px;border-radius: 4px;text-align: center;">
                    <div class="close" style="font-size:25px; margin-top:-8px;background-color: rgb(241, 241, 241)">
                    <button class="but-close" style="transform:rotate(45deg);background-color: rgb(241, 241, 241); border:0" type="button" onClick="cacherModifierAdr()">+</button>
            
                    </div>
                     <img src="assets/img/profile.jpg" style="margin-left:15px">
                     <form action="profileAdr.php" method="POST">
                         <label style="margin-left:-180px; margin-top:-10px">Cité :</label>
          
                         <select class="form-control" style="margin-left:70px" name="cite" id="cite" placeholder="Entrer votre nouvelle cité" required/>
                                    <option>Bab Ezzouar 05</option>
                                    <option>Bouraoui Amar</option>
                                    <option>EL-ALIA</option>
                                    <option>19 Mai 1956</option>

                                    <option>Baya Hocine</option>
                                    <option>Dergana</option>
                                    <option>Abdelkader Belarbi</option>
                                    <option>Bab Ezzouar 03</option>

                                    <option>Taleb Abderahmane 01</option>
                                    <option>Taleb Abderahmane 02</option>
                                    <option>Taleb Abderahmane 03</option>
                                    <option>Jeune Fille</option>

                                    <option>Vieux Kouba</option>
                                    <option>Garidi</option>
                                    <option>Mhammed Youcef</option>
                                    <option>Said Hamdine</option>

                                    <option>Dely Brahim 01</option>
                                    <option>Dely Brahim 02</option>
                                    <option>Beni Messous</option>
                                    <option>Hydra 03</option>
                                    
                                    <option>Ouled Fayet 01</option>
                                    <option>Ouled Fayet 02</option>
                                    <option>Ouled Fayet 03</option>
                                    <option>Sidi Abdellah</option>
                                </select> 
                         <?php
                        echo '<input class="form-control" style="margin-left:70px;display:none" type="text" name="user" id="user" value="'.$mail.'"> <br>';
?>
                         <label style="margin-left:-180px; margin-top:-10px">Wilaya :</label>
                         <input class="form-control" style="margin-left:70px" type="text" name="wilaya" id="wilaya" value="Alger" placeholder="Entrez votre nouvelle wilaya" readonly> <br>
                         <button  class="btn btn-primary" type="submit" id="btn" name="submitadr">Sauvegarder</button>
                     </form>

                     
                </div>
            </div>

    </body>
</html>
<!-- === END FOOTER === -->