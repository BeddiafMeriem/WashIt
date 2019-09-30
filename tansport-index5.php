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
                    <a style="margin-top:20%" href="tansport-index5.php">Accueil</a>
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
                        
                        $query1="select count(*) as nbr, adresse FROM commandes,cites where adresse = nom and (dateCol = curdate() or dateLiv = curdate()) and (adresse = 'Dely Brahim 01' or adresse = 'Dely Brahim 02' or adresse = 'Beni Messous' or adresse = 'Hydra 03') group by(adresse) order by(cites.ordre) ASC";
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
                                if($adr == "Dely Brahim 01")
                                {
                                echo "<div id='Dely-Brahim-01' align='center' style='display:none;width:50%; background-color:green;margin-left:25%;height:300px'> 
                            
                                <iframe style='width:100%;border:0' src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d58199.86180706463!2d2.93509005552521!3d36.76576006802543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x128faff060f45b37%3A0xf5b8f9471283f020!2sOuled+Fayet!3m2!1d36.7295502!2d2.9425698!4m5!1s0x128fb1d1e1a14c65%3A0x829dd364ccceb864!2scit%C3%A9+universitaire%2C+Dely+Ibrahim!3m2!1d36.755303!2d2.9835903999999998!5e0!3m2!1sfr!2sdz!4v1560197169023!5m2!1sfr!2sdz'  height='100%' frameborder='0' allowfullscreen></iframe>
                                </div>";
                                }
                                if($adr == "Dely Brahim 02")
                                {
                                echo "<div id='Dely-Brahim-02' align='center' style='display:none;width:50%; background-color:green;margin-left:25%;height:300px'> 
                            
                                <iframe style='width:100%;border:0' src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d58199.86180706463!2d2.93509005552521!3d36.76576006802543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x128faff060f45b37%3A0xf5b8f9471283f020!2sOuled+Fayet!3m2!1d36.7295502!2d2.9425698!4m5!1s0x128fb1d1e1a14c65%3A0x829dd364ccceb864!2scit%C3%A9+universitaire%2C+Dely+Ibrahim!3m2!1d36.755303!2d2.9835903999999998!5e0!3m2!1sfr!2sdz!4v1560197169023!5m2!1sfr!2sdz'  height='100%' frameborder='0' allowfullscreen></iframe>
                                </div>";
                                }
                                if($adr == "Beni Messous")
                                {
                                echo "<div id='Beni-Messous' align='center' style='display:none;width:50%; background-color:green;margin-left:25%;height:300px'> 
                            
                                <iframe style='width:100%;border:0' src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d51146.395515784374!2d2.9414190745476554!3d36.75497806902712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x128faff060f45b37%3A0xf5b8f9471283f020!2sOuled+Fayet!3m2!1d36.7295502!2d2.9425698!4m5!1s0x128fb1af36c026c5%3A0xffa0d0589b9e412a!2scit%C4%97+universitaire+B%C4%97ni+Messous%2C+Beni+Messous!3m2!1d36.781876499999996!2d2.9860710999999998!5e0!3m2!1sfr!2sdz!4v1560197321777!5m2!1sfr!2sdz'  height='100%' frameborder='0' allowfullscreen></iframe>
                                </div>";
                                }
                                if($adr == "Hydra 03")
                                {
                                echo "<div id='Hydra-03' align='center' style='display:none;width:50%; background-color:green;margin-left:25%;height:300px'> 
                            
                                <iframe style='width:100%;border:0' src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d51156.275466305335!2d2.9467455744098796!3d36.74015656981358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x128faff060f45b37%3A0xf5b8f9471283f020!2sOuled+Fayet!3m2!1d36.7295502!2d2.9425698!4m5!1s0x128fb3bbe43714a1%3A0x27dd5d8814403dc!2scit%C3%A9+universitaire+Hydra+03!3m2!1d36.7482371!2d3.0209606!5e0!3m2!1sfr!2sdz!4v1560197467671!5m2!1sfr!2sdz'  height='100%' frameborder='0' allowfullscreen></iframe>
                                </div>";
                                }
                            }
                        }

                    ?>

        <script type="text/javascript">
            function affichergoogle(z)
            {
    
                if(z == "Dely Brahim 01")
                {
                    if(document.getElementById('Dely-Brahim-01').style.display="none")
                    {
                        document.getElementById('Dely-Brahim-01').style.display="flex";
                        document.getElementById('Dely-Brahim-02').style.display="none";
                        document.getElementById('Beni-Messous').style.display="none";
                        document.getElementById('Hydra-03').style.display="none";
                    }
                 
                }

                if(z == "Dely Brahim 02")
                {
                    if(document.getElementById('Dely-Brahim-02').style.display="none")
                    {
                        document.getElementById('Dely-Brahim-02').style.display="flex";
                        document.getElementById('Dely-Brahim-01').style.display="none";
                        document.getElementById('Beni-Messous').style.display="none";
                        document.getElementById('Hydra-03').style.display="none";
                    }
                 
                }

                if(z == "Beni Messous")
                {
                    if(document.getElementById('Beni-Messous').style.display="none")
                    {
                        document.getElementById('Beni-Messous').style.display="flex";
                        document.getElementById('Dely-Brahim-01').style.display="none";
                        document.getElementById('Dely-Brahim-02').style.display="none";
                        document.getElementById('Hydra-03').style.display="none";
                    }
                 
                }

                if(z == "Hydra 03")
                {
                    if(document.getElementById('Hydra-03').style.display="none")
                    {
                        document.getElementById('Hydra-03').style.display="flex";
                        document.getElementById('Dely-Brahim-01').style.display="none";
                        document.getElementById('Dely-Brahim-02').style.display="none";
                        document.getElementById('Beni-Messous').style.display="none";
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
