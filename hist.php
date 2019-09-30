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
        <link href="favicon.ico" rel="shortcut icon">
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
            <div id="pre-header" class="container" style="height:40px">
            </div>
            <div id="header">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html" title="">
                                <img align="center" id="margin-top-logo" src="assets/img/logo.png" alt="Logo" />
                            </a>
                            <a href="#" class="notification">
                                <div class="dropdown">
                                <span>
                                    <img class="fa-copy" src="assets/img/notification.jpg">
                                </span>
                                </div>
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
            <div id="post_header" class="container" style="height:40px">
            </div>
            <div id="content-top-border" class="container">
            </div>
            <!-- === END HEADER === -->
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-gray-lighter">
                    
                    <div class="row margin-vert-30">
                        <!-- Main Text -->
                        <div class="col-md-12">
                                <div  align="center" style="width:50%; margin-left: 25%">
                                        <img src="assets/img/presentation.png" align="center" style="width:100%"></img>
                                 </div>
                                 
                        </div>
                        <!-- End Main Text -->
                    </div>
                    <h2 align="center" style="font-weight: bold; margin-top: -20px ; color:#3A6D94">MES COMMANDES</h2>
    
                    
                   <!-- <div>
                        <h3 align="center" style="font-weight: bold; margin-top: 0px; color:#ADB5BD ; margin-left:0% ">SUIVANTES</h3>
                    </div> -->
                </div>
                <div class="container background-gray-lighter">
                    
                    
                   <!-- <div>
                        <h3 align="center" style="font-weight: bold; margin-top: 0px; color:#ADB5BD ; margin-left:0% ">SUIVANTES</h3>
                    </div> -->
                </div>
                <div class="container background-gray-lighter">
                    <?php
                    $link=mysqli_connect("localhost","root","","washit") or die("<p>Connection impossible : ".mysql_error(). "</p>") ; 
                    $query="select id from users where actif =1";
                    $result=mysqli_query($link,$query);
                    $obj= mysqli_fetch_object($result);
                    $idUser = $obj->id;

                    $query4="select COUNT(*) as existe from commandes where idUser ='".$idUser."' and livre=0";
                    $result4=mysqli_query($link,$query4);
                    $obj4= mysqli_fetch_object($result4);
                    $existe = $obj4->existe;
                    if($existe != 0)
                    {
                        echo "<div>";
                        echo "<h3 align='center' style='font-weight: bold; margin-top: 0px; color:#ADB5BD ; margin-left:0% ; margin-bottom:5%'>PROCHAINES</h3>";
                        echo "</div>";

                        echo "<div id='c1' style='font-weight: bold;margin-left:2%;float: left;width: 19%;justify-content: center;align-items: center'> N° COMMANDE</div>";
                        echo "<div id='c2' style='font-weight: bold;float: left;width: 17%;justify-content: center;align-items: center; margin-left:3%'> TYPE </div>";
                        echo "<div id='c3' style='font-weight: bold;float: left;width: 19%;justify-content: center;align-items: center; margin-left:3%'> DATE </div>";
                        echo "<div id='c4' style='font-weight: bold;float: left;width: 18%;justify-content: center;align-items: center; margin-left:2%'> HEURE </div>";
                        echo "<div id='c5' style='font-weight: bold;float: left;width: 14%;justify-content: center;align-items: center; margin-left:3%'> PRIX TOTAL</div>";
                    
                    $query1="select * from commandes where idUser ='".$idUser."' and livre=0";
                    $result1=mysqli_query($link,$query1);
                    while($row=$result1->fetch_assoc())
                    {

                
                    echo "<div class='row' style='width:100%; margin-top:1%'>";
                        echo "<div  style='width:100%;background-color:#78B3DC; opacity:0.7;border-radius: 5%;margin-left:2%;color:black'>"; 
                           echo "<p align='center' style='color:black;font-size:17px;font-weight: bold;float: left;width: 15%;background-color:#ADB5BD; opacity:0.7; padding-top:1%;padding-bottom:1% '>".$row['idCommande']."</p>";
                           echo "<p align='center' style='color:black;font-size:17px;font-weight: bold;float: left;width: 20%;background-color:#ADB5BD; opacity:0.7; padding-top:1%;padding-bottom:1% '>COLLECTE</p>";
                           echo "<p align='center' style='color:black;font-size:17px;font-weight: bold;float: left;width: 20%;background-color:#ADB5BD; opacity:0.7; padding-top:1%;padding-bottom:1%'>".$row['dateCol']."</p>";
                           echo "<p align='center' style='color:black;font-size:17px;font-weight: bold;float: left;width: 25%;background-color:#ADB5BD; opacity:0.7; padding-top:1%;padding-bottom:1%'>".$row['heureCol']."</p>";
                           echo "<p align='center' style='color:black;font-size:17px;font-weight: bold;float: left;width: 20%;background-color:#ADB5BD; opacity:0.7; padding-top:1%;padding-bottom:1%'>".$row['prixTotal']." DZD</p>";
                        echo "</div>";
                    echo "</div>";
                    echo "<div class='row' style='width:100%; margin-top:-4%'>";
                        echo "<div  style='width:100%;background-color:#78B3DC; opacity:0.7;border-radius: 5%;margin-left:2%;color:black'>"; 
                           echo "<p align='center' style='color:black;font-size:17px;font-weight: bold;float: left;width: 15%;background-color:#78B3DC; opacity:0.7; padding-top:1%;padding-bottom:1%'>".$row['idCommande']."</p>";
                           echo "<p align='center' style='color:black;font-size:17px;font-weight: bold;float: left;width: 20%;background-color:#78B3DC; opacity:0.7; padding-top:1%;padding-bottom:1%'>LIVRAISON</p>";
                           echo "<p align='center' style='color:black;font-size:17px;font-weight: bold;float: left;width: 20%;background-color:#78B3DC; opacity:0.7; padding-top:1%;padding-bottom:1%'>".$row['dateLiv']."</p>";
                           echo "<p align='center' style='color:black;font-size:17px;font-weight: bold;float: left;width: 25%;background-color:#78B3DC; opacity:0.7; padding-top:1%;padding-bottom:1%'>".$row['heureLiv']."</p>";
                           echo "<p align='center' style='color:black;font-size:17px;font-weight: bold;float: left;width: 20%;background-color:#78B3DC; opacity:0.7; padding-top:1%;padding-bottom:1%'>".$row['prixTotal']." DZD</p>";
                        echo "</div>";
                    echo "</div>";
                    echo "<div class='row'>";
                    echo "<div class='col-md-12 portfolio-group no-padding'>";
                            
                        echo "<div class='col-md-4 portfolio-item margin-bottom-40 video'>";
                        echo "<h2 align='center' style='font-family:helvetica;font-size: 15px; font-weight: bold; margin-top: -25px ; color:#3A6D94; margin-bottom:-20px'>DETAILS </h2>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "<div style='width:100% ;margin-bottom:5%; display:inline' id='detailsProch'>";  
                    $query2="select * from articles where idCommande ='".$row['idCommande']."'";
                    $result2=mysqli_query($link,$query2);
                    while($row2=$result2->fetch_assoc())
                    {
                        $quant = $row2['quantite'];
                        $article = $row2['article'];
                        $prix = $row2['prix'];
                        echo "<div class='row'>";
                        echo "<div class='col-md-12 portfolio-group no-padding'>";
                                
                            echo "<div style='margin-top:-2%;padding-left:20%' class='col-md-4 portfolio-item margin-bottom-40 video'>";
                        
                               echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;  visibility:visible' type='text'  value='$quant ×' readonly/>"; echo "<br>";
                            
                            echo "</div>";

                            echo "<div style='margin-top:-2%;padding-left:10%' class='col-md-4 portfolio-item margin-bottom-40 video'>";
                        
                                echo "<input style='background-color: #F2F2F2; margin-top: 0px; border: #ADB5BD ;font-size: 15px; font-weight: bold; visibility:visible' type='text'  value='$article' readonly/>"; echo "<br>";
                        
                            echo "</div>";

                            echo "<div style='margin-top:-2%' class='col-md-4 portfolio-item margin-bottom-40 video'>";
                        
                                echo "<input style='background-color: #F2F2F2; margin-top: 0px; border: #ADB5BD ;font-size: 15px; font-weight: bold; visibility:visible' type='text'  value='$prix DZD' readonly/>"; echo "<br>";
                    
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                    }
                   
                    echo"</div>";
                }
                }
                ?>

                
                </div>

                <div class="container background-gray-lighter">
                    
                   <!-- <div>
                        <h3 align="center" style="font-weight: bold; margin-top: 0px; color:#ADB5BD ; margin-left:0% ">SUIVANTES</h3>
                    </div> -->
                </div>
                <div class="container background-gray-lighter">
                    <?php
                    $link=mysqli_connect("localhost","root","","washit") or die("<p>Connection impossible : ".mysql_error(). "</p>") ; 
                    $query="select id from users where actif =1";
                    $result=mysqli_query($link,$query);
                    $obj= mysqli_fetch_object($result);
                    $idUser = $obj->id;

                    $query5="select COUNT(*) as existe from commandes where idUser ='".$idUser."' and livre=1 and collecte=1";
                    $result5=mysqli_query($link,$query5);
                    $obj5= mysqli_fetch_object($result5);
                    $existe = $obj5->existe;
                    if($existe != 0)
                    {
                        echo "<div>";
                        echo "<h3 align='center' style='font-weight: bold; margin-top: 0px; color:#ADB5BD ; margin-left:0% ; margin-bottom:5%'>PRECEDENTES</h3>";
                        echo "</div>";

                        echo "<div id='c1' style='font-weight: bold;margin-left:8%;float: left;width: 19%;justify-content: center;align-items: center'> N° COMMANDE</div>";
                        echo "<div id='c2' style='font-weight: bold;float: left;width: 17%;justify-content: center;align-items: center; margin-left:3%'> TYPE </div>";
                        echo "<div id='c3' style='font-weight: bold;float: left;width: 19%;justify-content: center;align-items: center; margin-left:1%'> DATE </div>";
                        echo "<div id='c4' style='font-weight: bold;float: left;width: 18%;justify-content: center;align-items: center; margin-left:-1%'> HEURE </div>";
                        echo "<div id='c5' style='font-weight: bold;float: left;width: 14%;justify-content: center;align-items: center'> PRIX TOTAL</div>";
                    

                    $query1="select * from commandes where idUser ='".$idUser."' and livre=1 and collecte=1";
                    $result1=mysqli_query($link,$query1);
                    while($row=$result1->fetch_assoc())
                    {

                
                    echo "<div class='row' style='width:100%; margin-top:1%'>";
                        echo "<div  style='width:100%;background-color:#78B3DC; opacity:0.7;border-radius: 5%;margin-left:2%;color:black'>"; 
                           echo "<p align='center' style='color:black;font-size:17px;font-weight: bold;float: left;width: 15%;background-color:#ADB5BD; opacity:0.7; padding-top:1%;padding-bottom:1% '>".$row['idCommande']."</p>";
                           echo "<p align='center' style='color:black;font-size:17px;font-weight: bold;float: left;width: 20%;background-color:#ADB5BD; opacity:0.7; padding-top:1%;padding-bottom:1% '>COLLECTE</p>";
                           echo "<p align='center' style='color:black;font-size:17px;font-weight: bold;float: left;width: 20%;background-color:#ADB5BD; opacity:0.7; padding-top:1%;padding-bottom:1%'>".$row['dateCol']."</p>";
                           echo "<p align='center' style='color:black;font-size:17px;font-weight: bold;float: left;width: 25%;background-color:#ADB5BD; opacity:0.7; padding-top:1%;padding-bottom:1%'>".$row['heureCol']."</p>";
                           echo "<p align='center' style='color:black;font-size:17px;font-weight: bold;float: left;width: 20%;background-color:#ADB5BD; opacity:0.7; padding-top:1%;padding-bottom:1%'>".$row['prixTotal']." DZD</p>";
                        echo "</div>";
                    echo "</div>";
                    echo "<div class='row' style='width:100%; margin-top:-4%'>";
                        echo "<div  style='width:100%;background-color:#78B3DC; opacity:0.7;border-radius: 5%;margin-left:2%;color:black'>"; 
                           echo "<p align='center' style='color:black;font-size:17px;font-weight: bold;float: left;width: 15%;background-color:#78B3DC; opacity:0.7; padding-top:1%;padding-bottom:1%'>".$row['idCommande']."</p>";
                           echo "<p align='center' style='color:black;font-size:17px;font-weight: bold;float: left;width: 20%;background-color:#78B3DC; opacity:0.7; padding-top:1%;padding-bottom:1%'>LIVRAISON</p>";
                           echo "<p align='center' style='color:black;font-size:17px;font-weight: bold;float: left;width: 20%;background-color:#78B3DC; opacity:0.7; padding-top:1%;padding-bottom:1%'>".$row['dateLiv']."</p>";
                           echo "<p align='center' style='color:black;font-size:17px;font-weight: bold;float: left;width: 25%;background-color:#78B3DC; opacity:0.7; padding-top:1%;padding-bottom:1%'>".$row['heureLiv']."</p>";
                           echo "<p align='center' style='color:black;font-size:17px;font-weight: bold;float: left;width: 20%;background-color:#78B3DC; opacity:0.7; padding-top:1%;padding-bottom:1%'>".$row['prixTotal']." DZD</p>";
                        echo "</div>";
                    echo "</div>";
                    echo "<div class='row'>";
                    echo "<div class='col-md-12 portfolio-group no-padding'>";
                            
                        echo "<div class='col-md-4 portfolio-item margin-bottom-40 video'>";
                        echo "<h2 align='center' style='font-family:helvetica;font-size: 15px; font-weight: bold; margin-top: -25px ; color:#3A6D94; margin-bottom:-20px'>DETAILS </h2>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "<div style='width:100% ;margin-bottom:5%; display:inline ' id='detailsPrec'>";  
                    $query2="select * from articles where idCommande ='".$row['idCommande']."'";
                    $result2=mysqli_query($link,$query2);
                    while($row2=$result2->fetch_assoc())
                    {
                        $quant = $row2['quantite'];
                        $article = $row2['article'];
                        $prix = $row2['prix'];
                    echo "<div class='row'>";
                    echo "<div class='col-md-12 portfolio-group no-padding'>";
                            
                        echo "<div style='margin-top:-2%;padding-left:20%' class='col-md-4 portfolio-item margin-bottom-40 video'>";
                        
                        
                            echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;  visibility:visible' type='text'  value='$quant ×' readonly/>"; echo "<br>";
                            
                        echo "</div>";

                        echo "<div style='margin-top:-2%;padding-left:10%' class='col-md-4 portfolio-item margin-bottom-40 video'>";
                        
                             echo "<input style='background-color: #F2F2F2; margin-top: 0px; border: #ADB5BD ;font-size: 15px; font-weight: bold; visibility:visible' type='text'  value='$article' readonly/>"; echo "<br>";
                        
                        echo "</div>";

                        echo "<div style='margin-top:-2%' class='col-md-4 portfolio-item margin-bottom-40 video'>";
                        
                             echo "<input style='font-family:helvetica;background-color: #F2F2F2; margin-top: -5px; border: #ADB5BD ;font-size: 15px; font-weight: bold; visibility:visible' type='text'  value='$prix DZD' readonly/>"; echo "<br>";
                    
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                   
                    echo"</div>";
                }
            }
                ?>
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
    </body>
</html>
<!-- === END FOOTER === -->
                
               