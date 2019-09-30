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
                    <a style="margin-top:20%" href="tansport-index4.php">Accueil</a>
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

                        
                            <h2 style="padding-left:35%; padding-bottom:5%">COLLECTE ET LIVRAISON</h2>
                        


                        
                    
                

                    <?php
                    $link=mysqli_connect("localhost","root","","washit") or die("<p>Connection impossible : ".mysql_error(). "</p>") ; 
                    $type="CHAUFFEUR";
                    $query="select * from users where actif = 1 and type='".$type."'";
                    $result=mysqli_query($link,$query);
                    $obj= mysqli_fetch_object($result);
                    $name = $obj->username;

                    $query4="select COUNT(*) as existe from commandes where dateCol = curdate() or dateLiv = curdate()";
                    $result4=mysqli_query($link,$query4);
                    $obj4= mysqli_fetch_object($result4);
                    $existe = $obj4->existe;
                    if($existe != 0)
                    {
                        

                        echo "<div id='c1' style='font-weight: bold;margin-left:10%;float: left;width: 30%;justify-content: center;align-items: center;padding-left:5% '> ADRESSE </div>";
                        echo "<div id='c2' style='font-weight: bold;float: left;width: 30%;justify-content: center;align-items: center; padding-left:5%;'> DATE ET HEURE </div>";
                        echo "<div id='c3' style='font-weight: bold;float: left;width: 30%;justify-content: center;align-items: center; padding-left:7%;'> ITINERAIRE </div>";
                        
                        $query1="select count(*) as nbr, adresse FROM commandes,cites where adresse = nom and (dateCol = curdate() or dateLiv = curdate()) and (adresse = 'Vieux Kouba' or adresse = 'Garidi' or adresse = 'Mhammed Youcef' or adresse = 'Said Hamdine') group by(adresse) order by(cites.ordre) ASC";
                        $result1=mysqli_query($link,$query1);
                        
                        while($row=$result1->fetch_assoc())
                        {
                      
                                $adr = $row['adresse'];
                                echo "<div class='row' style='width:100%; margin-top:1%'>";
                                    echo "<div style='display:inline'>"; 
                                        echo "<p align='center' style='color:black;font-size:15px;font-weight: bold;float: left;width: 30%; padding-top:15px;margin-left:6%;padding-bottom:18px;background-color:white; margin-top:2% '>CITE UNIVERSITAIRE  <br>".$row['adresse']."</p>";
                                        echo "<p align='center' style='color:black;font-size:15px;font-weight: bold;float: left;width: 30%; padding-top:25px;padding-left:5%;padding-bottom:33px;background-color:white; margin-top:2% '> 20".$date = date('y-m-d')."   20:00 - 20:30 </p>";
                                        echo "<div align='center' style='color:black;font-size:15px;font-weight: bold;float: left;width: 30%; padding-top:25px;padding-left:5%;padding-bottom:27px;background-color:white; margin-top:2%'> <button style='background-color:#78B3DC; border:0' class='btn btn-primary' id='btn' name='btn' onClick='affichergoogle(\"".$adr."\")'> <!--<img style='width:130%; padding-left:0' src='assets/img/route.jpg'> --> ROUTE </button> </div>";
                                    echo "</div>";
                                echo "</div>";
                                if($adr == "Vieux Kouba")
                                {
                                    echo "<div id='Vieux-Kouba' align='center' style='display:none;width:50%; background-color:green;margin-left:25%;height:300px'> 
                            
                                    <iframe style='width:100%;border:0' src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d102310.69087763279!2d2.9439919400164474!3d36.7415519781269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x128faff060f45b37%3A0xf5b8f9471283f020!2sOuled+Fayet!3m2!1d36.7295502!2d2.9425698!4m5!1s0x128fadc256cdfd5f%3A0x8a954514be51f13!2sR%C3%A9sidence+Cit%C3%A9+Universit%C3%A9+Vieux+Kouba%2C+Avenue+des+Fr%C3%A8res+Abdeslami%2C+Kouba!3m2!1d36.7296802!2d3.0786998999999997!5e0!3m2!1sfr!2sdz!4v1560196252505!5m2!1sfr!2sdz'  height='100%' frameborder='0' allowfullscreen></iframe>
                                    </div>";
                                }
                                if($adr == "Garidi")
                                {
                                    echo "<div id='Garidi' align='center' style='display:none;width:50%; background-color:green;margin-left:25%;height:300px'> 
                            
                                    <iframe style='width:100%;border:0' src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d102310.69087763279!2d2.9456521400164424!3d36.7415519781269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x128faff060f45b37%3A0xf5b8f9471283f020!2sOuled+Fayet!3m2!1d36.7295502!2d2.9425698!4m5!1s0x128fb2a12814fa85%3A0xe617468623ab0771!2scit%C3%A9+universitaire%2C+Belouizdad!3m2!1d36.744952!2d3.0821071!5e0!3m2!1sfr!2sdz!4v1560196455816!5m2!1sfr!2sdz'  height='100%' frameborder='0' allowfullscreen></iframe>
                                    </div>";
                                }
                                if($adr == "Mhammed Youcef")
                                {
                                    echo "<div id='Mhammed-Youcef' align='center' style='display:none;width:50%; background-color:green;margin-left:25%;height:300px'> 
                            
                                    <iframe style='width:100%;border:0' src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d51153.75465939513!2d2.9660960244450325!3d36.74393866961277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x128faff060f45b37%3A0xf5b8f9471283f020!2sOuled+Fayet!3m2!1d36.7295502!2d2.9425698!4m5!1s0x128fb28879888409%3A0x5ed6e6fee0a549a9!2sRue+Yousfi+Mohamed%2C+Sidi+M&#39;Hamed!3m2!1d36.753938399999996!2d3.0596615!5e0!3m2!1sfr!2sdz!4v1560196766346!5m2!1sfr!2sdz'  height='100%' frameborder='0' allowfullscreen></iframe>
                                    </div>";
                                }

                                if($adr == "Said Hamdine")
                                {
                                    echo "<div id='Said-Hamdine' align='center' style='display:none;width:50%; background-color:green;margin-left:25%;height:300px'> 
                            
                                    <iframe style='width:100%;border:0' src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d51156.1363048615!2d2.953816174411817!3d36.74036536980248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x128faff060f45b37%3A0xf5b8f9471283f020!2sOuled+Fayet!3m2!1d36.7295502!2d2.9425698!4m5!1s0x128faded9ca0bdf7%3A0x551fdb9bb5e41ad0!2sCite+Universitaire+Des+Jeune+Filles+Said+Hamdine%2C+Bir+Mourad+Ra%C3%AFs!3m2!1d36.7318863!2d3.034779!5e0!3m2!1sfr!2sdz!4v1560197030436!5m2!1sfr!2sdz'  height='100%' frameborder='0' allowfullscreen></iframe>
                                    </div>";
                                }
                            }
                        }
 
                    ?>

        <script type="text/javascript">
            function affichergoogle(z)
            {
    
                if(z == "Vieux Kouba")
                {
                    if(document.getElementById('Vieux-Kouba').style.display="none")
                    {
                        document.getElementById('Vieux-Kouba').style.display="flex";
                        document.getElementById('Garidi').style.display="none";
                        document.getElementById('Mhammed-Youcef').style.display="none";
                        document.getElementById('Said-Hamdine').style.display="none";
                    }
                 
                }

                if(z == "Garidi")
                {
                    if(document.getElementById('Garidi').style.display="none")
                    {
                        document.getElementById('Garidi').style.display="flex";
                        document.getElementById('Vieux-Kouba').style.display="none";
                        document.getElementById('Mhammed-Youcef').style.display="none";
                        document.getElementById('Said-Hamdine').style.display="none";
                    }
                 
                }

                if(z == "Mhammed Youcef")
                {
                    if(document.getElementById('Mhammed-Youcef').style.display="none")
                    {
                        document.getElementById('Mhammed-Youcef').style.display="flex";
                        document.getElementById('Vieux-Kouba').style.display="none";
                        document.getElementById('Garidi').style.display="none";
                        document.getElementById('Said-Hamdine').style.display="none";
                    }
                 
                }

                if(z == "Said Hamdine")
                {
                    if(document.getElementById('Said-Hamdine').style.display="none")
                    {
                        document.getElementById('Said-Hamdine').style.display="flex";
                        document.getElementById('Vieux-Kouba').style.display="none";
                        document.getElementById('Garidi').style.display="none";
                        document.getElementById('Mhammed-Youcef').style.display="none";
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
