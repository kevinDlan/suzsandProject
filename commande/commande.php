<?php
    require_once('../controller/selectDeliveryArea.php');
    
    session_start();
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Suz'sand</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">
    <link href="../images/n.jpg" rel="icon" type="image/jpg">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="..css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">

    <link rel="stylesheet" href="../css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" type="text/css" href="commande1.css">

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap" style="display: <?php if (!isset($_SESSION['libelleMenu'])) {
    echo 'none';
  } ?>">

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
        <div class="row align-items-center" style="position: relative;">

          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-black mb-0">
              <img src="../images/n.jpg" class="logo">
            </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="../index.php" class="nav-link">Accueil</a></li>
                <li><a href="../index.php#products-section" class="nav-link">Nos produits</a></li>
                <li><a href="../index.php#about-section" class="nav-link">A propos de nous</a></li>

                <li><a href="../index.php#testimonials-section" class="nav-link">Temoignage</a></li>

                <li><a href="../index.php#contact-section" class="nav-link">Contactez-nous</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>

    </header>



    <div style="height: 150px;"></div>

    <div class="container">


      <form class="needs-validation" novalidate method="post" action="validation.php" role="form">
        <div class="row">
          <div class="col-md-6" style="border: 2px solid #DDD; border-radius: 5px;">
            <div class="col-lg-12 col-md-6 mb-3">
              <div class="product-item">
                <figure>
                    <img src="../imageRepas/<?php echo $_SESSION['photoMenu'];?>" style="margin-top: 25px;" alt="Image" class="
                    " >
                </figure>
                <div class="px-4">
                    <h3 style="color: #f16821;"><?php echo $_SESSION['libelleMenu'];?></h3>
                    <p class='mb-4' style='font-weight:bold; font-size:20px'><?php echo $_SESSION['prix'];?> <strong> FCFA</strong></p>
                    <p class="mb-4"><?php echo $_SESSION['descriptionMenu'];?></p>




                </div>
              </div>
            </div>

          </div>

          <div class="col-md-1"></div>

          <div class="col-md-5">
            <div class="heading">
              <h2 style="text-align: center;">Passer une commande !</h2>
            </div>



            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Nom et prènom</label>
                    <input type="text" class="form-control" id="validationCustom01" pattern="^[a-zA-Zàé]([a-zA-Zàé ]){1,}$" placeholder="Votre prénom" name="name" required>
                    <div class="valid-feedback">
                      Cela semble bon!
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom02">Téléphone</label>
                    <input type="text" class="form-control" id="validationCustom02"  pattern="^[0-9]{2}([ ]?[0-9]{2}){3}$" placeholder="Votre téléphone" name="tel" required>
                    <div class="valid-feedback">
                      Cela semble bon!
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12 mb-3">               
                <label for="validationCustomUsername">Lieu de Livraison</label>
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">ville</label>
                      </div>
                      <select class="custom-select" name="ville" id="inputGroupSelect01">
                        <option selected>Abidjan</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Quartier</label>
                      </div>
                      <select onchange="selectDeliveryPrice(this);"  class="custom-select" name="quartier" id="quartier">
                        <option name="option1" value="1">Veuillez choisir un lieu de livraison </option>
                        <?php
                             foreach ($area as $areas){
                               echo "<option>".$areas['region']."</option>";
                             }

                         ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Montant de la livraison</label>
                      </div>
                      <input class="form-control" type="number" readonly id="deleveryPrice" name="montant_livraison" value="0">
                      <label class="input-group-text" for="inputGroupSelect01">FCFA</label>
                        
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom03">Nombre de plats</label>
                    <input onchange="selectDeliveryPrice('#quartier');" min="1" max="100"  type="number" value="1" class="form-control nbrePlat" id="validationCustom03" placeholder="Ex: 5" name="nombre_plats" pattern="^[0-9]{1,}$" required>
                    <div class="invalid-feedback">
                      Entrer seulemant des chiffres
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                     <label for="prixtotal">Prix Unitaire</label>
                     <input type='number'  id="prixUnitaire"  readonly class="form-control prix"  name='prix' value='<?php echo $_SESSION['prix'];?>'>
                  </div>
                </div>
              </div>
              <div id='montantTotal' class="col-md-10 mb-3"  style="display:none;">
                <label for="prixtotal">Montant total de la commande</label>
                <input style="background:#28a745;" type='number'  id="totalCommande"  readonly class="form-control"  name='totalCommande' value=''>
              </div>
              
              <div class="form-group col-md-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                  <label class="form-check-label" for="invalidCheck">
                    Accepter les termes et conditions
                  </label>
                  <div class="invalid-feedback">
                    Vous devez accepter avant de soumettre.
                  </div>
                </div>
              </div>

            

              <input type='hidden' name='libelleMenu' value='<?php echo $_SESSION['libelleMenu'];?>'>




              <button class="btn btn-black mr-1 mx-auto col-md-6" style="height: 50px;" type="submit">Valider la commande</button>
            </div>
          </div>
        </div>
      </form>



    </div>


    <script type="text/javascript">
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();

</script>

    <footer class="site-footer bg-white" style="margin-top: 100px;">
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
                  <li><a href="../index.php#about-section">A propos de nous</a></li>
                  <li><a href="#">Nos services</a></li>
                  <li><a href="../index.php#testimonials-section">Temoignage</a></li>
                  <li><a href="../index.php#contact-section">Contactez-nous</a></li>
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
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits réservés | Ce modèle est fait avec<i class="icon-heart" aria-hidden="true"></i> par <a href="https://colorlib.com" target="_blank" >SIC design</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

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
  
  <script type="text/javascript">
     function selectDeliveryPrice(x){
      var value = $(x).val();
      if(value != 'Veuillez choisir un lieu de livraison')
      {
       $.ajax({
         type: 'POST',
         url: '../controller/selectDeliveryPrice.php',
         data: 'query=' + encodeURIComponent(value),
         success:function(data){

           $('#deleveryPrice').val(data);
           $('#montantTotal').show("slow")
           $('#totalCommande').val(
                                   parseInt($('#prixUnitaire').val())*
                                   parseInt($('.nbrePlat').val())+
                                   parseInt($('#deleveryPrice').val())
                                   );
         },
         error:function(){
                          alert('Error');
                          }
             })
       }
      }
  </script>



  <script src="../js/main.js"></script>

  </body>
</html>
