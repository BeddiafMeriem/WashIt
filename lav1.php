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
                 $type="lav";
                 $query="select * from users where actif = 1 and type='".$type."'";
                 $result=mysqli_query($link,$query);
                 $obj= mysqli_fetch_object($result);
                 $name = $obj->name;
                 echo "<a style='outline: none;text-decoration: none;font-size:19px;font-weight:bold;color:black;background:#F2F2F2;width:90%;margin-left:; margin-bottom: 50px;padding-top:10px;' href='profile.php'> $name </a>";

                 ?>
                 </div>
                   
                    <li class="active">
                    <a style="margin-top:20%" href="lav1.php">Accueil</a>
                    </li>
                    <li><a href="nettoyages.php">Mes Nettoyages</a></li>
                 <li><a href="activiteslav.php">Mes Activités</a></li>
                 <li><a href="lav-profile.php">Mon Profile</a></li>
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

                        
                            <h2 align="center" style="">LAVERIE INSAF </h2>
                        <?php 
                        
                        echo '<h2 align="center" style="padding-bottom:5%;margin-left:30px">'.$date = date('Y-m-d').'</h2>';
           

           
                    
                    $link=mysqli_connect("localhost","root","","washit") or die("<p>Connection impossible : ".mysql_error(). "</p>") ; 
                    $type="lav";
                    $query="select * from users where actif = 1 and type = '".$type."'";
                    $result=mysqli_query($link,$query);
                    $obj= mysqli_fetch_object($result);
                    $name = $obj->username;

                    

                    $query4="select COUNT(*) as existe from commandes,cites where (collecte=1 and lave=0) and (adresse = 'Bab Ezzouar 05' or adresse = 'Bouraoui Amar' or adresse = 'EL-ALIA' or adresse = '19 Mai 1956') order by(cites.ordre)";
                    $result4=mysqli_query($link,$query4);
                    $obj4= mysqli_fetch_object($result4);
                    $existe = $obj4->existe;
                    if($existe != 0)
                    {
                        

                        echo "<div id='c1' style='font-weight: bold;margin-left:7%;float: left;width: 30%;justify-content: center;align-items: center;padding-left:5% '> N° COMMANDE </div>";
                        echo "<div id='c2' style='font-weight: bold;float: left;width: 30%;justify-content: center;align-items: center; padding-left:7%;'> NOMBRE D'ARTICLES </div>";
                        echo "<div id='c3' style='font-weight: bold;float: left;width: 30%;justify-content: center;align-items: center; padding-left:7%;'> AFFICHER LES DETAILS </div>";
                        
                        $query1="select * from commandes where (collecte=1 and lave=0) and (adresse = 'Bab Ezzouar 05' or adresse = 'Bouraoui Amar' or adresse = 'EL-ALIA' or adresse = '19 Mai 1956') order by(adresse)";
                        $result1=mysqli_query($link,$query1);
                        while($row=$result1->fetch_assoc())
                        {
                     
                               $id = $row['idCommande'];
                               $code = $row['codeCommande'];

                               $query2="select * FROM articles where idCommande = '".$id."'";
                               $result2=mysqli_query($link,$query2);
                               $nbr = 0;
                               while($row2=$result2->fetch_assoc())
                               {
                                   $nbr += $row2['quantite'];
                               }

                                echo "<div class='row' style='width:100%; margin-top:1%'>";
                                    echo "<div style='display:inline'>"; 
                                        echo "<p align='center' style='color:black;font-size:15px;font-weight: bold;float: left;width: 30%; padding-top:15px;margin-left:6%;padding-bottom:18px;background-color:white; margin-top:2% '>COMMANDE N° ".$row['codeCommande']."</p>";
                                        echo "<p align='center' style='color:black;font-size:15px;font-weight: bold;float: left;width: 30%; padding-top:15px;padding-left:5%;padding-bottom:18px;background-color:white; margin-top:2% '> ".$nbr. "</p>";
                                        echo "<div align='center' style='color:black;font-size:15px;font-weight: bold;float: left;width: 30%; padding-top:10px;padding-left:5%;padding-bottom:16px;background-color:white; margin-top:2%'> <button style='background-color:#78B3DC; border:0' class='btn btn-primary' id='btn' name='btn' onClick='afficherDetails(\"".$id."\")'> <!--<img style='width:130%; padding-left:0' src='assets/img/route.jpg'> --> DETAILS </button> </div>";
                                    echo "</div>";
                                echo "</div>";
                                echo "<div class='row' id='".$id."'  style='width:100%; margin-top:1%;display:none'>";
                                $query3="select COUNT(*) as found FROM articles where idCommande = '".$id."'";
                                $result3=mysqli_query($link,$query3);
                                $obj3= mysqli_fetch_object($result3);
                                $found = $obj3->found;
                                if($found != 0)
                                {
                                    echo "<div id='c1' style='font-weight: bold;margin-left:20%;float: left;width: 20%;justify-content: center;align-items: center;padding-left:5% '> Nombre d'articles </div>";
                                    echo "<div id='c2' style='font-weight: bold;float: left;width: 20%;justify-content: center;align-items: center; padding-left:9%;'> Article </div>";
                                    echo "<div id='c3' style='font-weight: bold;float: left;width: 20%;justify-content: center;align-items: center; padding-left:7%;'> Type d'article </div>";
                                
                                    $query5="select * FROM articles where idCommande = '".$id."'";
                                    $result5=mysqli_query($link,$query5);
                                    while($row5=$result5->fetch_assoc())
                                    {
                                  
                                      echo "<div style='display:inline'>"; 
                                        echo "<div id='c1' style='margin-left:21%;float: left;width: 20%;justify-content: center;align-items: center;text-align:center;margin-top:1%'> ".$row5['quantite']." </div>";
                                        echo "<div id='c2' style='float: left;width: 20%;justify-content: center;align-items: center; padding-left:1%;text-align:center;margin-top:1% '> ".$row5['article']." </div>";
                                        echo "<div id='c3' style='float: left;width: 20%;justify-content: center;align-items: center; padding-left:3%;text-align:center;margin-top:1% '> ".$row5['type']." </div>";
                                      echo "</div>";
                                
                                    }  
                                     
                                
                                }
                                echo "</div>";
                                echo "<div id='laver$id' style='display:none'>"; 
                                    echo "<button style='background-color:#78B3DC;margin-top:20px;margin-left:48%;border:0;margin-top:15px;text-align:center;width:100px' class='btn btn-primary' id='btn' name='btn' onClick='laver(\"".$id."\")'> LAVER </button>";
                                echo "</div>";
                        }
                    }
                
                

                ?>

        
            <script type="text/javascript">
            function laver(id)
            {
               
                $.ajax({
    
                    url : 'send.php',
                    type : 'POST',
                    data : {'id': id},
                    success : function(data){ 
                        document.location.reload();
                    }
                });
            } 
            </script>
        <script type="text/javascript">
            function afficherDetails(id)
            {
                
                var display = document.getElementById(id).style.display;
               
                if(display == "none")
                {
                    document.getElementById(id).style.display="inline";
                    document.getElementById("laver"+id).style.display="inline";
                }
               
                if(display == "inline")
                {
                    document.getElementById(id).style.display="none";
                    document.getElementById("laver"+id).style.display="none";
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
