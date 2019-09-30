<?php
        if(isset($_POST['submit']))
        { 
            $qshirt= $_POST['qshirt'];
            $qpull= $_POST['qpull'];
            $qpantalon= $_POST['qpantalon'];
            $qchemise= $_POST['qchemise'];
            $qshort= $_POST['qshort'];
            $qveste= $_POST['qveste'];
            $pshirt = $_POST['pshirt'];
            $ppull = $_POST['ppull'];
            $ppantalon = $_POST['ppantalon'];
            $pchemise = $_POST['pchemise'];
            $pshort = $_POST['pshort'];
            $pveste = $_POST['pveste'];
            $TTC = $_POST['TTC'];
            $Dcol= $_POST['dcol'];
            $Dliv= $_POST['dliv'];
            $Hcol= $_POST['hcol'];
            $Hliv= $_POST['hliv'];
                $cmpt = 0;
                

                $mysqli = mysqli_connect("localhost", "root", "", "washit");
//Check connection
                if(!$mysqli){

				echo "Erreur de connexion à la base de données.";

			    } else {

                $query="select cite,id from users where actif =1";
                $result0=mysqli_query($mysqli,$query);
                $obj0= mysqli_fetch_object($result0);
                $adresse = $obj0->cite;
                $idUser = $obj0->id;

                $sql2="INSERT INTO commandes (idUser,dateCol,heureCol,dateLiv,heureLiv,adresse,prixTotal) VALUES ('".$idUser."','".$Dcol."' ,'".$Hcol."','".$Dliv."','".$Hliv."','".$adresse."','".$TTC."')";
                $res2 = mysqli_query($mysqli,$sql2);  

                $sql3="select idCommande from commandes where dateCol='".$Dcol."' and heureCol='".$Hcol."' and dateLiv='".$Dliv."' and heureLiv='".$Hliv."' and adresse='".$adresse."' and prixTotal='".$TTC."'";
                $result=mysqli_query($mysqli,$sql3);
                $obj= mysqli_fetch_object($result);
                $idCommande = $obj->idCommande;

                $sql4="INSERT INTO articles (idCommande,article,quantite,prix) VALUES ('".$idCommande."','T-SHIRT' ,'".$qshirt."','".$pshirt."')";
                $res4 = mysqli_query($mysqli,$sql4); 
             
                $sql5="INSERT INTO articles (idCommande,article,quantite,prix) VALUES ('".$idCommande."','PULL' ,'".$qpull."','".$ppull."')";
                $res5 = mysqli_query($mysqli,$sql5); 

                $sql6="INSERT INTO articles (idCommande,article,quantite,prix) VALUES ('".$idCommande."','PANTALON' ,'".$qpantalon."','".$ppantalon."')";
                $res6 = mysqli_query($mysqli,$sql6); 

                $sql7="INSERT INTO articles (idCommande,article,quantite,prix) VALUES ('".$idCommande."','CHEMISE' ,'".$qchemise."','".$pchemise."')";
                $res7 = mysqli_query($mysqli,$sql7); 

                $sql8="INSERT INTO articles (idCommande,article,quantite,prix) VALUES ('".$idCommande."','SHORT' ,'".$qshort."','".$pshort."')";
                $res8 = mysqli_query($mysqli,$sql8); 

                $sql9="INSERT INTO articles (idCommande,article,quantite,prix) VALUES ('".$idCommande."','VESTE' ,'".$qveste."','".$pveste."')";
                $res9 = mysqli_query($mysqli,$sql9); 
                
                /*while($cmpt <6)
                {
                    $sql10 = "DELETE FROM articles WHERE quantite =0 ";
                    $result10=mysqli_query($mysqli,$sql10);
                   
                }*/
                echo "<script type= 'text/javascript'>alert('Votre commande est faite avec succes');</script>";
               
                header('location: homeconnected.html');
            }
        }
        ?>