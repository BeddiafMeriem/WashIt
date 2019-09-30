<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>WashIt</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
 
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="assets/img/title.png" />
  <style type="text/css">
  .mdi-delete{
    color:red;
    width:20px;
    font-size:25px;
    cursor: pointer;
  }
  .mdi-sort{
    color:darkgray;
    width:10px;
    font-size:20px;
    cursor: pointer;
  }
  .lie{
    cursor: pointer;
  }
table.dataTable thead .sorting:after,
table.dataTable thead .sorting:before,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_desc:before,
table.dataTable thead .sorting_desc_disabled:after,
table.dataTable thead .sorting_desc_disabled:before {
  bottom: .5em;
}
th{
  cursor:pointer;
}
  </style>
</head>

<body>
  <div class="container-scroller" id="cach">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="Admin_index.php" style="color:#78B3DC">
           Administrateur
        </a>
        <a class="navbar-brand brand-logo-mini" href="Admin_index.php">
          <img src="images/logo-mini.svg" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
         
          
          
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-file-document-box"></i>
              <span class="count">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <div class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">Vous avez 7 e-mails
                </p>
                <span class="badge badge-info badge-pill float-right">Voir tout</span>
              </div>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark">David Grey
                    <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark">Tim Cook
                    <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    New product launch
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark"> Johnson
                    <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell"></i>
              <span class="count">4</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 4 new notifications
                </p>
                <span class="badge badge-pill badge-warning float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-alert-circle-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">Application Error</h6>
                  <p class="font-weight-light small-text">
                    Just now
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="mdi mdi-comment-text-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">Settings</h6>
                  <p class="font-weight-light small-text">
                    Private message
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="mdi mdi-email-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">New user registration</h6>
                  <p class="font-weight-light small-text">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">HAMZA KHETTACHE</span>
              <img class="img-xs rounded-circle" src="images/faces/face1.jpg" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                  </div>
                </div>
              </a>
              <a class="dropdown-item mt-2">
                Manage Accounts
              </a>
              <a class="dropdown-item">
                Change Password
              </a>
              <a class="dropdown-item">
                Check Inbox
              </a>
              <a class="dropdown-item">
                Sign Out
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper" style="background-color:#F2F2F2">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="images/faces/face1.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">HAMZA KHETTACHE</p>
                  <div>
                    <small class="designation text-muted" style="color:white !important">Manager</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
              
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Admin_index.php" >
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Tableau de bord</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Admin_Cites.php">
              <i class="menu-icon mdi mdi-home-modern"></i>
              <span class="menu-title">Cités Universitaires</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Admin_chauff.php">
              <i class="menu-icon mdi mdi-truck"></i>
              <span class="menu-title">Chauffeurs</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Admin_lav.php">
              <i class="menu-icon mdi mdi-washing-machine"></i>
              <span class="menu-title">Laveries</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Admin_users.php">
              <i class="menu-icon mdi mdi-account-circle"></i>
              <span class="menu-title">Utilisateurs</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Admin_msg.php">
              <i class="menu-icon mdi mdi-message-text"></i>
              <span class="menu-title">Messages</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="anomalies.php">
              <i class="menu-icon mdi mdi-alert"></i> 
              <span class="menu-title">Anomalies</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      
              <div class="card" id="car" style="width:90%;margin-left:5%; margin-right:5%;margin-top:5%;margin-bottom:5%">
                <div class="card-body">
                  <h2 class="card-title"> Les chauffeurs </h2>
                  <div>
                       <input type="text" class="search form-control" style="width:300px;float:right;margin-bottom:20px;border: 1px solid darkgray;color:black" id="myInput" onkeyup="myFunction()" placeholder="Rechercher...">
                  </div>
   
                  <div class="table-responsive">
                    <table id="myTable" class="table table-hover">
                      <thead>
                        <tr>
                          <th onclick="sortTable(0)">Nom</th>
                          <th onclick="sortTable(1)">E-mail</th>
                          <th onclick="sortTable(2)">Mot de passe</th>
                          <th onclick="sortTable(3)">Téléphone</th>
                          <th onclick="sortTable(4)">Wilaya</th>
                          <th onclick="sortTable(5)">Statut</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      $link=mysqli_connect("localhost","root","","washit") or die("<p>Connection impossible : ".mysql_error(). "</p>") ; 
                      $i = 0;
                      $query="select * FROM users where type='CHAUFFEUR' and usersupp=0";
                      $result=mysqli_query($link,$query);
                      while($row=$result->fetch_assoc())
                      {
                        echo "<tr id='tr$i'>";
                          echo "<td id='name$i'>".$row['name']."</td>";
                          echo "<td id='username$i'>".$row['username']."</td>";
                          echo "<td id='pswd$i'>".$row['password']."</td>";
                          echo "<td id='tel$i' style='text-align:center'>0".$row['telephone']."</td>";
                          echo "<td id='wil$i'>".$row['wilaya']."</td>";
                          $actif = $row['actif'];
                          $statut = "hors ligne";
                          if($actif == 1){$statut = "en ligne";}
                          echo "<td id='stat$i'>".$statut."</td>";
                          echo "<td><img style='height:25px;width:25px' class='lie' src='assets/img/modifier.png' onclick='modifier(\"".$i."\")'></td>";
                          echo '<td><i class="menu-icon mdi mdi-delete" style="" onclick="supprimer(\''.$i.'\')"></i></td>
                          
                        </tr>';
                        $i = $i+1;
                      }
                      ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card" style="width:90%;margin-left:5%; margin-right:5%;margin-top:5%;margin-bottom:5%">
                    <div class="card-body">
                      <h4 class="card-title">Ajouter une chauffeur</h4>
                      <p class="card-description">
                        
                      </p>
                      <form class="forms-sample">
                        <div class="form-group">
                          <label >Nom :</label>
                          <input type="text" class="form-control" id="nom" placeholder="Enter le nom ">
                        </div>
                        <div class="form-group">
                          <label >E-mail :</label>
                          <input type="email" class="form-control" id="mail" placeholder="Enter l'e-mail">
                        </div>
                        <div class="form-group">
                          <label >Mot de passe :</label>
                          <input type="text" class="form-control" id="mdp" placeholder="Enter le mot de passe">
                        </div>
                        <div class="form-group">
                          <label >Téléphone :</label>
                          <input type="number" class="form-control" id="tel" placeholder="Enter le numéro de téléphone">
                        </div>
                        <div class="form-group">
                          <label >Wilaya :</label>
                          <input type="text" class="form-control" id="wil" placeholder="Enter la wilaya ">
                        </div>
                       
                        <div class="form-group">
                    <label >Sataut :</label>
                    <select class="form-control" id="stat">
                      <option>0</option>
                      <option>1</option>
                      
                    </select>
                  </div>
                 
                        <button type="submit" class="btn btn-success mr-2" onClick="ajouter()">Ajouter</button>
                        <button class="btn btn-light">Annuler</button>
                      </form>
                    </div>
                  </div>
            </div>
      <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
  <!-- End custom js for this page-->

<script type="text/javascript">
function supprimer(i) {
   var idtr = document.getElementById("tr"+i).innerHTML;
   var name = document.getElementById("name"+i).innerHTML;
   var username = document.getElementById("username"+i).innerHTML;
   var pswd = document.getElementById("pswd"+i).innerHTML;
   var tel = document.getElementById("tel"+i).innerHTML;
   var wilaya = document.getElementById("wil"+i).innerHTML;
   var statut = document.getElementById("stat"+i).innerHTML;
   var type = "chauffeur";
   var conf = confirm("Le chauffeur "+name+" sera supprimée de la liste des chauffeurs, Voulez vous poursuivre");
                    if(conf == true)
                    {
                      $.ajax({
    
                        url : 'supcite.php',
                        type : 'POST',
                        data : {'name': name , 'username': username, 'pswd': pswd, 'tel': tel, 'wilaya': wilaya, 'statut': statut, 'type': type},
                        success : function(data){ 
                        document.location.reload();
                        }
                      });
                        
                    }
                    else
                    {
                      alert("Suppression annulée");   
                    }
}
</script>


<script type="text/javascript">
function ajouter() {
   
   var name = document.getElementById("nom").value;
   var username = document.getElementById("mail").value;
   var pswd = document.getElementById("mdp").value;
   var tel = document.getElementById("tel").value;
   var wilaya = document.getElementById("wil").value;
   var statut = document.getElementById("stat").value;
   var type = "CHAUFFEUR";
  
                      $.ajax({
    
                        url : 'ajouter.php',
                        type : 'POST',
                        data : {'name': name , 'username': username, 'pswd': pswd, 'tel': tel, 'wilaya': wilaya, 'statut': statut, 'type': type},
                        success : function(data){ 
                        document.location.reload();
                        }
                      });
                        
}
</script>

<script type="text/javascript">
function myFunction() {
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
}
</script>
}
</script>
<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  // Set the sorting direction to ascending:
  dir = "asc"; 
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /* Check if the two rows should switch place,
      based on the direction, asc or desc: */
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++; 
    } else {
      /* If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again. */
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>

            <script type="text/javascript">
            var ancien="";
            function modifier(i){

              var idtr = document.getElementById("tr"+i).innerHTML;
              var name = document.getElementById("name"+i).innerHTML;
              var username = document.getElementById("username"+i).innerHTML;
              ancien=username;
              var pswd = document.getElementById("pswd"+i).innerHTML;
              var tel = document.getElementById("tel"+i).innerHTML;
              var wilaya = document.getElementById("wil"+i).innerHTML;
              var statut = document.getElementById("stat"+i).innerHTML;

              document.getElementById("name").value= name;
              document.getElementById("username").value= username;
              document.getElementById("wilaya").value= wilaya;
              document.getElementById("pswd").value= pswd;
              document.getElementById("tel").value= tel;
              document.getElementById("statut").value= statut;
              document.getElementById("car").style.display="none";
                document.querySelector('.bg-bg').style.display = 'flex';
            };

            function saveModify()
            {
              var nom1 = document.getElementById("nom").value;
              var com1 = document.getElementById("commune").value;
              var wil1 = document.getElementById("wilaya").value;
              var ord1 = document.getElementById("ordre").value;
              $.ajax({
                
                url : 'modifycite.php',
                type : 'POST',
                data : {'nom': nom1 , 'commune': com1, 'wilaya': wil1, 'ordre': ord1, 'ancien': ancien},
                success : function(data){ 
                  document.location.reload();
                }
              });
            }
            </script>

            <script type="text/javascript">
            function cacherModifier(){
                document.querySelector('.bg-bg').style.display = 'none';
                document.getElementById("car").style.display="inline";
            }
            </script>

            


</body>
<div class="bg-bg" style="width:100%;height: 100%;background-color: rgba(0, 0, 0, 0.7);position: absolute;top: 0;justify-content: center;align-items: center; display:none">
                <div class="bg-content" style="width:40%;height: 300px;background-color: rgb(241, 241, 241);padding:30px;border-radius: 4px;text-align:center;margin-left:20%; margin-top:10%">
                    <div class="close" style="font-size:25px; margin-top:-8px;background-color: rgb(241, 241, 241)">
                    <button class="but-close" style="transform:rotate(45deg);background-color: rgb(241, 241, 241); border:0" type="button" onClick="cacherModifier()">+</button>
            
                    </div>
                     <form action="modifCite.php" method="POST">
                        <div style="display:table-row">
                         <div style="display:table-cell"> Nom : </div> <div style="display:table-cell;width:70%"><input class="form-control" style="width:100%" type="text" name="name" id="name" placeholder="Entrez le nouveau nom"></div> <br>
                         </div>
                         <div style="display:table-row">
                         <div style="display:table-cell"> E-mail : </div> <div style="display:table-cell;width:70%"><input class="form-control" style="width:100%;height:30px" type="text" name="username" id="username" placeholder="Entrez la nouvelle adresse mail"> </div> <br>
                         </div>
                         <div style="display:table-row">
                         <div style="display:table-cell"> Mot de passe : </div> <div style="display:table-cell;width:70%"><input class="form-control" style="width:100%" type="text" name="pswd" id="pswd" placeholder="Entrez le nouveau mot de passe"> </div> <br>
                         </div>
                         <div style="display:table-row">
                         <div style="display:table-cell"> Wilaya : </div> <div style="display:table-cell;width:70%"><input class="form-control" style="width:100%" type="text" name="wilaya" id="wilaya" placeholder="Entrez la nouvelle wilaya"> </div> <br>
                         </div>
                         <div style="display:table-row">
                         <div style="display:table-cell"> Téléphone : </div> <div style="display:table-cell;width:70%"><input class="form-control" style="width:100%" type="text" name="tel" id="tel" placeholder="Entrez le nouveau numéro"> </div> <br>
                         </div>
                         <div style="display:table-row">
                         <div style="display:table-cell"> Statut : </div> <div style="display:table-cell;width:70%">   
                            <select class="form-control" style="width:100%" name="statut" id="statut" value="">
                                <option> en ligne </option>
                                <option> hors ligne </option>
                            </select> </div> </div> <br>
                         <button  class="btn btn-primary" style="margin-top:0px" type="button" id="btn" name="btn" onclick="saveModify()">Sauvegarder</button>
            
                     </form>

                     <?php

                     ?>
                </div>
            </div>
</html>