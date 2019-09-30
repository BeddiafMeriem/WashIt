<!-- === BEGIN HEADER === -->

<?php
            if(isset($_POST['submit']))
            { 

$name = $_POST['name'];
$username =$_POST['username'];
$password =$_POST['password'];
$confirm_password =$_POST['confirm_password'];
$tel = $_POST['telephone'];
$wilaya = $_POST['wilaya'];
$cite = $_POST['cite'];




$mysqli = mysqli_connect("localhost", "root", "", "washit");
//Check connection
if(!$mysqli){

				echo "Erreur de connexion à la base de données.";

} else {


    $query="select COUNT(*) as existe from users where username='".$username."'";
    $result=mysqli_query($mysqli,$query);
    $obj= mysqli_fetch_object($result);
    $existe = $obj->existe;
    if($existe != 0)
    {
        echo "<script type= 'text/javascript'>alert('Le mail est déjè utilisé.');</script>";
      
       
            
    }
    else{
    
        // Validate password
            
        if(strlen(trim($_POST["password"])) < 6){
             
            echo "<script type= 'text/javascript'>alert('Le mot de passe doit avoir au minimum 6 caractères.');</script>";
            
        }
            
        else{

            if($password != $confirm_password){
            
            echo "<script type= 'text/javascript'>alert('Password did not match.');</script>";
            
            }
            else{
                
    $sql3="INSERT INTO users (name,username,password,telephone,wilaya,cite,actif,type) VALUES ('".$name."','".$username."' ,'".$password."','".$tel."','".$wilaya."','".$cite."',1,'etud')";
    $res2 = mysqli_query($mysqli,$sql3);  

    $query0="select * from users where username='".$username."' and password='".$password."'";
      $result0=mysqli_query($mysqli,$query0);
      $obj0= mysqli_fetch_object($result0);
      if($obj0->username == $_POST['username'] && $obj0->password == $_POST['password'])
       {
    $query1="update users set actif = 1 where username='".$username."'";
    $result1=mysqli_query($mysqli,$query1);
    $obj1= mysqli_fetch_object($result1); 
    $typ = "etud";
    $query2="update users set actif = 0 where username <>'".$username."' and type = '".$typ."' ";
    $result2=mysqli_query($mysqli,$query2);
    $obj2= mysqli_fetch_object($result2); 
   

    echo "<script type= 'text/javascript'>alert('Inscription réussite.');</script>";
            
     header('Location: hommeconnectednonotif.html');
       }
            }
            
        }
        
    }


}
            
}    



?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>WashIt</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="assets/img/title.png" />
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=PT+Sans" type="text/css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">

        
    </head>
    <body>
        <div id="body-bg">
            <ul class="social-icons pull-right hidden-xs">
                <li class="social-rss">
                    <a href="#" target="_blank" title="RSS"></a>
                </li>
                <li class="social-twitter">
                    <a href="#" target="_blank" title="Twitter"></a>
                </li>
                <li class="social-facebook">
                    <a href="#" target="_blank" title="Facebook"></a>
                </li>
                <li class="social-googleplus">
                    <a href="#" target="_blank" title="GooglePlus"></a>
                </li>
            </ul>
            <div id="pre-header" class="container" style="height:0px">
            </div>
            <div id="header">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html" title="">
                                <<img  src="assets/img/logo2.png" style="width:25%" alt="Logo" />
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>
                </div>
            </div>
            <!-- Top Menu -->
            <div id="hornav" class="container no-padding">
                <div class="row">
                    <div class="col-md-12 no-padding">
                        <div class="text-center visible-lg">
                            <ul id="hornavmenu" class="nav navbar-nav">
                                <li>
                                    <a href="index.html" class="fa-home" id="ecriture_navbar">Accueil</a>
                                </li>
                                <li>
                                    <a href="presentation.html" class="fa-gears">Qui Somme Nous</a>
                                </li>
                                <li>
                                    <a href="inscription.php" class="fa-copy">Inscription</a>
                                </li>
                                <li>
                                    <a href="connexion.html" class="fa-th">Connexion</a>
                                </li>
                                
                                <li>
                                    <a href="contact.html" class="fa-comment">Contactez Nous</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Menu -->
      
            <!-- === END HEADER === -->
            <!-- === BEGIN CONTENT === -->
            <div id="content" style="margin-top:-10px">
               
                <div class="container background-gray-lighter">
                    <h2 style="padding-bottom:20px">
                        Inscription
                    </h2>

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <fieldset>
                                <label>Nom*</label>
                                <input class="form-control" type="text" name="name" id="name" placeholder="Entrer votre nom complet" required/> <br>    
                                

                                <label for="mail">E-mail*</label>
                                <input class="form-control" type="email" name="username" id="username" placeholder="Entrer votre mail" required/> <br>
                                
                                
                                <script type="text/javascript">
                            
                 
                                var email = document.getElementById("username");

                                email.addEventListener("keyup", function (event) {
                                if(email.validity.typeMismatch) {
                                email.setCustomValidity("Il faut introduire un E-mail");
                                } else {
                                email.setCustomValidity("");
                                }
                                });
                                
                                </script>

                                <label>Mot de passe*</label>
                                <input class="form-control" type="password" name="password" id="password" required minlength="6" placeholder="Entrer votre mot de passe" required/> 
                                <span id="aideMdp"></span>
                                <script type="text/javascript">
                                // Vérification de la longueur du mot de passe saisi
document.getElementById("password").addEventListener("input", function (e) {
    var mdp = e.target.value; // Valeur saisie dans le champ mdp
    var longueurMdp = "faible";
    var couleurMsg = "red"; // Longueur faible => couleur rouge
    if (mdp.length >= 6) {
        longueurMdp = "suffisante";
        couleurMsg = "green"; // Longueur suffisante => couleur verte
    } 
    var aideMdpElt = document.getElementById("aideMdp");
    aideMdpElt.textContent = "Longueur : " + longueurMdp; // Texte de l'aide
    aideMdpElt.style.color = couleurMsg; // Couleur du texte de l'aide
});
document.getElementById("password").addEventListener("blur", function (e) {
    document.getElementById("aideMdp").textContent = "";
});
</script> <br>
                                
                                <label>Confirmer le mot de passe*</label>
                                <input class="form-control" type="password" name="confirm_password" id="confirm_password" placeholder="ntrer votre mot de passe" required/> 
                                
                                <span id="aideMdpC"></span> 

                                <script type="text/javascript">
                                // Vérification de la longueur du mot de passe saisi
document.getElementById("confirm_password").addEventListener("input", function (e) {
    var pswd = document.getElementById("password").value;
    var mdp = e.target.value; // Valeur saisie dans le champ mdp
    var correspondance= "non correspondant";
    var longueurMdp = "faible";
    var couleurMsg = "red"; // Longueur faible => couleur rouge
    if (mdp.length >= 6 && mdp == pswd) {
        longueurMdp = "suffisante";
        correspondance = "correspondant";
        couleurMsg = "green"; // Longueur suffisante => couleur verte
    } 
    if (mdp.length >= 6 && mdp != pswd) {
        longueurMdp = "suffisante";
        correspondance = " non correspondant";
        couleurMsg = "rouge"; // Longueur suffisante => couleur verte
    } 
 
    var aideMdpElt = document.getElementById("aideMdpC");
    aideMdpElt.textContent = "Longueur : " + longueurMdp  + " Mot de passe : " + correspondance; // Texte de l'aide
    aideMdpElt.style.color = couleurMsg; // Couleur du texte de l'aide


});

document.getElementById("confirm_password").addEventListener("blur", function (e) {
    document.getElementById("aideMdpC").textContent = "";
});
</script> <br>
                                <label>Numéro de téléphone*</label>
                                <input class="form-control" type="number" name="telephone" id="telephone" placeholder="Entrer votre numéro de téléphone" required/> <br>
                                <label>Wilaya*</label>
                                <select class="form-control"  name="wilaya" id="wilaya" placeholder="Entrer votre wilaya" required/> 
                                    <option>Alger</option>
                                </select><br>
                                <label>Résidence universitaire*</label>
                                <select class="form-control"  name="cite" id="cite" placeholder="Entrer votre résidence universitaire" required/>
                                    <option>Bab Ezzouar 05</option>
                                    <option>Bouraoui Amar</option>
                                    <option>EL-ALIA</option>
                                    <option>19 Mai 1956</option>

                                    <option>Baya Hocine</option>
                                    <option>Dergana</option>
                                    <option>Abdelkader Belarbi</option>
                                    <option>Bab Ezzouar 03</option>

                                    <option>Taleb Abderahmane 01</option>
                                    <option>Taleb Abderahmane 02</option>
                                    <option>Taleb Abderahmane 03</option>
                                    <option>Jeune Fille</option>

                                    <option>Vieux Kouba</option>
                                    <option>Garidi</option>
                                    <option>Mhammed Youcef</option>
                                    <option>Said Hamdine</option>

                                    <option>Dely Brahim 01</option>
                                    <option>Dely Brahim 02</option>
                                    <option>Beni Messous</option>
                                    <option>Hydra 03</option>
                                    
                                    <option>Ouled Fayet 01</option>
                                    <option>Ouled Fayet 02</option>
                                    <option>Ouled Fayet 03</option>
                                    <option>Sidi Abdellah</option>
                                </select> <br>
                                <button style="margin-bottom: 40px" class="btn btn-primary" type="submit" id="btn" name="submit">Inscription</button> <br>
                                <a href="connexion.html" id="inscription-cnnxn"> Vous avez déjà un compte </a> <br>
            
                        </fieldset>
                    </form>
                </div>
                <div class="container background-gray-lighter"> 
                   
                </div>
                <!--
                <div class="container background-white">
                    <div class="row padding-vert-40">
                        <div class="col-md-12">
                            <h2 class="animate fadeIn text-center">WE ARE CURRENTLY HIRING!</h2>
                            <p class="animate fadeIn text-center">If you like to work with a creative team in a lively and friendly enviroment then call us today!.</p>
                            <p class="animate fadeInUp text-center">
                                <button class="btn btn-primary btn-lg" type="button">View Details</button>
                            </p>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === -->
            <div id="content-bottom-border" class="container">
            </div>
            <div id="base">
                <div class="container padding-vert-30 margin-top-60">
                    <div class="row">
                        <!-- Contact Details -->
                        <div class="col-md-4 margin-bottom-20">
                            <h3 class="margin-bottom-10" >Contactez nous via</h3>
                            <p>
                                <span class="fa-phone">Telephone:</span>(213)558 863 413
                                <br>
                                <span class="fa-envelope">Email:</span>
                                <a href="mailto:info@washit.com">info@washit.com</a>
                                <br>
                                <span class="fa-link">Website:</span>
                                <a href="http://www.washit.com">www.washit.com</a>
                            </p>
                            <br>
                            
                            <h3 class="margin-bottom-10" >Localisation</h3>
                            <p class="p">Cheraga,
                                <br>Alger,
                                <br>Algérie
                                </p>
                        </div>
                        <!-- End Contact Details -->
            
                        <div class="col-md-1"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>



            <!-- JS -->
            <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->