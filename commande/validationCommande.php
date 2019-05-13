<?php

      $name = $tel = $ville = $quartier = $nombre_plats = $prix ="";
      $nameError = $telError = $villeError = $quartierError = $nombre_platsError = $prixError ="";
      $isSuccess = false;


      if (isset($_POST['name'])) 
      {
        $isSuccess = true;

        if (isset($_POST['name'])) 
        {
          if (preg_match("#^[a-zA-Zàé]([a-zA-Zàé ]){1,}$#", $_POST['name'])) 
          {
            $name = htmlspecialchars($_POST['name']);
          }
          else
          {
            $nameError = "Nom et prénom incorect";
            $isSuccess = false;
          }
   
        }

        if (isset($_POST['tel'])) 
        {
          if (preg_match("#^[0-9]{2}([ ]?[0-9]{2}){3}$#", $_POST['tel'])) 
          {
            $tel = htmlspecialchars($_POST['tel']);
          }
          else
          {
            $telError = "Numéro incorect";
            $isSuccess = false;
          }
   
        }

        if (isset($_POST['ville'])) 
        {
          if (!empty($_POST['ville'])) 
          {
            $ville = htmlspecialchars($_POST['ville']);
          }
          else
          {
            $villeError = "ville incorect";
            $isSuccess = false;
          }
   
        }

        if (isset($_POST['quartier'])) 
        {
          if (!empty($_POST['quartier'])) 
          {
            $quartier = htmlspecialchars($_POST['quartier']);
          }
          else
          {
            $telError = "quartier incorect";
            $isSuccess = false;
          }
   
        }

        if (isset($_GET['sandwichs1'])) 
        { 
            
            $prix_inutaire = 1000;
          
        }
        if (isset($_GET['sandwichs2'])) 
        { 
            
            $prix_inutaire = 2000;
          
        }
        if (isset($_GET['sandwichs3'])) 
        { 
            
            $prix_inutaire = 3000;
          
        }
        if (isset($_GET['sandwichs4'])) 
        { 
            
            $prix_inutaire = 4000;
          
        }
        if (isset($_GET['sandwichs5'])) 
        { 
            
            $prix_inutaire = 5000;
          
        }
        if (isset($_GET['sandwichs6'])) 
        { 
            
            $prix_inutaire = 6000;
          
        }
        if (isset($_POST['nombre_plats'])) 
        {
          if (preg_match("#^[0-9]{1,}$#", $_POST['nombre_plats'])) 
          {
            $nombre_plats = htmlspecialchars($_POST['nombre_plats']);

            $prix = $nombre_plats * $prix_inutaire;
          }
          else
          {
            $nombre_platsError = "Numéro incorect";
            $isSuccess = false;
          }
   
        }

        

        if ($isSuccess) 
        {
          session_start();

          $_SESSION['name'] = $name;
          $_SESSION['tel'] = $tel;
          $_SESSION['ville'] = $ville;
          $_SESSION['quartier'] = $quartier;
          $_SESSION['nombre_plats'] = $nombre_plats;
          $_SESSION['prix'] = $prix;
          
        }
        else
        {
          $_SESSION['nameError'] = $nameError;
          $_SESSION['telError'] = $telError;
          $_SESSION['villeError'] = $villeError;
          $_SESSION['quartierError'] = $quartierError;
          $_SESSION['nombre_platsError'] = $nombre_platsError;
          $_SESSION['prixError'] = $prixError;
          header('Location: commande.php?invalide=true');

        }
      }

      
      
      
      
 ?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Suz'sand</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">

    <link rel="stylesheet" href="../css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="commande.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">



  
  

    <div>

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
              <li><a href="#" class=""><span class="icon-facebook"></span></a></li>
              <li><a href="#" class=""><span class="icon-twitter"></span></a></li>
              <li><a href="#" class=""><span class="icon-instagram"></span></a></li>
              <li><a href="#" class=""><span class="icon-linkedin"></span></a></li>
            </ul>
          </div>
          <div class="col-6">
            <p class="mb-0 float-right">
              <span class="mr-3"><a href="tel://#"> <span class="icon-phone mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">(+225)  08 59 91 89</span></a></span>
              <span><a href="#"><span class="icon-envelope mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">shop@yourdomain.com</span></a></span>
            </p>
            
          </div>
        </div>
      </div> 
    </div>

    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid" style="height: 80px;">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-black mb-0">
              <img src="../images/suzsand/12.png" style="width: 100px; height: 100px;">
            </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Accueil</a></li>
                <li><a href="#products-section" class="nav-link">Nos produits</a></li>
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

  
     
   

      <div style="height: 150px;"></div>
    
   
    

          <div class="container">
            <div class="row" style="padding-bottom: 50px; border-right: 3px dashed #f16821; border-left: 3px dashed #f16821; border-bottom: 3px dashed #f16821; color: #212529; font-size: 20px;">
              <div class="col-md-12">
                <div class="row">
              <div class="col-md-5 mx-auto">
                <p id="thank-you"  style="text-align: center; text-transform: uppercase; font-weight: bold;">Confirmer les informations suivantes afin de valider la commande !
                </p>
              </div>
               
            </div>
            <div class="row">
              <div class="col-md-5 mx-auto">
                <form method="post" class="mx-auto"  action="commande.php?valide=true" class=" mx-auto" style="font-size: 15px">
                    <p style="font-size: 22px">
                    <table>
                      
                        <tr>
                          <td><strong>Nom et prenom :</strong> </td><td><input type="text" size="25" style="text-align: center;" value="<?php echo $name; ?>" readonly></td>
                        </tr>
                        <tr>
                          <td><strong>Téléphone :</strong> </td><td><input type="text" readonly style="text-align: center;" size="25" value="<?php echo $tel; ?>"></td>
                        </tr>
                        <tr>
                          <td><strong>Ville :</strong> </td><td><input type="text" readonly style="text-align: center;" size="25" value="<?php echo $ville; ?>"></td>
                        </tr>
                        <tr>
                          <td><strong>Quartier :</strong> </td><td><input type="text" readonly style="text-align: center;" size="25" value="<?php echo $quartier; ?>"></td>
                        </tr>
                        <tr>
                          <td><strong>Téléphone :</strong> </td><td><input type="text" readonly style="text-align: center;" size="25" value="<?php echo $tel; ?>"></td>
                        </tr>
                        <tr>
                          <td><strong>Nombres de plats :</strong> </td><td><input type="text" style="text-align: center;" size="25" value="<?php echo $nombre_plats; ?>" readonly></td>
                        </tr>
                        <tr>
                          <td><strong>Prix Total :</strong> </td><td><input type="text" style="text-align: center;" size="25" value="<?php echo $prix." FCFA"; ?>" readonly></td>
                        </tr>
                        <tr>
                          <td></td><td><a href="commande.php" style="font-size: 15px; margin-top: 15px;" class="btn btn-black mr-1 ">Retour</a><button type="submit" style="font-size: 15px; margin-top: 15px;" class="btn btn-black mr-1">Confirmer</button></td>
                        </tr>
                      
                    </table>
              
              </form>
              </div>
              </div>
            </div>
          </div>

            
           
            
            

















               
            </div>

              
            </p>
              
            </div>
            
            
            

    </div>






    <div class="site-blocks-cover inner-page-cover overlay get-notification"  style="background-image: url(../images/suzsand/sand.jpg); background-attachment: fixed;" data-aos="fade">
      <div class="container">

        <div class="row align-items-center justify-content-center">
          <form class="col-md-7" method="post">
            <h2>Être informé sur chaque nouvelle recette.</h2>
            <div class="d-flex mb-4">
              <input type="text" class="form-control rounded-0" placeholder="Entrer votre adreese email">
              <input type="submit" class="btn btn-white btn-outline-white rounded-0" value="SOUSCRIRE">
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat commodi veniam doloremque ducimus tempora.</p>
          </form>
        </div>

      </div>
    </div>

    


    

  
    <footer class="site-footer bg-white">
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
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits réservés | Ce modèle est fait avec<i class="icon-heart" aria-hidden="true"></i> par SIC design
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div>

  

  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/jquery.countdown.min.js"></script>
  <script src="../js/bootstrap-datepicker.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.fancybox.min.js"></script>
  <script src="../js/jquery.sticky.js"></script>

  
  <script src="../js/main.js"></script>
    
  </body>
</html>