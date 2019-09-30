

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
                 $username = $obj->username;
                $href2 = "";
                $titre = "";
                $transport = 0;
                if($username=="mohamed_boualem@gmail.com" or $name == "Mohamed Boualem")
                {  
                   $href = "m.php";
                   $href2 = "collectes.php";
                   $titre = "Mes Livraisons";
                   $transport = 1;
                }
    
                if($username=="mohamed_djebbar@gmail.com" or $name == "Mohamed Djebbar")
                { 
                    $href = "tansport-index2.php";
                    $href2 = "collectes.php";
                    $titre = "Mes Livraisons";
                    $transport = 1;
                }
    
                if($username=="brahim_sekkai@gmail.com" or $name == "Brahim Sekkai")
                {  
                    $href = "tansport-index3.php";
                    $href2 = "collectes.php";
                    $titre = "Mes Livraisons";
                    $transport = 1;
                }
    
                if($username=="mohamed_boudiaf@gmail.com" or $name == "Mohamed Boudiaf")
                {  
                    $href = "tansport-index4.php";
                    $href2 = "collectes.php";
                    $titre = "Mes Livraisons";
                    $transport = 1;
                }
    
                if($username=="brahim_boualem@gmail.com" or $name == "Brahim Boualem")
                {  
                    $href = "tansport-index5.php";
                    $href2 = "collectes.php";
                    $titre = "Mes Livraisons";
                    $transport = 1;
                }
    
                if($username=="brahim_boudiaf@gmail.com" or $name == "Brahim Boudiaf")
                {  
                    $href = "tansport-index6.php";
                    $href2 = "collectes.php";
                    $titre = "Mes Livraisons";
                    $transport = 1;
                }
                if($username=="rachid_laverie@gmail.com" or $name == "rachid maouch")
                {  
                   $href = "lav1.php";
                   $href2 = "nettoyages.php";
                   $titre = "Mes Nettoyages";
                   $transport = 0;
                }
                if($username=="FLEN2" or $name == "FLEN2")
                {  
                   $href = "lav2.php";
                   $href2 = "nettoyages.php";
                   $titre = "Mes Nettoyages";
                   $transport = 0;
                }
                if($username=="FLEN3" or $name == "FLEN3")
                {  
                   $href = "lav3.php";
                   $href2 = "nettoyages.php";
                   $titre = "Mes Nettoyages";
                   $transport = 0;
                }

                      echo "<a style='outline: none;text-decoration: none;font-size:19px;font-weight:bold;color:black;background:#F2F2F2;width:90%;margin-left:; margin-bottom: 50px;padding-top:10px;' href='profile.php'> $name </a>";
     
                      
                      echo "</div>";
                        
                         echo "<li >";
                         echo "<a style='margin-top:20%' href= ".$href." >Accueil</a>"; 
                         ?>

                 

                 
                 
                    </li>
                    <?php
                    echo '<li><a href='.$href2.'>'.$titre.'</a></li>';
                    ?>
                    <li class="active"><a href="activiteslav.php">Mes Activités</a></li>
                   
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

                        <h2 style="text-align:center">MES ACTIVITES</h2> 
                       
                        <?php
                        
                        echo '<h2 style="padding-left:40px;padding-bottom:5%;text-align:center">'.$date = date('Y-m-d').'</h2>';
                          
                        
                        ?>
                            <div  style="width:100%;margin-left:%;display:table; border:0px">
                                <div  style="display:table-row; height:200px;" align="center">
                                
                                    <div  style="display:table-cell;width:50%;">
                                        <a href="LastMonthCALAV.php">
                                        <div  style="background-color: white;  border: white ; font-size: 15px; font-weight: bold;text-align:center; width:60%;height:200px; box-shadow: 5px 5px rgba(192,192,192,0.3)"> <input type="text" value="Mes revenus:" style="margin-top:20%;border:0; text-align:center;font-size:20px;width:100%" readonly> <input type="text" value="84560" style="border:0; text-align:center;font-size:40px;width:100%" readonly> <br> DZD </div><br>
                                    </a>
                                    </div>
                                
                                
                                    <div  style="display:table-cell;width:50%">
                                    <a href="LastMonthCMDLAV.php">
                                        <div align="center" style="background-color: white;  border: #ADB5BD ; font-size: 15px; font-weight: bold;text-align:center;width:60%;height:200px; box-shadow: 5px 5px rgba(192,192,192,0.3)"> <input type="text" value="Les commandes:" style="margin-top:20%;border:0; text-align:center;font-size:20px;width:100%" readonly> <input type="text" value="15876" style="border:0; text-align:center;font-size:40px;width:100%" readonly><br> COMMANDES </div><br> <br><br>           
                                    </a>
                                    </div>
                                
                                </div>
                                <div  style="display:table-row; height:200px" align="center">
                                    <div  style="display:table-cell;width:50%;">
                                    <a href="LastMonthAR.php">
                                        <div align="center" style="background-color: white;  border: #ADB5BD ; font-size: 15px; font-weight: bold;text-align:center;width:60%;height:200px; box-shadow: 5px 5px rgba(192,192,192,0.3);margin-left:70%" > <input type="text" value="Les articles lavés:" style="margin-top:20%;border:0; text-align:center;font-size:20px;width:100%" readonly> <input type="text" value="43754" style="border:0; text-align:center;font-size:40px;width:100%" readonly> <br> ARTICLES LAVES</div><br>           
                                    </a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        
                        ?>

            <script type="text/javascript">
            function payer(id)
            {
                document.getElementById(id).value = "OUI";
                
            }
            </script>

            <script type="text/javascript">
            function recuperer(id)
            {
                document.getElementById(id).value = "OUI";
                
            }
            </script>

            <script type="text/javascript">
            function collecter(id)
            {
                var paye = document.getElementById(id).value;
                $.ajax({
    
                    url : 'sendhelloo.php',
                    type : 'POST',
                    data : {'action': id , 'payer': paye},
                    success : function(data){ 
                        document.location.reload();
                    }
                });
            } 
            </script>

            <script type="text/javascript">
            function livrer(id)
            {
                var recupere = document.getElementById(id).value;
                $.ajax({
    
                    url : 'sendhelloo.php',
                    type : 'POST',
                    data : {'action': id , 'recuperer': recupere},
                    success : function(data){ 
                        document.location.reload();
                    }
                });
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

        



<script type="text/javascript">

</script>
    </body>
</html>
