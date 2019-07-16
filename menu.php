<?php
require_once('controller/selectProductForMenu.php');
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
              <span class="mr-3"><a href="tel://#"> <span class="icon-phone mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">(+225)  08 59 91 89</span></a></span>
              <span><a href="#"><span class="icon-envelope mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">jesussauve1995@gmail.com</span></a></span>
            </p>

          </div>
        </div>
      </div>
    </div>
    <div class="" id="menu-suzsand">
    </div>
    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">
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
              </ul>
            </nav>
          </div>
          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>
        </div>
      </div>
    </header>
    <div class="site-blocks-cover overlay" style="background-image: url(images/suzsand.jpg);" data-aos="fade" data-stellar-background-ratio="1">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
            <div class="row mb-4">
              <div class="col-md-12" style="text-align: center;">
                <h1>Bienvenue au Menu de Suzsand </h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-5 mb-5">
      <div class="container mb-5">
        <div class=""><hr></div>
        <div class="row justify-content-center">
          <div class="col-md-6 text-center">
            <h2 class="section-title mb-3">Menu Suz'Sand</h2>
          </div>
        </div>
       <div class=""><hr></div>
    </div>
      <div class="row">
      <?php
          foreach ($data as $product)
        {
          echo"
          <div class='col-lg-4 col-md-6 mb-5'>
          <a href='commande/commande.php?id=".$product["id"]."'>
            <div class='product-item'>
              <figure onchange='click('#clic');' style='cursor:pointer;' id='img'>
                <img   src='imageRepas/".$product["photoMenu"]."' alt='Image' class='img-fluid'>
              </figure>
              <div class='px-4'>
                <h3 class='libelleMenu' id='lb' style='cursor:pointer;' onchange='click('#clic');'>".$product["libelleMenu"]."</h3>
                <p class='mb-4'>".$product["descriptionMenu"]."</p>
                <p class='mb-4' style='font-weight:bold; font-size:20px'>".$product["prix"]." <strong> FCFA</strong></p>
                <div>
                  <form method='get' action='commande/commande.php'>
                    <input type='hidden' name='id' value='".$product["id"]."'>
                    <button type='submit' class='btn btn-black mr-1 rounded-0' id='clic'>Commander</button>
                  </form>
                </div>
              </div>
            </div>
          </a>
          </div>
            ";
        }
       ?>
      </div>
    </div>
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">A propos de nous</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
              </div>
              <div class="col-md-3 ">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">A propos de nous</a></li>
                  <li><a href="#">Nos services</a></li>
                  <li><a href="#">Temoignage</a></li>
                  <li><a href="#">Contactez-nous</a></li>
                </ul>
              </div>
              <div class="col-md-4">
                <h2 class="footer-heading mb-4">Suivez-nous sur</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>

        </div>
        <div class="row text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits réservés | Ce modèle est fait avec<i class="icon-heart" aria-hidden="true"></i> par <a href="https://colorlib.com" target="_blank" >SIC design</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>


  <script src="js/main.js"></script>
  <script src="admin/js/removeAlert.js"></script>
  </body>
</html>
