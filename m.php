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
        <link rel="shortcut icon" href="assets/img/title.png" />
        <style type="text/css">
            .btn-primary
            {
                 background: #78B3DC;
                 border: #78B3DC;
                 box-shadow: 5px 5px rgba(149, 159, 165, 0.3);

            }
        
            .btn-primary:hover,
            .btn-primary:focus,
            .btn-primary:active,
            .btn-primary.active,
            .open .dropdown-toggle.btn-primary {
                
                transform: translateY(3px);
                box-shadow: 5px 2px rgba(149, 159, 165, 0.3);
            }

            .btn-primary:active,
            .btn-primary.active,
            .open .dropdown-toggle.btn-primary {
               
                transform: translateY(3px);
                box-shadow: 5px 2px rgba(149, 159, 165, 0.3);
            }
            .btn-primary.disabled,
            .btn-primary[disabled],
            fieldset[disabled] .btn-primary,
            .btn-primary.disabled:hover,
            .btn-primary[disabled]:hover,
            fieldset[disabled] .btn-primary:hover,
            .btn-primary.disabled:focus,
            .btn-primary[disabled]:focus,
            fieldset[disabled] .btn-primary:focus,
            .btn-primary.disabled:active,
            .btn-primary[disabled]:active,
            fieldset[disabled] .btn-primary:active,
            .btn-primary.disabled.active,
            .btn-primary[disabled].active,
            fieldset[disabled] .btn-primary.active {
                background-color: #72968f;
                border-color: #668982;
            }
            .btn-primary .badge {
                color: #72968f;
                background-color: #ffffff;
            }
        </style>
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
                 $type="CHAUFFEUR";
                 $query="select * from users where actif = 1 and type='".$type."'";
                 $result=mysqli_query($link,$query);
                 $obj= mysqli_fetch_object($result);
                 $name = $obj->name;
                 echo "<a style='outline: none;text-decoration: none;font-size:19px;font-weight:bold;color:black;background:#F2F2F2;width:90%;margin-left:; margin-bottom: 50px;padding-top:10px;' href='profile.php'> $name </a>";

                 ?>
                 </div>
                   
                    <li class="active">
                    <a style="margin-top:20%" href="m.php">Accueil</a>
                    </li>
                    <li><a href="collectes.php">Mes Livraisons</a></li>
                 <li><a href="activites.php">Mes Activités</a></li>
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

                        
                            <h2 align="center" style="">COLLECTE ET LIVRAISON</h2>
                        <?php 
                        
                        echo '<h2 align="center" style="padding-bottom:5%">'.$date = date('Y-m-d').'</h2>';
                       
                if($date = date('N') == 4){ //  == 4   COLLECTE
                    
                    $link=mysqli_connect("localhost","root","","washit") or die("<p>Connection impossible : ".mysql_error(). "</p>") ; 
                    $type="CHAUFFEUR";
                    $query="select * from users where actif = 1 and type='".$type."'";
                    $result=mysqli_query($link,$query);
                    $obj= mysqli_fetch_object($result);
                    $name = $obj->username;

                    

                    $query4="select COUNT(*) as existe from commandes where (dateCol = curdate() or dateLiv = curdate()) and (collecte=0) and cmdsupp=0";
                    $result4=mysqli_query($link,$query4);
                    $obj4= mysqli_fetch_object($result4);
                    $existe = $obj4->existe;
                    if($existe != 0)
                    {
                        

                        echo "<div id='c1' style='font-weight: bold;margin-left:10%;float: left;width: 30%;justify-content: center;align-items: center;padding-left:5% '> ADRESSE </div>";
                        echo "<div id='c2' style='font-weight: bold;float: left;width: 30%;justify-content: center;align-items: center; padding-left:5%;'> DATE ET HEURE </div>";
                        echo "<div id='c3' style='font-weight: bold;float: left;width: 30%;justify-content: center;align-items: center; padding-left:7%;'> ITINERAIRE </div>";
                        
                        $query1="select count(*) as nbr, adresse FROM commandes,cites where adresse = nom and (dateCol = curdate() or dateLiv = curdate()) and (adresse = 'Bab Ezzouar 05' or adresse = 'Bouraoui Amar' or adresse = 'EL-ALIA' or adresse = '19 Mai 1956') and (collecte=0) and cmdsupp=0 group by(adresse) order by(cites.ordre) ASC";
                        $result1=mysqli_query($link,$query1);
                        while($row=$result1->fetch_assoc())
                        {
                     
                                $adr = $row['adresse'];
                                echo "<div class='row' style='width:100%; margin-top:1%'>";
                                    echo "<div style='display:inline'>"; 
                                        echo "<p align='center' style='color:black;font-size:15px;font-weight: bold;float: left;width: 30%; padding-top:15px;margin-left:6%;padding-bottom:18px;background-color:white; margin-top:2% '>CITE UNIVERSITAIRE <br>".$row['adresse']."</p>";
                                        echo "<p align='center' style='color:black;font-size:15px;font-weight: bold;float: left;width: 30%; padding-top:25px;padding-left:5%;padding-bottom:33px;background-color:white; margin-top:2% '> 20".$date = date('y-m-d')."   20:00 - 20:30 </p>";
                                        echo "<div align='center' style='color:black;font-size:15px;font-weight: bold;float: left;width: 30%; padding-top:25px;padding-left:5%;padding-bottom:27px;background-color:white; margin-top:2%'> <button style='background-color:#78B3DC; border:0' class='btn btn-primary' id='btn' name='btn' onClick='affichergoogle(\"".$adr."\")'> <!--<img style='width:130%; padding-left:0' src='assets/img/route.jpg'> --> ROUTE </button> </div>";
                                    echo "</div>";
                                echo "</div>";
                                if($adr == "Bab Ezzouar 05")
                                {
                                    echo "<div id='bab' align='center' style='display:none;width:50%;margin-left:25%;height:300px'> 
                                   
                                        <iframe style='width:100%;border:0' src='https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d25585.60688736885!2d3.1681523888895016!3d36.71773696870506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m5!1s0x128e522500756793%3A0xc71ca678de248b93!2sResidence+Universitaire+Bab+Ezzouar+5%2C+Bab+Ezzouar!3m2!1d36.7101652!2d3.1704334!4m0!5e0!3m2!1sfr!2sdz!4v1560356627770!5m2!1sfr!2sdz'  height='80%' frameborder='0' allowfullscreen></iframe> 
                                     <br>
                                    
                                        <button style='background-color:#78B3DC;margin-top:265px;margin-left:-280px;border:0; hover:red' class='btn btn-primary' id='btn' name='btn' onClick='afficherCmd(\"".$adr."\")'> JE SUIS ARRIVE </button>
                                  
                                    </div>";
                                    
                                }
                                if($adr == "Bouraoui Amar")
                                {
                                    echo "<div id='Bouraoui-Amar' align='center' style='display:none;width:50%;margin-left:25%;height:300px'> 
                                    <iframe style='width:100%;border:0' src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d12793.62926294192!2d3.152495669605231!3d36.712777780940826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x128e522500756793%3A0xc71ca678de248b93!2sResidence+Universitaire+Bab+Ezzouar+5%2C+Bab+Ezzouar!3m2!1d36.7101652!2d3.1704334!4m5!1s0x128e5241bca30407%3A0xef492c9b35482f92!2sR%C3%A9sidence+Universitaire+Bouraoui+Amar%2C+Oued+Smar!3m2!1d36.717073899999995!2d3.1544372999999997!5e0!3m2!1sfr!2sdz!4v1560357028305!5m2!1sfr!2sdz' height='80%' frameborder='0' allowfullscreen></iframe>
                                        <br>
                                    
                                        <button style='background-color:#78B3DC;margin-top:265px;margin-left:-280px;border:0' class='btn btn-primary' id='btn' name='btn' onClick='afficherCmd(\"".$adr."\")'> JE SUIS ARRIVE </button>
                                    </div>"; 
                                }
                                if($adr == "EL-ALIA")
                                {
                                echo "<div id='EL-ALIA' align='center' style='display:none;width:50%; margin-left:25%;height:300px'> 
                            
                                <iframe style='width:100%;border:0' src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d102364.82896538767!2d2.9887731384888063!3d36.70091908677795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x128faff060f45b37%3A0xf5b8f9471283f020!2sOuled+Fayet!3m2!1d36.7295502!2d2.9425698!4m5!1s0x128e5223ee83ff3b%3A0xb897d460408de375!2sR%C3%A9sidence+Universitaire+El+Alia%2C+Bab+Ezzouar!3m2!1d36.7135709!2d3.1723179999999997!5e0!3m2!1sfr!2sdz!4v1560194884886!5m2!1sfr!2sdz'  height='80%' frameborder='0' allowfullscreen></iframe>
                                    <br>
                                    
                                    <button style='background-color:#78B3DC;margin-top:265px;margin-left:-280px;border:0' class='btn btn-primary' id='btn' name='btn' onClick='afficherCmd(\"".$adr."\")'> JE SUIS ARRIVE </button>
                                    </div>";
                                }
                                if($adr == "19 Mai 1956")
                                {
                                echo "<div id='19-Mai-1956' align='center' style='display:none;width:50%;margin-left:25%;height:300px'> 
                            
                                <iframe style='width:100%;border:0' src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d4291.87003734316!2d3.1679744462763026!3d36.71250190409381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x128e5223ee83ff3b%3A0xb897d460408de375!2sR%C3%A9sidence+Universitaire+El+Alia%2C+Bab+Ezzouar!3m2!1d36.7135709!2d3.1723179999999997!4m5!1s0x128e522500756793%3A0xc71ca678de248b93!2sResidence+Universitaire+Bab+Ezzouar+5%2C+Bab+Ezzouar!3m2!1d36.7101652!2d3.1704334!5e0!3m2!1sfr!2sdz!4v1560356323937!5m2!1sfr!2sdz' height='80%' frameborder='0' allowfullscreen></iframe>
                                    <br>
                                    
                                    <button style='background-color:#78B3DC;margin-top:265px;margin-left:-280px;border:0' class='btn btn-primary' id='btn' name='btn' onClick='afficherCmd(\"".$adr."\")'> JE SUIS ARRIVE </button>
                                    </div>";
                                } 
                            }
                            
                        }
                        echo "<div class='row' id='lav' style='width:100%;margin-left:15%; margin-top:2%'>";
                                    echo "<div style='display:inline'>"; 
                                        echo "<p align='center' style='color:black;font-size:15px;font-weight: bold;float: left;width: 30%; padding-top:15px;margin-left:6%;padding-bottom:18px;background-color:white; margin-top:2% '>LAVERIE <br> INSAF </p>";
                                      
                                        
                                        echo "<div align='center' style='color:black;font-size:15px;font-weight: bold;float: left;width: 30%; padding-top:25px;padding-left:5%;padding-bottom:27px;background-color:white; margin-top:2%'> <button style='background-color:#78B3DC; border:0' class='btn btn-primary' id='btn' name='btn' onClick='afficherLav()'> <!--<img style='width:130%; padding-left:0' src='assets/img/route.jpg'> --> ROUTE </button> </div>";
                                    echo "</div>";
                            echo "</div>";
                           
                            echo "<div id='laverie' align='center' style='display:none;width:50%;margin-left:25%;height:300px'> 
                            
                                <iframe style='width:100%;border:0' src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d6396.1633970867!2d3.143855522346067!3d36.72059906969825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x128e5241cfe53d01%3A0xba4b2fba75c932d2!2sCit%C3%A9+Universitaire+BOURAOUI+Amar%2C+Oued+Smar!3m2!1d36.718039499999996!2d3.1547945!4m5!1s0x128e5265e1e6c01f%3A0x76c20573bcf2d259!2sRue+Said+GREFFON%2C+El-Harrach!3m2!1d36.7243022!2d3.1461823!5e0!3m2!1sfr!2sdz!4v1562625271214!5m2!1sfr!2sdz' height='80%' frameborder='0' allowfullscreen></iframe>
                                <br>
                                
                                <button style='background-color:#78B3DC;margin-top:265px;margin-left:-280px;border:0' class='btn btn-primary' id='btn' name='btn' onClick='cahcerLav()'> JE SUIS ARRIVE </button>
                            </div>";
                            
                            echo "<div class='row' id='depot' style='width:100%;margin-left:15%; ;margin-top:1%'>";
                                echo "<div style='display:inline'>"; 
                                    echo "<p align='center' style='color:black;font-size:15px;font-weight: bold;float: left;width: 30%; padding-top:15px;margin-left:6%;padding-bottom:18px;background-color:white; margin-top:2% '>DEPOT <br> OULED FAYET </p>";
                                   
                                    echo "<div align='center' style='color:black;font-size:15px;font-weight: bold;float: left;width: 30%; padding-top:25px;padding-left:5%;padding-bottom:27px;background-color:white; margin-top:2%'> <button style='background-color:#78B3DC; border:0' class='btn btn-primary' id='btn' name='btn' onClick='afficherDepot()'> <!--<img style='width:130%; padding-left:0' src='assets/img/route.jpg'> --> ROUTE </button> </div>";
                                echo "</div>";
                        
                        echo "</div>";
                        echo "<div id='dep' align='center' style='display:none;width:50%;margin-left:25%;height:300px'> 
                        
                            <iframe style='width:100%;border:0' src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d102323.67454713746!2d2.9735066488895288!3d36.73181071323627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x128e5265e1e6c01f%3A0x76c20573bcf2d259!2sRue+Said+GREFFON%2C+El-Harrach!3m2!1d36.7243022!2d3.1461823!4m5!1s0x128fafe2812be611%3A0xd45b1ee1f93f254f!2sOoredoo+Alg%C3%A9rie%2C+66+route+de+Ouled+Fayet%D8%8C+Ch%C3%A9raga+Algiers+16001!3m2!1d36.7450087!2d2.9499256999999997!5e0!3m2!1sfr!2sdz!4v1562625562299!5m2!1sfr!2sdz' height='80%' frameborder='0' allowfullscreen></iframe>
                            <br>
                            
                            <button style='background-color:#78B3DC;margin-top:265px;margin-left:-280px;border:0' class='btn btn-primary' id='btn' name='btn' onClick='cacherDepot()'> JE SUIS ARRIVE </button>
                        </div>";
                        
                } 

                if($date = date('N') == 6){ // == 6   LIVRAISON
                    
                    $link=mysqli_connect("localhost","root","","washit") or die("<p>Connection impossible : ".mysql_error(). "</p>") ; 
                    $type="CHAUFFEUR";
                    $query="select * from users where actif = 1 and type='".$type."'";
                    $result=mysqli_query($link,$query);
                    $obj= mysqli_fetch_object($result);
                    $name = $obj->username;

                    

                    $query4="select COUNT(*) as existe from commandes where (dateCol = curdate() or dateLiv = curdate()) and (collecte=1 and livre=0) and cmdsupp=0";
                    $result4=mysqli_query($link,$query4);
                    $obj4= mysqli_fetch_object($result4);
                    $existe = $obj4->existe;
                    if($existe != 0)
                    {
                        echo "<div class='row' id='lavL' style='width:100%;margin-left:15%; margin-top:2%'>";
                                    echo "<div style='display:inline'>"; 
                                        echo "<p align='center' style='color:black;font-size:15px;font-weight: bold;float: left;width: 30%; padding-top:15px;margin-left:6%;padding-bottom:18px;background-color:white; margin-top:2% '>LAVERIE <br> INSAF </p>";
                                      
                                        
                                        echo "<div align='center' style='color:black;font-size:15px;font-weight: bold;float: left;width: 30%; padding-top:25px;padding-left:5%;padding-bottom:27px;background-color:white; margin-top:2%'> <button style='background-color:#78B3DC; border:0' class='btn btn-primary' id='btn' name='btn' onClick='afficherLavL()'> <!--<img style='width:130%; padding-left:0' src='assets/img/route.jpg'> --> ROUTE </button> </div>";
                                    echo "</div>";
                            echo "</div>";
                           
                            echo "<div id='laverieL' align='center' style='display:none;width:50%;margin-left:25%;height:300px'> 
                            
                                <iframe style='width:100%;border:0' src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d102320.94815409361!2d2.9784202687201846!3d36.733856429720554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x128faff060f45b37%3A0xf5b8f9471283f020!2sOuled+Fayet!3m2!1d36.7295502!2d2.9425698!4m5!1s0x128e5265e1e6c01f%3A0x76c20573bcf2d259!2sRue+Said+GREFFON%2C+El-Harrach!3m2!1d36.7243022!2d3.1461823!5e0!3m2!1sfr!2sdz!4v1562673886792!5m2!1sfr!2sdz' height='80%' frameborder='0' allowfullscreen></iframe>
                                <br>
                                
                                <button style='background-color:#78B3DC;margin-top:265px;margin-left:-280px;border:0' class='btn btn-primary' id='btn' name='btn' onClick='cahcerLavL()'> JE SUIS ARRIVE </button>
                            </div>";
                            
                           
                        
                        

                        
                        $query1="select count(*) as nbr, adresse FROM commandes,cites where adresse = nom and (dateCol = curdate() or dateLiv = curdate()) and (adresse = 'Bab Ezzouar 05' or adresse = 'Bouraoui Amar' or adresse = 'EL-ALIA' or adresse = '19 Mai 1956') and (collecte=1 and livre=0) and cmdsupp=0 group by(adresse) order by(cites.ordre) DESC";
                        $result1=mysqli_query($link,$query1);
                        while($row=$result1->fetch_assoc())
                        {
                     
                                $adr = $row['adresse'];
                                echo "<div class='row' style='width:100%; margin-top:1%'>";
                                    echo "<div style='display:inline'>"; 
                                        echo "<p align='center' style='color:black;font-size:15px;font-weight: bold;float: left;width: 30%; padding-top:15px;margin-left:6%;padding-bottom:18px;background-color:white; margin-top:2% '>CITE UNIVERSITAIRE <br>".$row['adresse']."</p>";
                                        echo "<p align='center' style='color:black;font-size:15px;font-weight: bold;float: left;width: 30%; padding-top:25px;padding-left:5%;padding-bottom:33px;background-color:white; margin-top:2% '> 20".$date = date('y-m-d')."   20:00 - 20:30 </p>";
                                        echo "<div align='center' style='color:black;font-size:15px;font-weight: bold;float: left;width: 30%; padding-top:25px;padding-left:5%;padding-bottom:27px;background-color:white; margin-top:2%'> <button style='background-color:#78B3DC; border:0' class='btn btn-primary' id='btn' name='btn' onClick='affichergoogleL(\"".$adr."\")'> <!--<img style='width:130%; padding-left:0' src='assets/img/route.jpg'> --> ROUTE </button> </div>";
                                    echo "</div>";
                                echo "</div>";
                                if($adr == "Bab Ezzouar 05")
                                {
                                    echo "<div id='babL' align='center' style='display:none;width:50%;margin-left:25%;height:300px'> 
                                   
                                        <iframe style='width:100%;border:0' src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d12793.644765321304!2d3.1507131696051673!3d36.712684680961985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x128e5241bca30407%3A0xef492c9b35482f92!2sR%C3%A9sidence+Universitaire+Bouraoui+Amar%2C+Oued+Smar!3m2!1d36.717073899999995!2d3.1544372999999997!4m5!1s0x128e522500756793%3A0xc71ca678de248b93!2sResidence+Universitaire+Bab+Ezzouar+5%2C+Bab+Ezzouar!3m2!1d36.7101652!2d3.1704334!5e0!3m2!1sfr!2sdz!4v1560357142659!5m2!1sfr!2sdz'  height='80%' frameborder='0' allowfullscreen></iframe> 
                                     <br>
                                    
                                        <button style='background-color:#78B3DC;margin-top:265px;margin-left:-280px;border:0' class='btn btn-primary' id='btn' name='btn' onClick='afficherCmd(\"".$adr."\")'> JE SUIS ARRIVE </button>
                                  
                                    </div>";
                                    
                                }
                                if($adr == "Bouraoui Amar")
                                {
                                    echo "<div id='Bouraoui-AmarL' align='center' style='display:none;width:50%;margin-left:25%;height:300px'> 
                                    <iframe style='width:100%;border:0' src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d6396.1661492101775!2d3.145559623594873!3d36.72056601985992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x128e5265e1e6c01f%3A0x76c20573bcf2d259!2sRue+Said+GREFFON%2C+El-Harrach!3m2!1d36.7243022!2d3.1461823!4m5!1s0x128e5241cfe53d01%3A0xba4b2fba75c932d2!2sCit%C3%A9+Universitaire+BOURAOUI+Amar%2C+Oued+Smar!3m2!1d36.718039499999996!2d3.1547945!5e0!3m2!1sfr!2sdz!4v1562672903772!5m2!1sfr!2sdz' height='80%' frameborder='0' allowfullscreen></iframe>
                                        <br>
                                    
                                        <button style='background-color:#78B3DC;margin-top:265px;margin-left:-280px;border:0' class='btn btn-primary' id='btn' name='btn' onClick='afficherCmd(\"".$adr."\")'> JE SUIS ARRIVE </button>
                                    </div>"; 
                                }
                                if($adr == "EL-ALIA")
                                {
                                echo "<div id='EL-ALIAL' align='center' style='display:none;width:50%; margin-left:25%;height:300px'> 
                            
                                <iframe style='width:100%;border:0' src='https://www.google.com/maps/embed?pb=!1m24!1m8!1m3!1d3198.430743226577!2d3.1704698!3d36.712215!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x128e522500756793%3A0xc71ca678de248b93!2sResidence+Universitaire+Bab+Ezzouar+5%2C+Bab+Ezzouar!3m2!1d36.7101652!2d3.1704334!4m5!1s0x128e5223ee83ff3b%3A0xb897d460408de375!2sR%C3%A9sidence+Universitaire+El+Alia%2C+Bab+Ezzouar!3m2!1d36.7135709!2d3.1723179999999997!5e0!3m2!1sfr!2sdz!4v1560357586557!5m2!1sfr!2sdz'  height='80%' frameborder='0' allowfullscreen></iframe>
                                    <br>
                                    
                                    <button style='background-color:#78B3DC;margin-top:265px;margin-left:-280px;border:0' class='btn btn-primary' id='btn' name='btn' onClick='afficherCmd(\"".$adr."\")'> JE SUIS ARRIVE </button>
                                    </div>";
                                }
                                if($adr == "19 Mai 1956")
                                {
                                echo "<div id='19-Mai-1956L' align='center' style='display:none;width:50%;margin-left:25%;height:300px'> 
                            
                                <iframe style='width:100%;border:0' src='https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d25585.60688736885!2d3.1681523888895016!3d36.71773696870506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m5!1s0x128e522500756793%3A0xc71ca678de248b93!2sResidence+Universitaire+Bab+Ezzouar+5%2C+Bab+Ezzouar!3m2!1d36.7101652!2d3.1704334!4m0!5e0!3m2!1sfr!2sdz!4v1560356627770!5m2!1sfr!2sdz'  height='80%' frameborder='0' allowfullscreen></iframe>
                                    <br>
                                    
                                    <button style='background-color:#78B3DC;margin-top:265px;margin-left:-280px;border:0' class='btn btn-primary' id='btn' name='btn' onClick='afficherCmd(\"".$adr."\")'> JE SUIS ARRIVE </button>
                                    </div>";
                                } 
                            }
                           
                        }
                        echo "<div class='row' id='depotL' style='width:100%;margin-left:15%; ;margin-top:1%'>";
                        echo "<div style='display:inline'>"; 
                            echo "<p align='center' style='color:black;font-size:15px;font-weight: bold;float: left;width: 30%; padding-top:15px;margin-left:6%;padding-bottom:18px;background-color:white; margin-top:2% '>DEPOT <br> OULED FAYET </p>";
                           
                            echo "<div align='center' style='color:black;font-size:15px;font-weight: bold;float: left;width: 30%; padding-top:25px;padding-left:5%;padding-bottom:27px;background-color:white; margin-top:2%'> <button style='background-color:#78B3DC; border:0' class='btn btn-primary' id='btn' name='btn' onClick='afficherDepotL()'> <!--<img style='width:130%; padding-left:0' src='assets/img/route.jpg'> --> ROUTE </button> </div>";
                        echo "</div>";
                
                echo "</div>";
                echo "<div id='depL' align='center' style='display:none;width:50%;margin-left:25%;height:300px'> 
                
                    <iframe style='width:100%;border:0' src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d102362.79782994396!2d2.983744417510256!3d36.702444236410884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x128e522144da58d7%3A0xa8cca29967323267!2sCit%C3%A9+Universitaire+El+alia+CUB2%2C+Bab+Ezzouar!3m2!1d36.7137356!2d3.1736185!4m5!1s0x128fb01d6e555555%3A0x4bc484ff3cdcdce5!2sOoredoo+Ouled+Fayet%2C+Ch%C3%A9raga!3m2!1d36.745487!2d2.9499847999999997!5e0!3m2!1sfr!2sdz!4v1562674202197!5m2!1sfr!2sdz' height='80%' frameborder='0' allowfullscreen></iframe>
                    <br>
                    
                    <button style='background-color:#78B3DC;margin-top:265px;margin-left:-280px;border:0' class='btn btn-primary' id='btn' name='btn' onClick='cacherDepotL()'> JE SUIS ARRIVE </button>
                </div>";
                }
                

                ?>

        <script type="text/javascript">
            function afficherLav()
            {
                if(document.getElementById('laverie').style.display="none")
                {
                    document.getElementById('laverie').style.display="flex";
                    document.getElementById('bab').style.display="none";
                    document.getElementById('Bouraoui-Amar').style.display="none";
                    document.getElementById('EL-ALIA').style.display="none";
                    document.getElementById('19-Mai-1956').style.display="none";
                    document.getElementById('dep').style.display="none";
                }
            }
        </script>

            <script type="text/javascript">
            function cahcerLav()
            {
                document.getElementById('lav').style.display="none";
                
                document.getElementById('laverie').style.display="none";
                
            }
        </script>

            <script type="text/javascript">
            function afficherDepot()
            {
                if(document.getElementById('dep').style.display="none")
                {
                    document.getElementById('dep').style.display="flex";
                    document.getElementById('laverie').style.display="none";
                    document.getElementById('bab').style.display="none";
                    document.getElementById('Bouraoui-Amar').style.display="none";
                    document.getElementById('EL-ALIA').style.display="none";
                    document.getElementById('19-Mai-1956').style.display="none";
                }
            }
        </script>

        <script type="text/javascript">
            function cacherDepot()
            {
                document.getElementById('dep').style.display="none";
                
                document.getElementById('depot').style.display="none";
                
            }
        </script>

<script type="text/javascript">
            function afficherLavL()
            {
                if(document.getElementById('laverieL').style.display="none")
                {
                    document.getElementById('laverieL').style.display="flex";
                    document.getElementById('babL').style.display="none";
                    document.getElementById('Bouraoui-AmarL').style.display="none";
                    document.getElementById('EL-ALIAL').style.display="none";
                    document.getElementById('19-Mai-1956L').style.display="none";
                    document.getElementById('depL').style.display="none";
                }
            }
        </script>

            <script type="text/javascript">
            function cahcerLavL()
            {
                document.getElementById('lavL').style.display="none";
                
                document.getElementById('laverieL').style.display="none";
                
            }
        </script>

            <script type="text/javascript">
            function afficherDepotL()
            {
                if(document.getElementById('depL').style.display="none")
                {
                    document.getElementById('depL').style.display="flex";
                    document.getElementById('laverieL').style.display="none";
                    document.getElementById('babL').style.display="none";
                    document.getElementById('Bouraoui-AmarL').style.display="none";
                    document.getElementById('EL-ALIAL').style.display="none";
                    document.getElementById('19-Mai-1956L').style.display="none";
                }
            }
        </script>

        <script type="text/javascript">
            function cacherDepotL()
            {
                document.getElementById('depL').style.display="none";
                
                document.getElementById('depotL').style.display="none";
                
            }
        </script>


        <script type="text/javascript">
            function affichergoogle(z)
            {
                
                if(z == "Bab Ezzouar 05")
                {
                    
                    if(document.getElementById('bab').style.display="none")
                    {
                        document.getElementById('bab').style.display="flex";
                        document.getElementById('Bouraoui-Amar').style.display="none";
                        document.getElementById('EL-ALIA').style.display="none";
                        document.getElementById('19-Mai-1956').style.display="none";
                        document.getElementById('laverie').style.display="none";
                        document.getElementById('dep').style.display="none";
                    }
                    
                }

                if(z == "Bouraoui Amar")
                {
                
                    if(document.getElementById('Bouraoui-Amar').style.display="none")
                    {
                        document.getElementById('Bouraoui-Amar').style.display="flex";
                        document.getElementById('bab').style.display="none";
                        document.getElementById('EL-ALIA').style.display="none";
                        document.getElementById('19-Mai-1956').style.display="none";
                        document.getElementById('laverie').style.display="none";
                        document.getElementById('dep').style.display="none";
                    }
                }

                if(z == "EL-ALIA")
                {
                    if(document.getElementById('EL-ALIA').style.display="none")
                    {
                        document.getElementById('EL-ALIA').style.display="flex";
                        document.getElementById('bab').style.display="none";
                        document.getElementById('Bouraoui-Amar').style.display="none";
                        document.getElementById('19-Mai-1956').style.display="none";
                        document.getElementById('laverie').style.display="none";
                        document.getElementById('dep').style.display="none";
                    }
                }

                if(z == "19 Mai 1956")
                {
                    if(document.getElementById('19-Mai-1956').style.display="none")
                    {
                        document.getElementById('19-Mai-1956').style.display="flex";
                        document.getElementById('bab').style.display="none";
                        document.getElementById('Bouraoui-Amar').style.display="none";
                        document.getElementById('EL-ALIA').style.display="none";
                        document.getElementById('laverie').style.display="none";
                        document.getElementById('dep').style.display="none";
                    }
                }

                if(z == "lav")
                {
                    
                    if(document.getElementById('laverie').style.display="none")
                    {
                        alert("hello");
                        document.getElementById('laverie').style.display="none";
                        document.getElementById('19-Mai-1956').style.display="none";
                        document.getElementById('bab').style.display="none";
                        document.getElementById('Bouraoui-Amar').style.display="flex";
                        document.getElementById('EL-ALIA').style.display="none"; 
                        document.getElementById('dep').style.display="none";
                    }
                }

                if(z == "depot")
                {
                    if(document.getElementById('dep').style.display="none")
                    {
                        document.getElementById('dep').style.display="felx";
                        document.getElementById('19-Mai-1956').style.display="none";
                        document.getElementById('bab').style.display="none";
                        document.getElementById('Bouraoui-Amar').style.display="none";
                        document.getElementById('EL-ALIA').style.display="none"; 
                        document.getElementById('laverie').style.display="none";
                    }
                }
               
            }
        </script>

        <script type="text/javascript">
            function affichergoogleL(z)
            {
                
                if(z == "Bab Ezzouar 05")
                {
                    
                    if(document.getElementById('babL').style.display="none")
                    {
                        document.getElementById('babL').style.display="flex";
                        document.getElementById('Bouraoui-AmarL').style.display="none";
                        document.getElementById('EL-ALIAL').style.display="none";
                        document.getElementById('19-Mai-1956L').style.display="none";
                    }
                    
                }

                if(z == "Bouraoui Amar")
                {
                
                    if(document.getElementById('Bouraoui-AmarL').style.display="none")
                    {
                        document.getElementById('Bouraoui-AmarL').style.display="flex";
                        document.getElementById('babL').style.display="none";
                        document.getElementById('EL-ALIAL').style.display="none";
                        document.getElementById('19-Mai-1956L').style.display="none";
                    }
                }

                if(z == "EL-ALIA")
                {
                    if(document.getElementById('EL-ALIAL').style.display="none")
                    {
                        document.getElementById('EL-ALIAL').style.display="flex";
                        document.getElementById('babL').style.display="none";
                        document.getElementById('Bouraoui-AmarL').style.display="none";
                        document.getElementById('19-Mai-1956L').style.display="none";
                    }
                }

                if(z == "19 Mai 1956")
                {
                    if(document.getElementById('19-Mai-1956L').style.display="none")
                    {
                        document.getElementById('19-Mai-1956L').style.display="flex";
                        document.getElementById('babL').style.display="none";
                        document.getElementById('Bouraoui-AmarL').style.display="none";
                        document.getElementById('EL-ALIAL').style.display="none";
                    }
                }
               
            }
        </script>

        <script type="text/javascript">

        function afficherCmd(z)
        { 
          if(z == "Bab Ezzouar 05")
          {
            document.location.href = "bab-ezzouar-5.php";
          }  
          if(z == "Bouraoui Amar")
          {
            document.location.href = "bouraoui-amar.php";
          }
          if(z == "EL-ALIA")
          {
            document.location.href = "el-alia.php";
          }
          if(z == "19 Mai 1956")
          {
            document.location.href = "19-mai.php";
          }
            
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
    </body>
</html>
