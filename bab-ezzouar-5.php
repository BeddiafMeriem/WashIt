

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

                        <h2 align="center" style="">Résidence universitaire </h2> 
                        <h2 align="center" id="nomCite" style=" padding-bottom:2%">Bab Ezzouar 05</h2>
                        <?php
                        echo '<h2 align="center" style="padding-bottom:5%">'.$date = date('Y-m-d').'</h2>';
                        ?>  

                    <?php
                if($date = date('N') == 4){ // == 4   COLLECTE
                    $link=mysqli_connect("localhost","root","","washit") or die("<p>Connection impossible : ".mysql_error(). "</p>") ; 
                    $type="CHAUFFEUR";
                    $query="select * from users where actif = 1 and type='".$type."'";
                    $result=mysqli_query($link,$query);
                    $obj= mysqli_fetch_object($result);
                    $name = $obj->username;

                    $query4="select COUNT(*) as existe from commandes where (dateCol = curdate()) and cmdsupp=0 and adresse = 'Bab Ezzouar 05' and (collecte = 0  and affiche = 0)";
                    $result4=mysqli_query($link,$query4);
                    $obj4= mysqli_fetch_object($result4);
                    $existe = $obj4->existe;
                    if($existe != 0)
                    {
                        
                        echo "<div>";
                        echo "<h3 align='center' style='font-weight: bold; margin-top: 0px; color:#ADB5BD ; margin-left:0% ; margin-bottom:5%'>COLLECTE</h3>";
                        echo "</div>";

                        echo "<div style=''>";
                        echo "<div id='c1' style='font-weight: bold;margin-left:%;float: left;width: 20%;justify-content: center;align-items: center;padding-left:%;margin-bottom:10px;text-align:center '> N° Commandes </div>";
                        echo "<div id='c3' style='font-weight: bold;float: left;width: 15%;justify-content: center;align-items: center; padding-left:%;text-align:center'> Nombre d'articles </div>";
                        echo "<div id='c3' style='font-weight: bold;float: left;width: 15%;justify-content: center;align-items: center; padding-left:%;text-align:center'> Prix </div>";
                        echo "<div id='c3' style='font-weight: bold;float: left;width: 15%;justify-content: center;align-items: center; padding-left:%;text-align:center'> Commande Payée </div>";
                        echo "<div id='c3' style='font-weight: bold;float: left;width: 15%;justify-content: center;align-items: center; padding-left:%;text-align:center'> Paiement </div>";
                        echo "<div id='c3' style='font-weight: bold;float: left;width: 20%;justify-content: center;align-items: center; padding-left:%;text-align:center'> Collecte / Livraison </div>";
                        echo "</div>";

                        $query1="select * FROM commandes where (dateCol = curdate()) and cmdsupp=0 and adresse = 'Bab Ezzouar 05' and (collecte = 0 and affiche = 0)";
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
                                            echo '<input  style="background-color: white;  border: white ; font-size: 15px; font-weight: bold;text-align:center; width:100%" type="number" name="NCmd" id="NCmd" value="'.$code.'" readonly/> <br>'; 
                                        echo '</div>';
                                        echo '<div  style="display:table-cell;width:15%">';
                                            echo '<input align="center" style="background-color: white;  border: #ADB5BD ; font-size: 15px; font-weight: bold;text-align:center;width:100%" type="number" name="NbrArticle" id="NbrArticle" value="'.$nbr.'" readonly/> <br>';            
                                        echo '</div>';
                                        echo '<div  style="display:table-cell;width:15%">';
                                            echo '<input align="center" style="background-color: white;  border: #ADB5BD ; font-size: 15px; font-weight: bold;text-align:center;width:100%" type="number" name="NbrArticle" id="NbrArticle" value="'.$prix.'" readonly/> <br>';            
                                        echo '</div>';
                                        echo '<div  style="display:table-cell;width:15%">';
                                            echo '<input align="center" style="background-color: white;  border: #ADB5BD ; font-size: 15px; font-weight: bold;text-align:center;width:100%" type="text" name="paye" id="'.$idCmd.'" value="NON" readonly/> <br>';            
                                        echo '</div>';
                                        echo '<div  style="display:table-cell;width:15%">';
                                            echo '<input style="margin-top:7px;background-color:#41C821; border:#41C821" type="button" name="but" class="btn btn-primary" id="paiement" value="√" onClick="payer(\''.$idCmd.'\')"/> 
                                            <input style="margin-top:7px;background-color:red; border:#41C821" type="button" name="but" class="btn btn-primary" id="nonpaiement" value="X" onClick="nonpayer(\''.$idCmd.'\')"/><br>';
                                        echo '</div>';
                                        echo '<div  style="display:table-cell;width:20%">';
                                            echo '<input style="margin-top:7px" type="button" name="button" class="btn btn-primary" id="collecte" value="Collecter" onClick="collecter(\''.$idCmd.'\')"/> <br>';
                                        echo '</div>
                                    </div>
                                </div>
                                </form> <br>';
                                
                        }
                    }
                }

                if($date = date('N') == 6){ // == 6   LIVRAISON

                    $query4="select COUNT(*) as existe from commandes where (dateLiv = curdate()) and cmdsupp=0 and adresse = 'Bab Ezzouar 05' and (collecte = 1 and livre = 0)";
                    $result4=mysqli_query($link,$query4);
                    $obj4= mysqli_fetch_object($result4);
                    $existe = $obj4->existe;
                    if($existe != 0)
                    {
                        

                        echo "<div style='margin-top:10px'>";
                        echo "<h3 align='center' style='font-weight: bold; margin-top: 0px; color:#ADB5BD ; margin-left:0% ; margin-bottom:5%'>LIVRAISON</h3>";
                        echo "</div>";

                        echo "<div style='width:95%'>";
                        echo "<div id='c1' style='font-weight: bold;margin-left:%;float: left;width: 20%;justify-content: center;align-items: center;padding-left:5%;margin-bottom:10px;text-align:center '> N° Commandes </div>";
                        echo "<div id='c3' style='font-weight: bold;float: left;width: 20%;justify-content: center;align-items: center; padding-left:%;text-align:center'> Nombre d'articles </div>";
                        echo "<div id='c3' style='font-weight: bold;float: left;width: 20%;justify-content: center;align-items: center; padding-left:%;text-align:center'> Commande Récupérée </div>";
                        echo "<div id='c3' style='font-weight: bold;float: left;width: 20%;justify-content: center;align-items: center; padding-left:%;text-align:center'> Récupération </div>";
                        echo "<div id='c3' style='font-weight: bold;float: left;width: 20%;justify-content: center;align-items: center; padding-left:%;text-align:center'> Collecte / Livraison </div>";
                        echo "</div>";

                        $query5="select * FROM commandes where (dateLiv = curdate()) and cmdsupp=0 and adresse = 'Bab Ezzouar 05' and (collecte = 1 and livre = 0)";
                        $result5=mysqli_query($link,$query5);
                        while($row5=$result5->fetch_assoc())
                        {
                                $idCmd = $row5['idCommande'];
                                $code = $row5['codeCommande'];
                                $adr = $row5['adresse'];
                                $prix = $row5['prixTotal'];

                                $query2="select * FROM articles where idCommande = '".$idCmd."'";
                                $result2=mysqli_query($link,$query2);
                                $nbr = 0;
                                while($row2=$result2->fetch_assoc())
                                {
                                    $nbr += $row2['quantite'];
                                }

                                echo '<form name="livraison" class="formdisable" action="#" method="POST">';
                                echo '<div  style="width:90%;margin-left:5%;display:table; border:0px">';
                                    echo '<div  style="display:table-row;background:white; height:50px" align="center">';
                                        echo '<div  style="display:table-cell;width:15%;">';
                                            echo '<input  style="background-color: white;  border: white ; font-size: 15px; font-weight: bold;text-align:center; width:100%" type="number" name="NCmd" id="NCmd" value="'.$code.'" readonly/> <br>'; 
                                        echo '</div>';
                                        echo '<div  style="display:table-cell;width:20%">';
                                            echo '<input align="center" style="background-color: white;  border: #ADB5BD ; font-size: 15px; font-weight: bold;text-align:center;width:100%" type="number" name="NbrArticle" id="NbrArticle" value="'.$nbr.'" readonly/> <br>';            
                                        echo '</div>';
                                        echo '<div  style="display:table-cell;width:20%">';
                                            echo '<input align="center" style="background-color: white;  border: #ADB5BD ; font-size: 15px; font-weight: bold;text-align:center;width:100%" type="text" name="recupere" id="'.$idCmd.'" value="NON" readonly/> <br>';            
                                        echo '</div>';
                                        echo '<div  style="display:table-cell;width:20%">';
                                            echo '<input style="margin-top:7px;background-color:#41C821; border:#41C821;text-align:center" type="button" name="but" class="btn btn-primary" id="recuperation" value="√" onClick="recuperer(\''.$idCmd.'\')"/> 
                                            <input style="margin-top:7px;background-color:red; border:#41C821" type="button" name="but" class="btn btn-primary" id="nonrecuperation" value="X" onClick="nonrecuperer(\''.$idCmd.'\')"/><br>';
                                        echo '</div>';
                                        echo '<div  style="display:table-cell;width:20%">';
                                            echo '<input style="margin-top:7px;text-align:center" type="button" name="button" class="btn btn-primary" id="collecte" value="Livrer" onClick="livrer(\''.$idCmd.'\')"/> <br>';
                                        echo '</div>
                                    </div>
                                </div>
                                </form> <br>';
                                
                        }
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
            function nonpayer(id)
            {
                document.getElementById(id).value = "NON";
                
            }
            </script>

            <script type="text/javascript">
            function nonrecuperer(id)
            {
                document.getElementById(id).value = "NON";
                
            }
            </script>

            <script type="text/javascript">
            function collecter(id)
            {
                var paye = document.getElementById(id).value;
                var affiche = 1;
                if(paye == "NON")
                {
                    var conf = confirm("La commande numéro "+id+" sera considérer comme non collectée, Voulez vous poursuivre");
                    if(conf == true)
                    {
                         affiche = 1;
                        
                    }
                    else
                    {
                         affiche = 0;
                        
                    }
                }
                $.ajax({
    
                    url : 'sendhelloo.php',
                    type : 'POST',
                    data : {'action': id , 'payer': paye, 'affiche': affiche},
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
                var dolivre = 1;
                $.ajax({
    
                    url : 'sendhelloo.php',
                    type : 'POST',
                    data : {'action': id , 'recuperer': recupere, 'dolivre': dolivre},
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
