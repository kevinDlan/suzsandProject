<?php
require('_header.php');
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Suz'sand</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="images/n.jpg" rel="icon" type="image/jpg">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet"href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/cartpage.css">
    <link rel="stylesheet"href="css/bootstrap.min.css">
    <link rel="stylesheet"href="css/jquery-ui.css">
    <link rel="stylesheet"href="css/owl.carousel.min.css">
    <link rel="stylesheet"href="css/owl.theme.default.min.css">
    <link rel="stylesheet"href="css/owl.theme.default.min.css">
    <link rel="stylesheet"href="css/styles.css">
    <link rel="stylesheet"href="css/jquery.fancybox.min.css">

    <link rel="stylesheet"href="css/bootstrap-datepicker.css">

    <link rel="stylesheet"href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">

    <link rel="stylesheet"href="css/aos.css">

    <link rel="stylesheet"href="css/style.css">
    <link rel="stylesheet"href="css/commande.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <script  src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
    $(function() {
      $("#popModel").modal('show');
    });
    $(function() {
      $("#popModel2").modal('show');
    });

    $(function(){
        $('#nos-produits').click(
          function(){
            $('.products-sect').click();
          }
          );
      })



    </script>
    <style type="text/css">
      .libelleMenu
      {
        color: #000;
      }
      .libelleMenu:hover
      {
        color: #f16821;
        transition: .3s all ease;
      }
      .btn-orange {
      color: #fff !important;
      background-color: #f16821;
      border-color: #f16821;
      border-width: 3px;


    }

      .btn-orange:hover {
      color: #000 !important;
      background-color: transparent;
      transition: .5s all ease;
       }


    </style>



  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <?php if (isset($_SESSION['vaide'])) { ?>


    <div id="popModel" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      <div class="modal-body" style="color: #5AC868;">
        <p class="text-center">
          <i class="far fa-check-circle fa-10x"></i>

        </p>
        <h4 class="text-center" style="color: black;">
          Félicitation votre commande a bien été enregistrer, vous serez contacté dans quelque instant !
        </h4>


      </div>
      <div class="modal-footer">

        <button type="submit" data-dismiss="modal" style="font-size: 15px; margin-top: 15px;" class="btn btn-black mr-1">Fermer</button>
      </div>
    </div>

  </div>
</div>

  <?php };
  ?>



  <?php if (isset($_GET['valide'])) { ?>


    <div id="popModel2" class="modal fade" role="dialog" style="color: #ff4949;">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      <div class="modal-body" >
        <p class="text-center">
          <img src="images/prohibition.png" height="150px" width="150px">

        </p>
        <h1 class="text-center">
          Erreur de commande !
        </h1>


      </div>
      <div class="modal-footer">

        <button type="submit" data-dismiss="modal" style="font-size: 15px; margin-top: 15px;" class="btn btn-black mr-1">Fermer</button>
      </div>
    </div>

  </div>
</div>

  <?php };

  ?>

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
              <span class="mr-3"><a href="tel://#"><span class="icon-phone mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">(+225)  08 59 91 89</span></a></span>
              <span><a href="#"><span class="icon-envelope mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">jesussauve1995@gmail.com</span></a></span>
            </p>

          </div>
        </div>
      </div>
    </div>

    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">
                 <?php
                   require_once('errorAlert.php');
                  ?>
      <div class="container-fluid" style="height: 80px;">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo">
            <a href="index.php" class="text-black mb-0">
              <img src="images/n.jpg" class="logo">
            </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Accueil</a></li>
                <li><a href="#menu-suzsand" class="nav-link products-sect">Menu Suzsand</a></li>
                <li><a href="#about-section" class="nav-link">A propos de nous</a></li>
                <li><a href="#testimonials-section" class="nav-link">Temoignage</a></li>
                <li><a href="#contact-section" class="nav-link">Contactez-nous</a></li>
                <li>
                  <a href="panier.php">
                    <i style="font-size:40px;color:#f16821;" class="fas fa-shopping-cart">
                    </i>
                    <?php if($panier->count()>0): ?>
                    <sup style ='font-size:15px; font-weight:bold;'>
                      <span id="count" class='badge badge-pill badge-danger'>
                        <?=$panier->count(); ?>
                      </span></sup>
                    <?php endif; ?>
                    </a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>
        </div>
      </div>
    </header>
