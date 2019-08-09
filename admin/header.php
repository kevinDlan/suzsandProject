<?php session_start();?>
<?php if(isset($_SESSION['login'])):?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Administration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../images/n.jpg" rel="icon" type="image/jpg">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/loginform.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/searchbar.css">
    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <script type="text/javascript">
          function chooseFile(x){
             $(x).parents('.img_viewer').children('input[type="file"]').click();
                                      }
        function show_apercu(x){
          var files = jQuery(x)[0].files;
            if(files.length > 0){
               var file = files[0];
               if(file.size<=4*1024*1024){
                 var file = files[0];
                 $(x).prevAll('.file-name').html(file.name+" "+parseInt(file.size/1024)+"  KO");
                 $(x).prevAll('.image_apercu').attr('src', window.URL.createObjectURL(file));
                 $(x).prevAll('.image_apercu').show();
                 $(x).parents('.img_viewer').children('a').show();
               }else{
                     alert('l\'image que vous avez choisi est trop lourd. Elle doit etre inferieur a 4 MO');
                     }
                   }
                 }
  </script>
    <link rel="stylesheet" href="css/dropdown.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <div class="top-bar py-3 bg-light" id="home-section" style="height: 50px;">
      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 text-left">
            <ul class="social-media">
              <li><a target="_blank"  href="https://www.facebook.com/"><span class="icon-facebook"></span></a></li>
              <li><a  target="_blank" href="https://www.twitter.com/"><span class="icon-twitter"></span></a></li>
              <li><a  target="_blank" href="https://www.instagram.com/"><span class="icon-instagram"></span></a></li>
              <li><a  target="_blank" href="https://www.linkedin.com/"><span class="icon-linkedin"></span></a></li>
            </ul>
          </div>
          <div class="col-6">
            <p class="mb-0 float-right">
              <span class="mr-3"><a href="tel://#"> <span class="icon-phone mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">(+225)  08 59 91 89</span></a></span>
              <span><a href="#"><span class="icon-envelope mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">info.suz@sand.gmail.com</span></a></span>
            </p>

          </div>
        </div>
      </div>
    </div>
    <?php
         require_once('../errorAlert.php');
     ?>
     <?php
          if(isset($_SESSION['insertProductFailMsg']))
          {
            unset($_SESSION['insertProductFailMsg']);
          }elseif(isset($_SESSION['insertProductSuccesMsg'])){
            unset($_SESSION['insertProductSuccesMsg']);
          }elseif(isset($_SESSION['success_update'])){
            unset($_SESSION['success_update']);
          }
     ?>
    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">
      <div class="container-fluid" style="height: 80px;">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo">
            <a href="/index.php" class="text-black mb-0">
              <img src="../../images/n.jpg" class="logo">
            </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
               <li>
                    <a href="/admin/home.php">
                    <i class="fa fa-home"></i>
                     Accueil
                      </a>
               </li>
                 <li>
                   <a href="commandeList.php" class="nav-link">
                      Commandes
                      <sup style ='font-size:15px; font-weight:bold;'><span class='badge badge-pill badge-danger countCmdNotif'></span></sup>
                    </a>
                  </li>
                  <li>
                     <div class="dropdown">
                        <a href="" class="nav-link dropdown-item">
                        Commande traitée
                        <i class="fa fa-caret-down"></i>
                        </a>
                          <div class="dropdown-content">
                             <a class="dropdown-item" href="validateCmd.php">Commande validée</a>
                             <a href="cancelCmd.php">Commande annulée</a>
                           </div>
                     </div>
                   </li>
                <li><a href="contactusList.php" class="nav-link">
                  Messages
                  <sup style ="font-size:15px; font-weight:bold;"><span class='badge badge-pill badge-danger count'></span></sup>

                   </a>
                 </li>
                <li>
                  <a href="newletterlist.php" class="nav-link">
                       Letters
                          <sup style ='font-size:15px; font-weight:bold;'><span class='badge badge-pill badge-danger countNletterNotif'></span></sup>
                  </a>
                </li>
                 <li>
                    <div class="dropdown">
                       <a href="" class="nav-link dropdown-item">
                       Traitement produits
                       <i class="fa fa-caret-down"></i>
                       </a>
                         <div class="dropdown-content">
                            <a href="addItemMenu.php" class="dropdown-item">Ajout de produits au menu</a>
                            <a href="updateproduct.php">Mise à jours des données du produit</a>
                            <a href="deleteproduct.php">Suppression d'un produit</a>
                          </div>
                    </div>
                </li>
                <li>
                    <a href="index.php?logout">Déconnexion</a>
               </li>
              </ul>
            </nav>
          </div>
          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>
        </div>
      </div>
    </header>
  <?php
        unset($_SESSION['adminloginError']);
        else:
              header('Location:index.php');
        endif;
  ?>
