

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
                 $type="CHAUFFEUR";
                 $query="select * from users where actif = 1 and type='".$type."'";
                 $result=mysqli_query($link,$query);
                 $obj= mysqli_fetch_object($result);
                 $name = $obj->name;
                 $username = $obj->username;
                 $adr1 = ""; 
                 $adr2 = "";
                 $adr3 = "";
                 $adr4 = "";
                 if($username=="mohamed_boualem@gmail.com" or $name == "Mohamed Boualem")
                 {  
                    $href = "m.php";

                    $adr1 = "Bab Ezzouar 05"; 
                    $adr2 = "Bouraoui Amar";
                    $adr3 = "EL-ALIA";
                    $adr4 = "19 Mai 1956";
                 
                 }
     
                 if($username=="mohamed_djebbar@gmail.com" or $name == "Mohamed Djebbar")
                 { 
                     $href = "tansport-index2.php";

                     $adr1 = "Baya Hocine"; 
                     $adr2 = "Dergana";
                     $adr3 = "Abdelkader Belarbi";
                     $adr4 = "Bab Ezzouar 03";
                 }
     
                 if($username=="brahim_sekkai@gmail.com" or $name == "Brahim Sekkai")
                 {  
                     $href = "tansport-index3.php";
                    
                     $adr1 = "Taleb Abderahmane 01"; 
                     $adr2 = "Taleb Abderahmane 02";
                     $adr3 = "Taleb Abderahmane 03";
                     $adr4 = "Jeune Fille";
                 }
     
                 if($username=="mohamed_boudiaf@gmail.com" or $name == "Mohamed Boudiaf")
                 {  
                     $href = "tansport-index4.php";
                     
                     $adr1 = "Vieux Kouba"; 
                     $adr2 = "Garidi";
                     $adr3 = "Mhammed Youcef";
                     $adr4 = "Said Hamdine";
                 }
     
                 if($username=="brahim_boualem@gmail.com" or $name == "Brahim Boualem")
                 {  
                     $href = "tansport-index5.php";

                     $adr1 = "Dely Brahim 01"; 
                     $adr2 = "Dely Brahim 02";
                     $adr3 = "Beni Messous";
                     $adr4 = "Hydra 03";
                 }
     
                 if($username=="brahim_boudiaf@gmail.com" or $name == "Brahim Boudiaf")
                 {  
                     $href = "tansport-index6.php";

                     $adr1 = "Ouled Fayet 01"; 
                     $adr2 = "Ouled Fayet 02";
                     $adr3 = "Ouled Fayet 03";
                     $adr4 = "Sidi Abdellah";
                 }
                 if($username=="rachid_laverie@gmail.com" or $name == "rachid maouch")
                 {  
                    $href = "lav1.php";

                    $adr1 = "Bab Ezzouar 05"; 
                    $adr2 = "Bouraoui Amar";
                    $adr3 = "EL-ALIA";
                    $adr4 = "19 Mai 1956";
                 }
                 if($username=="FLEN2" or $name == "FLEN2")
                 {  
                    $href = "lav2.php";

                     $adr1 = "Baya Hocine"; 
                     $adr2 = "Dergana";
                     $adr3 = "Abdelkader Belarbi";
                     $adr4 = "Bab Ezzouar 03";
                 }
                 if($username=="FLEN3" or $name == "FLEN3")
                 {  
                    $href = "lav3.php";

                     $adr1 = "Taleb Abderahmane 01"; 
                     $adr2 = "Taleb Abderahmane 02";
                     $adr3 = "Taleb Abderahmane 03";
                     $adr4 = "Jeune Fille";
                 }
                      echo "<a style='outline: none;text-decoration: none;font-size:19px;font-weight:bold;color:black;background:#F2F2F2;width:90%;margin-left:; margin-bottom: 50px;padding-top:10px;' href='profile.php'> $name </a>";
     
                      
                      echo "</div>";
                        
                         echo "<li >";
                         echo "<a style='margin-top:20%' href= ".$href." >Accueil</a>"; 
                         ?>

                 

                 
                 
                    </li>
                    <li class="active"><a href="collectes.php">Mes Livraisons</a></li>
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

                        <h2 align="center" style="text-align:center">MES  COLLECTES  ET  LIVRAISONS </h2> 
                       
                        <?php
                        
                        echo '<h2 align="center" style="padding-bottom:5%;">'.$date = date('Y-m-d').'</h2>';
                        ?>  

                    <?php
               
                    $link=mysqli_connect("localhost","root","","washit") or die("<p>Connection impossible : ".mysql_error(). "</p>") ; 

                    $query4="select COUNT(*) as existe from commandes where dateCol = curdate() and (adresse = '".$adr1."' or adresse = '".$adr2."' or adresse = '".$adr3."' or adresse = '".$adr4."') and (collecte = 1)";
                    $result4=mysqli_query($link,$query4);
                    $obj4= mysqli_fetch_object($result4);
                    $existe = $obj4->existe;
                    if($existe != 0)
                    {
                        
                        echo "<div>";
                        echo "<h3 align='center' style='font-weight: bold; margin-top: 0px; color:#ADB5BD ; margin-left:0% ; margin-bottom:5%'>COLLECTE</h3>";
                        echo "</div>";
                        
                        echo "<div style=''>";
                        echo "<div id='c1' style='font-weight: bold;margin-left:%;float: left;width: 25%;justify-content: center;align-items: center;padding-left:%;margin-bottom:10px;text-align:center '> N° Commandes </div>";
                        echo "<div id='c3' style='font-weight: bold;float: left;width: 25%;justify-content: center;align-items: center; padding-left:%;text-align:center'> Nombre d'articles </div>";
                        echo "<div id='c3' style='font-weight: bold;float: left;width: 25%;justify-content: center;align-items: center; padding-left:%;text-align:center'> Prix </div>";
                        echo "<div id='c3' style='font-weight: bold;float: left;width: 25%;justify-content: center;align-items: center; padding-left:%;text-align:center'> Adresse </div>";
                        echo "</div>";

                        $query1="select * FROM commandes where dateCol = curdate() and (adresse = '".$adr1."' or adresse = '".$adr2."' or adresse = '".$adr3."' or adresse = '".$adr4."') and (collecte = 1)";
                        $result1=mysqli_query($link,$query1);
                        while($row1=$result1->fetch_assoc())
                        {
                                $idCmd = $row1['idCommande'];
                                $code = $row1['codeCommande'];
                                $adr = $row1['adresse'];
                                $prix = $row1['prixTotal'];

                                $query2="select * FROM articles where idCommande = '".$idCmd."'";
                                $result2=mysqli_query($link,$query2);
                                $nbr = 0;
                                while($row2=$result2->fetch_assoc())
                                {
                                    $nbr += $row2['quantite'];
                                }
                                echo '<form name="collecte" class="formdisable" action="#" method="POST">';
                                echo '<div  style="width:100%;margin-left:%;display:table; border:0px">';
                                    echo '<div  style="display:table-row;background:white; height:50px" align="center">';
                                        echo '<div  style="display:table-cell;width:20%;">';
                                            echo '<input  style="background-color: white;  border: white ; font-size: 15px; font-weight: bold;text-align:center; width:100%;padding-top:10px;opacity:0.7" type="number" name="NCmd" id="NCmd" value="'.$code.'" readonly/> <br>'; 
                                        echo '</div>';
                                        echo '<div  style="display:table-cell;width:20%">';
                                            echo '<input align="center" style="background-color: white;  border: #ADB5BD ; font-size: 15px; font-weight: bold;text-align:center;width:100%;opacity:0.7" type="number" name="NbrArticle" id="NbrArticle" value="'.$nbr.'" readonly/> <br>';            
                                        echo '</div>';
                                        echo '<div  style="display:table-cell;width:20%">';
                                            echo '<input align="center" style="background-color: white;  border: #ADB5BD ; font-size: 15px; font-weight: bold;text-align:center;width:100%;opacity:0.7" type="text" name="prix" id="prix" value="'.$prix.'"DZD"" readonly/> <br>';            
                                        echo '</div>';
                                        echo '<div  style="display:table-cell;width:20%">';
                                            echo '<input align="center" style="background-color: white;  border: #ADB5BD ; font-size: 15px; font-weight: bold;text-align:center;width:100%;opacity:0.7" type="text" name="adresse" id="adresse" value="'.$adr.'" readonly/> <br>';            
                                        echo '</div>
                                    </div>
                                </div>
                                </form> <br>';
                                
                        }
                    }


                    $query5="select COUNT(*) as existe from commandes where dateLiv = curdate() and (adresse = '".$adr1."' or adresse = '".$adr2."' or adresse = '".$adr3."' or adresse = '".$adr4."') and (livre = 1)";
                    $result5=mysqli_query($link,$query5);
                    $obj5= mysqli_fetch_object($result5);
                    $existe = $obj5->existe;
                    if($existe != 0)
                    {
                        
                        echo "<div>";
                        echo "<h3 align='center' style='font-weight: bold; margin-top: 0px; color:#ADB5BD ; margin-left:0% ; margin-bottom:5%; margin-top:5%'>LIVRAISON</h3>";
                        echo "</div>";
                        
                        echo "<div style=''>";
                        echo "<div id='c1' style='font-weight: bold;margin-left:%;float: left;width: 25%;justify-content: center;align-items: center;padding-left:%;margin-bottom:10px;text-align:center '> N° Commandes </div>";
                        echo "<div id='c3' style='font-weight: bold;float: left;width: 25%;justify-content: center;align-items: center; padding-left:%;text-align:center'> Nombre d'articles </div>";
                        echo "<div id='c3' style='font-weight: bold;float: left;width: 25%;justify-content: center;align-items: center; padding-left:%;text-align:center'> Prix </div>";
                        echo "<div id='c3' style='font-weight: bold;float: left;width: 25%;justify-content: center;align-items: center; padding-left:%;text-align:center'> Adresse </div>";
                        echo "</div>";

                        $query6="select * FROM commandes where dateLiv = curdate() and (adresse = '".$adr1."' or adresse = '".$adr2."' or adresse = '".$adr3."' or adresse = '".$adr4."') and (livre = 1)";
                        $result6=mysqli_query($link,$query6);
                        while($row6=$result6->fetch_assoc())
                        {
                                $idCmd = $row6['idCommande'];
                                $code = $row6['codeCommande'];
                                $adr = $row6['adresse'];
                                $prix = $row6['prixTotal'];

                                $query7="select * FROM articles where idCommande = '".$idCmd."'";
                                $result7=mysqli_query($link,$query7);
                                $nbr = 0;
                                while($row7=$result7->fetch_assoc())
                                {
                                    $nbr += $row7['quantite'];
                                }
                                echo '<form name="collecte" class="formdisable" action="#" method="POST">';
                                echo '<div  style="width:100%;margin-left:%;display:table; border:0px">';
                                    echo '<div  style="display:table-row;background:white; height:50px" align="center">';
                                        echo '<div  style="display:table-cell;width:20%;">';
                                            echo '<input  style="background-color: white;  border: white ; font-size: 15px; font-weight: bold;text-align:center; width:100%;padding-top:10px;opacity:0.7" type="number" name="NCmd" id="NCmd" value="'.$code.'" readonly/> <br>'; 
                                        echo '</div>';
                                        echo '<div  style="display:table-cell;width:20%">';
                                            echo '<input align="center" style="background-color: white;  border: #ADB5BD ; font-size: 15px; font-weight: bold;text-align:center;width:100%;opacity:0.7" type="number" name="NbrArticle" id="NbrArticle" value="'.$nbr.'" readonly/> <br>';            
                                        echo '</div>';
                                        echo '<div  style="display:table-cell;width:20%">';
                                            echo '<input align="center" style="background-color: white;  border: #ADB5BD ; font-size: 15px; font-weight: bold;text-align:center;width:100%;opacity:0.7" type="text" name="prix" id="prix" value="'.$prix.'" readonly/> <br>';            
                                        echo '</div>';
                                        echo '<div  style="display:table-cell;width:20%">';
                                            echo '<input align="center" style="background-color: white;  border: #ADB5BD ; font-size: 15px; font-weight: bold;text-align:center;width:100%;opacity:0.7" type="text" name="adresse" id="adresse" value="'.$adr.'" readonly/> <br>';            
                                        echo '</div>
                                    </div>
                                </div>
                                </form> <br>';
                                
                        }
                    }
                

               
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
