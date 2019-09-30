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

                        
                            <h2 style="padding-left:35%; padding-bottom:5%">COLLECTE ET LIVRAISON</h2>
                        


                        
                    
                

                    <?php
                    $link=mysqli_connect("localhost","root","","washit") or die("<p>Connection impossible : ".mysql_error(). "</p>") ; 
                    
                    $query4="select COUNT(*) as existe from commandes where dateCol = curdate() or dateLiv = curdate()";
                    $result4=mysqli_query($link,$query4);
                    $obj4= mysqli_fetch_object($result4);
                    $existe = $obj4->existe;
                    if($existe != 0)
                    {
                        

                        echo "<div id='c1' style='font-weight: bold;margin-left:10%;float: left;width: 30%;justify-content: center;align-items: center;padding-left:5% '> ADRESSE </div>";
                        echo "<div id='c2' style='font-weight: bold;float: left;width: 30%;justify-content: center;align-items: center; padding-left:5%;'> DATE ET HEURE </div>";
                        echo "<div id='c3' style='font-weight: bold;float: left;width: 30%;justify-content: center;align-items: center; padding-left:7%;'> ITINERAIRE </div>";
                        
                        $query1="select count(*) as nbr, adresse FROM commandes WHERE dateCol = curdate() or dateLiv = curdate() group by(adresse)";
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
                        if($adr == "Bab Ezzouar 5")
                        {
                        echo "<div id='Bab-Ezzouar-5' align='center' style='display:none;width:50%; background-color:green;margin-left:25%;height:300px'> 
                            
                            <iframe style='width:100%;border:0' src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d102364.82896538767!2d2.986990638488819!3d36.70091908677795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x128faff060f45b37%3A0xf5b8f9471283f020!2sOuled+Fayet!3m2!1d36.7295502!2d2.9425698!4m5!1s0x128e522500756793%3A0xc71ca678de248b93!2sResidence+Universitaire+Bab+Ezzouar+5%2C+Bab+Ezzouar!3m2!1d36.7101652!2d3.1704334!5e0!3m2!1sfr!2sdz!4v1560025828765!5m2!1sfr!2sdz'  height='100%' frameborder='0' allowfullscreen></iframe>
                        </div>";
                        }
                        if($adr == "Bouraoui Amar")
                        {
                        echo "<div id='Bouraoui-Amar' align='center' style='display:none;width:50%; background-color:green;margin-left:25%;height:300px'> 
                             <iframe style='width:100%;border:0' src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d102364.82896538767!2d2.9784628884888082!3d36.70091908677795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x128faff060f45b37%3A0xf5b8f9471283f020!2sOuled+Fayet!3m2!1d36.7295502!2d2.9425698!4m5!1s0x128e5241bca30407%3A0xef492c9b35482f92!2sR%C3%A9sidence+Universitaire+Bouraoui+Amar%2C+Oued+Smar!3m2!1d36.717073899999995!2d3.1544372999999997!5e0!3m2!1sfr!2sdz!4v1560026026408!5m2!1sfr!2sdz' height='100%' frameborder='0' allowfullscreen></iframe>

                        </div>";
                        }

                        }
                    }
                    ?>

        <script type="text/javascript">
            function affichergoogle(z)
            {
    
                if(z == "Bab Ezzouar 5")
                {
                    if(document.getElementById('Bab-Ezzouar-5').style.display="none")
                    {
                        document.getElementById('Bab-Ezzouar-5').style.display="flex";
                        document.getElementById('Bouraoui-Amar').style.display="none";
                    }
                    else
                    {
                        document.getElementById('Bab-Ezzouar-5').style.display="none";
                    }
                }

                if(z == "Bouraoui Amar")
                {
                    if(document.getElementById('Bouraoui-Amar').style.display="none")
                    {
                        document.getElementById('Bouraoui-Amar').style.display="flex";
                        document.getElementById('Bab-Ezzouar-5').style.display="none";
                    }
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
