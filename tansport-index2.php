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
                    <a style="margin-top:20%" href="tansport-index2.php">Accueil</a>
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

                    $condition = 1;

                    $query4="select COUNT(*) as existe from commandes where (dateCol = curdate()) and (collecte=0) ";
                    $result4=mysqli_query($link,$query4);
                    $obj4= mysqli_fetch_object($result4);
                    $existe = $obj4->existe;
                    if($existe != 0)
                    {
                        

                        echo "<div id='c1' style='font-weight: bold;margin-left:10%;float: left;width: 30%;justify-content: center;align-items: center;padding-left:5% '> ADRESSE </div>";
                        echo "<div id='c2' style='font-weight: bold;float: left;width: 30%;justify-content: center;align-items: center; padding-left:5%;'> DATE ET HEURE </div>";
                        echo "<div id='c3' style='font-weight: bold;float: left;width: 30%;justify-content: center;align-items: center; padding-left:7%;'> ITINERAIRE </div>";
                        
                        $query1="select count(*) as nbr, adresse FROM commandes,cites where adresse = nom and (dateCol = curdate()) and (adresse = 'Baya Hocine' or adresse = 'Dergana' or adresse = 'Abdelkader Belarbi' or adresse = 'Bab Ezzouar 03') and (collecte=0) group by(adresse) order by(cites.ordre) ASC";
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
                                if($adr == "Baya Hocine") 
                                {
                                    echo "<div id='Baya-Hocine' align='center' style='display:none;width:50%;margin-left:25%;height:300px'> 
                            
                                    <iframe style='width:100%;border:0' src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d102364.82896538767!2d2.996112438488812!3d36.70091908677795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x128faff060f45b37%3A0xf5b8f9471283f020!2sOuled+Fayet!3m2!1d36.7295502!2d2.9425698!4m5!1s0x128e51923b58c5fd%3A0x7df4b379a13f7184!2sR%C3%A9sidence+Universitaires+Baya+Hocine%2C+Bab+Ezzouar!3m2!1d36.7131714!2d3.1895837!5e0!3m2!1sfr!2sdz!4v1560195054897!5m2!1sfr!2sdz'  height='80%' frameborder='0' allowfullscreen></iframe>
                                        
                                        <button style='background-color:#78B3DC;margin-top:265px;margin-left:-280px;border:0; hover:red' class='btn btn-primary' id='btn' name='btn' onClick='afficherCmd(\"".$adr."\")'> JE SUIS ARRIVE </button>
                                    </div>";
                                }
                                if($adr == "Dergana")
                                {
                                echo "<div id='Dergana' align='center' style='display:none;width:50%;margin-left:25%;height:300px'> 
                            
                                <iframe style='width:100%;border:0' src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d51155.38093562286!2d3.1885828244223644!3d36.741498719742324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x128e51923b58c5fd%3A0x7df4b379a13f7184!2sR%C3%A9sidence+Universitaires+Baya+Hocine%2C+Bab+Ezzouar!3m2!1d36.7131714!2d3.1895837!4m5!1s0x128e4f87fe699b09%3A0xa2a5f07c47def80!2sR%C3%A9sidence+universitaire+Dergana%2C+Bordj+El+Kiffan!3m2!1d36.769914899999996!2d3.2581187!5e0!3m2!1sfr!2sdz!4v1560373833678!5m2!1sfr!2sdz'  height='80%' frameborder='0' allowfullscreen></iframe>

                                    <button style='background-color:#78B3DC;margin-top:265px;margin-left:-280px;border:0; hover:red' class='btn btn-primary' id='btn' name='btn' onClick='afficherCmd(\"".$adr."\")'> JE SUIS ARRIVE </button>
                                </div>";
                                }
                                if($adr == "Abdelkader Belarbi")
                                {
                                echo "<div id='Abdelkader-Belarbi' align='center' style='display:none;width:50%; margin-left:25%;height:300px'> 
                            
                                <iframe style='width:100%;border:0' src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d51154.987197261726!2d3.1857685244278593!3d36.742089469710926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x128e4f87fe699b09%3A0xa2a5f07c47def80!2sR%C3%A9sidence+universitaire+Dergana%2C+Bordj+El+Kiffan!3m2!1d36.769914899999996!2d3.2581187!4m5!1s0x128e51f2060f814f%3A0xa47066982a52be5b!2sCit%C3%A9+Universitaire+Bab+Ezzouar+3%2C+Bab+Ezzouar+16111!3m2!1d36.7225943!2d3.1873804999999997!5e0!3m2!1sfr!2sdz!4v1560373947250!5m2!1sfr!2sdz'  height='80%' frameborder='0' allowfullscreen></iframe>

                                    <button style='background-color:#78B3DC;margin-top:265px;margin-left:-280px;border:0; hover:red' class='btn btn-primary' id='btn' name='btn' onClick='afficherCmd(\"".$adr."\")'> JE SUIS ARRIVE </button>
                                </div>";
                                }
                                if($adr == "Bab Ezzouar 03")
                                {
                                echo "<div id='Bab-Ezzouar-03' align='center' style='display:none;width:50%;margin-left:25%;height:300px'> 
                            
                                <iframe style='width:100%;border:0' src='https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d51154.987197261726!2d3.1857685244278593!3d36.742089469710926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x128e51f2060f814f%3A0xa47066982a52be5b!2sCit%C3%A9+Universitaire+Bab+Ezzouar+3%2C+Bab+Ezzouar+16111!3m2!1d36.7225943!2d3.1873804999999997!5e0!3m2!1sfr!2sdz!4v1560374111892!5m2!1sfr!2sdz'  height='80%' frameborder='0' allowfullscreen></iframe>

                                    <button style='background-color:#78B3DC;margin-top:265px;margin-left:-280px;border:0; hover:red' class='btn btn-primary' id='btn' name='btn' onClick='afficherCmd(\"".$adr."\")'> JE SUIS ARRIVE </button>
                                </div>";
                                }
                        
                            }
                        }
                        
                    }

                    if($date = date('N') == 6){ //  == 6   LIVRAISON

               
                        $link=mysqli_connect("localhost","root","","washit") or die("<p>Connection impossible : ".mysql_error(). "</p>") ; 
                        $type="CHAUFFEUR";
                        $query="select * from users where actif = 1 and type='".$type."'";
                        $result=mysqli_query($link,$query);
                        $obj= mysqli_fetch_object($result);
                        $name = $obj->username;
    
                        $condition = 1;
    
                        $query4="select COUNT(*) as existe from commandes where (dateLiv = curdate()) and (collecte=1 and livre=0)";
                        $result4=mysqli_query($link,$query4);
                        $obj4= mysqli_fetch_object($result4);
                        $existe = $obj4->existe;
                        if($existe != 0)
                        {
                            
    
                            echo "<div id='c1' style='font-weight: bold;margin-left:10%;float: left;width: 30%;justify-content: center;align-items: center;padding-left:5% '> ADRESSE </div>";
                            echo "<div id='c2' style='font-weight: bold;float: left;width: 30%;justify-content: center;align-items: center; padding-left:5%;'> DATE ET HEURE </div>";
                            echo "<div id='c3' style='font-weight: bold;float: left;width: 30%;justify-content: center;align-items: center; padding-left:7%;'> ITINERAIRE </div>";
                            
                            $query1="select count(*) as nbr, adresse FROM commandes,cites where adresse = nom and (dateLiv = curdate()) and (adresse = 'Baya Hocine' or adresse = 'Dergana' or adresse = 'Abdelkader Belarbi' or adresse = 'Bab Ezzouar 03') and (collecte=1 and livre=0) group by(adresse) order by(cites.ordre) DESC";
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
                                    if($adr == "Baya Hocine")
                                    {
                                        echo "<div id='Baya-HocineL' align='center' style='display:none;width:50%;margin-left:25%;height:300px'> 
                                
                                        <iframe style='width:100%;border:0' src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d51152.59769029863!2d3.1882574744611616!3d36.74567441952063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x128e4f87fe699b09%3A0xa2a5f07c47def80!2sR%C3%A9sidence+universitaire+Dergana%2C+Bordj+El+Kiffan!3m2!1d36.769914899999996!2d3.2581187!4m5!1s0x128e51923b58c5fd%3A0x7df4b379a13f7184!2sR%C3%A9sidence+Universitaires+Baya+Hocine%2C+Bab+Ezzouar!3m2!1d36.7131714!2d3.1895837!5e0!3m2!1sfr!2sdz!4v1560374423817!5m2!1sfr!2sdz'  height='80%' frameborder='0' allowfullscreen></iframe>
                                            
                                            <button style='background-color:#78B3DC;margin-top:265px;margin-left:-280px;border:0; hover:red' class='btn btn-primary' id='btn' name='btn' onClick='afficherCmd(\"".$adr."\")'> JE SUIS ARRIVE </button>
                                        </div>";
                                    }
                                    if($adr == "Dergana")
                                    {
                                    echo "<div id='DerganaL' align='center' style='display:none;width:50%;margin-left:25%;height:300px'> 
                                
                                    <iframe style='width:100%;border:0' src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d51155.38093562286!2d3.1870744244223643!3d36.741498719742324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x128e51f2060f814f%3A0xa47066982a52be5b!2sCit%C3%A9+Universitaire+Bab+Ezzouar+3%2C+Bab+Ezzouar+16111!3m2!1d36.7225943!2d3.1873804999999997!4m5!1s0x128e4f87fe699b09%3A0xa2a5f07c47def80!2sR%C3%A9sidence+universitaire+Dergana%2C+Bordj+El+Kiffan!3m2!1d36.769914899999996!2d3.2581187!5e0!3m2!1sfr!2sdz!4v1560374356085!5m2!1sfr!2sdz'  height='80%' frameborder='0' allowfullscreen></iframe>
    
                                        <button style='background-color:#78B3DC;margin-top:265px;margin-left:-280px;border:0; hover:red' class='btn btn-primary' id='btn' name='btn' onClick='afficherCmd(\"".$adr."\")'> JE SUIS ARRIVE </button>
                                    </div>";
                                    }
                                    if($adr == "Abdelkader Belarbi")
                                    {
                                    echo "<div id='Abdelkader-BelarbiL' align='center' style='display:none;width:50%; margin-left:25%;height:300px'> 
                                
                                    <iframe style='width:100%;border:0' src='https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d51154.987197261726!2d3.1857685244278593!3d36.742089469710926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x128e51f2060f814f%3A0xa47066982a52be5b!2sCit%C3%A9+Universitaire+Bab+Ezzouar+3%2C+Bab+Ezzouar+16111!3m2!1d36.7225943!2d3.1873804999999997!5e0!3m2!1sfr!2sdz!4v1560374111892!5m2!1sfr!2sdz'  height='80%' frameborder='0' allowfullscreen></iframe>
    
                                        <button style='background-color:#78B3DC;margin-top:265px;margin-left:-280px;border:0; hover:red' class='btn btn-primary' id='btn' name='btn' onClick='afficherCmd(\"".$adr."\")'> JE SUIS ARRIVE </button>
                                    </div>";
                                    }
                                    if($adr == "Bab Ezzouar 03")
                                    {
                                    echo "<div id='Bab-Ezzouar-03L' align='center' style='display:none;width:50%;margin-left:25%;height:300px'> 
                                
                                    <iframe style='width:100%;border:0' src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d94674.50261586979!2d3.009359219673337!3d36.72317801313112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x128faff060f45b37%3A0xf5b8f9471283f020!2sOuled+Fayet!3m2!1d36.7295502!2d2.9425698!4m5!1s0x128e51f2060f814f%3A0xa47066982a52be5b!2sCit%C3%A9+Universitaire+Bab+Ezzouar+3%2C+Bab+Ezzouar+16111!3m2!1d36.7225943!2d3.1873804999999997!5e0!3m2!1sfr!2sdz!4v1560195617292!5m2!1sfr!2sdz'  height='80%' frameborder='0' allowfullscreen></iframe>
    
                                        <button style='background-color:#78B3DC;margin-top:265px;margin-left:-280px;border:0; hover:red' class='btn btn-primary' id='btn' name='btn' onClick='afficherCmd(\"".$adr."\")'> JE SUIS ARRIVE </button>
                                    </div>";
                                    }
                            
                                }
                            }
                            
                        }
                    ?>

        <script type="text/javascript">
            function affichergoogle(z)
            {
    
                if(z == "Baya Hocine")
                {
                    if(document.getElementById('Baya-Hocine').style.display="none")
                    {
                        document.getElementById('Baya-Hocine').style.display="flex";
                        document.getElementById('Bab-Ezzouar-03').style.display="none";
                        document.getElementById('Abdelkader-Belarbi').style.display="none";
                        document.getElementById('Dergana').style.display="none";
                    }
                 
                }

                if(z == "Bab Ezzouar 03")
                {
                    if(document.getElementById('Bab-Ezzouar-03').style.display="none")
                    {
                        document.getElementById('Bab-Ezzouar-03').style.display="flex";
                        document.getElementById('Baya-Hocine').style.display="none";
                        document.getElementById('Abdelkader-Belarbi').style.display="none";
                        document.getElementById('Dergana').style.display="none";
                    }
                 
                }

                if(z == "Abdelkader Belarbi")
                {
                    if(document.getElementById('Abdelkader-Belarbi').style.display="none")
                    {
                        document.getElementById('Abdelkader-Belarbi').style.display="flex";
                        document.getElementById('Baya-Hocine').style.display="none";
                        document.getElementById('Bab-Ezzouar-03').style.display="none";
                        document.getElementById('Dergana').style.display="none";
                    }
                 
                }

                if(z == "Dergana")
                {
                    if(document.getElementById('Dergana').style.display="none")
                    {
                        document.getElementById('Dergana').style.display="flex";
                        document.getElementById('Baya-Hocine').style.display="none";
                        document.getElementById('Bab-Ezzouar-03').style.display="none";
                        document.getElementById('Abdelkader-Belarbi').style.display="none";
                    }
                 
                }
               
            }
        </script>

        <script type="text/javascript">
            function affichergoogleL(z)
            {
    
                if(z == "Baya Hocine")
                {
                    if(document.getElementById('Baya-HocineL').style.display="none")
                    {
                        document.getElementById('Baya-HocineL').style.display="flex";
                        document.getElementById('Bab-Ezzouar-03L').style.display="none";
                        document.getElementById('Abdelkader-BelarbiL').style.display="none";
                        document.getElementById('DerganaL').style.display="none";
                    }
                 
                }

                if(z == "Bab Ezzouar 03")
                {
                    if(document.getElementById('Bab-Ezzouar-03L').style.display="none")
                    {
                        document.getElementById('Bab-Ezzouar-03L').style.display="flex";
                        document.getElementById('Baya-HocineL').style.display="none";
                        document.getElementById('Abdelkader-BelarbiL').style.display="none";
                        document.getElementById('DerganaL').style.display="none";
                    }
                 
                }

                if(z == "Abdelkader Belarbi")
                {
                    if(document.getElementById('Abdelkader-BelarbiL').style.display="none")
                    {
                        document.getElementById('Abdelkader-BelarbiL').style.display="flex";
                        document.getElementById('Baya-HocineL').style.display="none";
                        document.getElementById('Bab-Ezzouar-03L').style.display="none";
                        document.getElementById('DerganaL').style.display="none";
                    }
                 
                }

                if(z == "Dergana")
                {
                    if(document.getElementById('DerganaL').style.display="none")
                    {
                        document.getElementById('DerganaL').style.display="flex";
                        document.getElementById('Baya-HocineL').style.display="none";
                        document.getElementById('Bab-Ezzouar-03L').style.display="none";
                        document.getElementById('Abdelkader-BelarbiL').style.display="none";
                    }
                 
                }
               
            }
        </script>


        <script type="text/javascript">

        function afficherCmd(z)
        { 
          if(z == "Baya Hocine")
          {
            document.location.href = "baya-hocine.php";
          }  
          if(z == "Bab Ezzouar 03")
          {
            document.location.href = "bab-ezzouar-3.php";
          }
          if(z == "Abdelkader Belarbi")
          {
            document.location.href = "Abdelkader-Belarbi.php";
          }
          if(z == "Dergana")
          {
            document.location.href = "Dergana.php";
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
