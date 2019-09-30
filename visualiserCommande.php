

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
       
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
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
            <!--Top Menu--> 
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
            <!--End Top Menu --> 
   
            <!-- === END HEADER === -->
            <!-- === BEGIN CONTENT === -->
            <div id="content" style="margin-top:-10px">
                <div class="container background-gray-lighter">
                    
                    <h2 align="center" style="font-weight: bold; margin-top: 0px ; color:#3A6D94">MA COMMANDE</h2>
                    <h2 align="center" style="font-size: 25px; font-weight: bold; margin-top: -60px ; color:#ADB5BD">DETAILS DE LA COMMANDE</h2>
                    <img src="assets/img/separateur2.jpg" align="center" style="margin-left:5%; margin-top:-40px;width:90%">
                   
                
                </div>
        
                <div class="container background-gray-lighter">
            
                <div style='width:90%;margin-left:8%;display:table; border:0px'>
                <div  style='display:table-row;background:#F2F2F2;'>
                    <div  style='display:table-cell;width:40%'>
                        <h2  style="font-size: 18px; font-weight: bold; margin-top: -60px ; margin-left:10%;color:#3A6D94; margin-bottom:-20px">ARTICLES</h2>
                    </div>
                    <div  style='display:table-cell;width:40%;padding-left:25%;font-size: 16px; font-weight: bold'>
                        <a href="javascript:history.back()"> MODIFIER </a>
                    </div>
                </div>
                </div>
                <?php
                $qshirt= $_POST['quantshirt'];
                $qpull= $_POST['quantpull'];
                $qpantalon= $_POST['quantpantalon'];
                $qchemise= $_POST['quantchemise'];
                $qshort= $_POST['quantshort'];
                $qveste= $_POST['quantveste'];
                $prix = $_POST['prix'];

                $tshirt= $_POST['typeshirt'];
                $tpull= $_POST['typepull'];
                $tpantalon= $_POST['typepantalon'];
                $tchemise= $_POST['typechemise'];
                $tshort= $_POST['typeshort'];
                $tveste= $_POST['typeveste'];
                

                $pshirt = $qshirt*30;
                $ppull = $qpull*40;
                $ppantalon = $qpantalon*70;
                $pchemise = $qchemise*40;
                $pshort = $qshort*40;
                $pveste = $qveste*200;
                $TTC = $pshirt + $ppull + $ppantalon + $pchemise + $pshort + $pveste;
            
                echo "<div style='display:none;'>";
               
                        echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;width:80%' type='text' name='typeshirt' id='typeshirt' value='$tshirt' readonly/> <br>";
                        echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;width:80%' type='text' name='typepull' id='typepull' value='$tpull' readonly/> <br>";
                        echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;width:80%' type='text' name='typepantalon' id='typepantalon' value='$tpantalon' readonly/> <br>";
                        echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;width:80%' type='text' name='typechemise' id='typechemise' value='$tchemise' readonly/> <br>";
                        echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;width:80%' type='text' name='typeshort' id='typeshort' value='$tshort' readonly/> <br>";
                        echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;width:80%' type='text' name='typeveste' id='typeveste' value='$tveste' readonly/> <br>";
                  
                echo "</div>";

            echo "<div style='width:80%;margin-left:20%;display:table; border:0px'>";
                echo "<div  style='display:table-row;background:#F2F2F2'>";
                    echo "<div  style='display:table-cell;width:20%'>";
                        echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;width:80%' type='text' name='qshirt' id='qshirt' value='$qshirt  ×' readonly/> <br>";
                    echo "</div>";
                    echo "<div  style='display:table-cell;width:20%'>";
                        echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;width:80%' name='shirt' id='shirt' value='T-SHIRT' readonly/> <br>";
                    echo "</div>";
                    echo "<div  style='display:table-cell;width:20%;border:#fff'>";
                        echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;width:80%' type='text' name='pshirt' id='pshirt' value='$pshirt DZD' readonly/> <br>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";

            echo "<div style='width:80%;margin-left:20%;display:table; border:0px'>";
                echo "<div  style='display:table-row;background:#F2F2F2'>";
                    echo "<div  style='display:table-cell;width:30%'>";
                        echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;width:80%' type='text' name='qpull' id='qpull' value='$qpull  ×' readonly/> <br>";
                    echo "</div>";
                    echo "<div  style='display:table-cell;width:30%'>";
                        echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;width:80%' name='pull' id='pull' value='PULL' readonly/> <br>";
                    echo "</div>";
                    echo "<div  style='display:table-cell;width:30%;border:#fff'>";
                        echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;width:80%' type='text' name='ppull' id='ppull' value='$ppull DZD' readonly/> <br>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";

            echo "<div style='width:80%;margin-left:20%;display:table; border:0px'>";
                echo "<div  style='display:table-row;background:#F2F2F2'>";
                    echo "<div  style='display:table-cell;width:30%'>";
                        echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;width:80%' type='text' name='qpantalon' id='qpantalon' value='$qpantalon  ×' readonly/> <br>";
                    echo "</div>";
                    echo "<div  style='display:table-cell;width:30%'>";
                        echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;width:80%' type='text' name='pantalon' id='pantalon' value='PANTALON' readonly/> <br>";
                    echo "</div>";
                    echo "<div  style='display:table-cell;width:30%;border:#fff'>";
                        echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;width:80%' type='text' name='ppantalon' id='ppantalon' value='$ppantalon DZD' readonly/> <br>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";

            echo "<div style='width:80%;margin-left:20%;display:table; border:0px'>";
                echo "<div  style='display:table-row;background:#F2F2F2'>";
                    echo "<div  style='display:table-cell;width:30%'>";
                        echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;width:80%' type='text' name='qchemise' id='qchemise' value='$qchemise  ×' readonly/> <br>";
                    echo "</div>";
                    echo "<div  style='display:table-cell;width:30%'>";
                        echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;width:80%' type='text' name='chemise' id='chemise' value='CHEMISE' readonly/> <br>";
                    echo "</div>";
                    echo "<div  style='display:table-cell;width:30%;border:#fff'>";
                        echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;width:80%' type='text' name='pchemise' id='pchemise' value='$pchemise DZD' readonly/> <br>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
            
            echo "<div style='width:80%;margin-left:20%;display:table; border:0px'>";
                echo "<div  style='display:table-row;background:#F2F2F2'>";
                    echo "<div  style='display:table-cell;width:30%'>";
                        echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;width:80%' type='text' name='qshort' id='qshort' value='$qshort  ×' readonly/> <br>";
                    echo "</div>";
                    echo "<div  style='display:table-cell;width:30%'>";
                        echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;width:80%' type='text' name='short' id='short' value='SHORT' readonly/> <br>";
                    echo "</div>";
                    echo "<div  style='display:table-cell;width:30%;border:#fff'>";
                        echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;width:80%' type='text' name='pshort' id='pshort' value='$pshort DZD' readonly/> <br>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";

            echo "<div style='width:80%;margin-left:20%;display:table; border:0px'>";
                echo "<div  style='display:table-row;background:#F2F2F2'>";
                    echo "<div  style='display:table-cell;width:30%'>";
                        echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;width:80%' type='text' name='qveste' id='qveste' value='$qveste  ×' readonly/> <br>";
                    echo "</div>";
                    echo "<div  style='display:table-cell;width:30%'>";
                        echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;width:80%' type='text' name='veste' id='veste' value='VESTE' readonly/> <br>";
                    echo "</div>";
                    echo "<div  style='display:table-cell;width:30%;border:#fff'>";
                        echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;width:80%' type='text' name='pveste' id='pveste' value='$pveste DZD' readonly/> <br>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
            
               
               
                
                ?>
            <h2  style="font-size: 18px; font-weight: bold; margin-top: -20px ; margin-left:12%; color:#3A6D94; margin-bottom:-20px">DATE & HEURE</h2>
                    
            </div>

            <div class="container background-gray-lighter" >
            
                <?php
                $Dcol= $_POST['dateCollecte'];
                $Dliv= $_POST['dateLiv'];
                $Hcol= $_POST['heureCollecte'];
                $Hliv= $_POST['heureLiv'];

                echo "<div style='width:80%;margin-left:20%;display:table; border:0px'>";
                echo "<div  style='display:table-row;background:#F2F2F2'>";
                    echo "<div  style='display:table-cell;width:30%'>";
                        echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;width:80%' type='text' name='col' id='col' value='COLLECTE' readonly/> <br>";
                        echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;width:80%' type='text' name='dcol' id='dcol' value='$Dcol' readonly/> <br>";
                        echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;width:80%' type='text' name='hcol' id='hcol' value='$Hcol' readonly/> <br>";
                    echo "</div>";
                    echo "<div  style='display:table-cell;width:30%'>";
                        echo "<img src='assets/img/separateur.jpg'  style='margin-top:10%;padding-left:15%'> <br>";
                    echo "</div>";
                    echo "<div  style='display:table-cell;width:30%;border:#fff'>";
                        echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;width:80%' type='text' name='liv' id='liv' value='LIVRAISON' readonly/> <br>";
                        echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;width:80%' type='text' name='dliv' id='dliv' value='$Dliv' readonly/> <br>";
                        echo "<input style='background-color: #F2F2F2; border: #ADB5BD ;font-size: 15px; font-weight: bold;width:80%' type='text' name='hliv' id='hliv' value='$Hliv' readonly/> <br>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
            

                
               ?>
               
                       
            </div>

            <div class="container background-gray-lighter">
            
            <h2 style="margin-left:12%;font-size: 18px; font-weight: bold; margin-top: -20px ; color:#3A6D94; margin-bottom:-20px">ADRESSE</h2>
                <?php
                $link=mysqli_connect("localhost","root","","washit") or die("<p>Connection impossible : ".mysql_error(). "</p>") ; 
                $type="etud";
                $query="select cite,id from users where actif =1 and type = '".$type."'";
                $result=mysqli_query($link,$query);
                $obj= mysqli_fetch_object($result);
                $adresse = $obj->cite;
                $idUser = $obj->id;
    
                echo "<input style='background-color: #F2F2F2; margin-top: -50px; border: #ADB5BD ;font-size: 15px; font-weight: bold;margin-left:12%; visibility:visible; width:800px' type='text' name='adr' id='adr' value='RESIDENCE UNIVERSITAIRE $adresse' readonly/>"; echo "<br>";
       
               ?>
            
                

               
            </div>

            <div class="container background-gray-lighter" >
            <img src="assets/img/separateur2.jpg" align="center" style="margin-left:5%; margin-top:20px;width:90%">
            <?php
            echo "<div style='width:80%;margin-left:20%;display:table; border:0px'>";
                echo "<div  style='display:table-row;background:#F2F2F2'>";
                    echo "<div  style='display:table-cell;width:40%'>";
                        echo "<input style='background-color: #F2F2F2; margin-top: 20px; border: #ADB5BD ;font-size: 18px; font-weight: bold; visibility:visible; color:#3A6D94;padding-left:20%;width:90%' type='text' value='PRIX TOTAL' readonly/>"; echo"<br>";
                    echo "</div>";
                    echo "<div  style='display:table-cell;width:30%'>";
                        echo "<input style='background-color: #F2F2F2; margin-top: 20px; border: #ADB5BD ;font-size: 18px; font-weight: bold; visibility:visible; color:#3A6D94;width:80%' type='text' name='TTC' id='TTC' value='$TTC DZD' readonly/>"; echo"<br>";
                    echo "</div>";
                    
                echo "</div>";
            echo "</div>";
            ?>

            
             
           
             
            <input  style="margin-left:40%;  margin-top:50px; margin-bottom:50px" type="submit" name="submit" id="submit" class="btn btn-primary" value="CONFIRMER LA COMMANDE" onClick="insertData()"/> 
           
            </div>



      

        
                
                
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
            <script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
            <script src="bower_components/moment/moment.js"></script>
            <script src="bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
  


            <script type="text/javascript">
            function insertData()
            {
                var qshirt = parseFloat(document.getElementById("qshirt").value);
                var qpull = parseFloat(document.getElementById("qpull").value);
                var qpantalon = parseFloat(document.getElementById("qpantalon").value);
                var qchemise = parseFloat(document.getElementById("qchemise").value);
                var qshort = parseFloat(document.getElementById("qshort").value);
                var qveste = parseFloat(document.getElementById("qveste").value);

                var pshirt = parseFloat(document.getElementById("pshirt").value);
                var ppull = parseFloat(document.getElementById("ppull").value);
                var ppantalon = parseFloat(document.getElementById("ppantalon").value);
                var pchemise = parseFloat(document.getElementById("pchemise").value);
                var pshort = parseFloat(document.getElementById("pshort").value);
                var pveste = parseFloat(document.getElementById("pveste").value);

                var tshirt = document.getElementById("typeshirt").value;
                var tpull = document.getElementById("typepull").value;
                var tpantalon = document.getElementById("typepantalon").value;
                var tchemise = document.getElementById("typechemise").value;
                var tshort = document.getElementById("typeshort").value;
                var tveste = document.getElementById("typeveste").value;

                var TTC = parseFloat(document.getElementById("TTC").value);
                var dliv = document.getElementById("dliv").value;
                var hliv = document.getElementById("hliv").value;
                var dcol = document.getElementById("dcol").value;
                var hcol = document.getElementById("hcol").value;
                $.ajax({
    
                    url : 'insertCmd.php',
                    type : 'POST',
                    data : {'qshirt': qshirt , 'qpull': qpull, 'qpantalon': qpantalon, 'qchemise': qchemise, 'qshort': qshort, 'qveste': qveste, 'pshirt': pshirt, 'ppull': ppull, 'ppantalon': ppantalon, 'pchemise': pchemise, 'pshort': pshort, 'pveste': pveste, 'tshirt': tshirt, 'tpull': tpull, 'tpantalon': tpantalon, 'tchemise': tchemise, 'tshort': tshort, 'tveste': tveste, 'TTC': TTC, 'dliv': dliv, 'hliv': hliv, 'dcol': dcol, 'hcol': hcol},
                 
                });
                window.location.href = "http://localhost/homeconnected.html";
            } 
            </script>

</body>
</html>
