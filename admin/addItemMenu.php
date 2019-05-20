<?php
      session_start();
      if(isset($_SESSION['adminnom'])  AND isset($_SESSION['adminprenom']))
      {
      }
      else{
            header('Location:index.php');
          }
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Administration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../images/n.jpg" rel="icon" type="image/jpg">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/dropdown.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/jquery.fancybox.min.css">

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

       function removeFile(x){
                           $(x).nextAll('input').val("");
                           $(x).prevAll('.file-name').html("");
                           $(x).prevAll('.img_apercu').hide();
                           $(x).parent('.image_view').children('a').hide();
                         }
</script>
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
              <span><a href="#"><span class="icon-envelope mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">shop@yourdomain.com</span></a></span>
            </p>

          </div>
        </div>
      </div>
    </div>
         <?php
               require_once('../errorAlert.php');
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
                    <a href="/admin/home.php" class="nav-link">
                    <i class="fa fa-home"></i>
                      Accueil
                      </a>
               </li>
             </li>
               <li>
                 <a href="commandeList.php" class="nav-link">
                    Commandes
                    <sup style ='font-size:15px; font-weight:bold;'><span class='badge badge-pill badge-danger countCmdNotif'></span></sup>
                  </a>
                </li>
                <li><a href="contactusList.php" class="nav-link">
                  Messages client
                  <sup style ="font-size:15px; font-weight:bold;"><span class='badge badge-pill badge-danger count'></span></sup>

                   </a>
                 </li>
                 <li>
                   <a href="newletterlist.php" class="nav-link">
                        Client New Letters
                           <sup style ='font-size:15px; font-weight:bold;'><span class='badge badge-pill badge-danger countNletterNotif'></span></sup>
                   </a>
                 </li>
                <li>
                <div class="dropdown">
                       <a href=""  class="nav-link dropdownlink">
                       Traitement produits
                       <i class="fa fa-caret-down"></i>
                       </a>
                          <div class="dropdown-content">
                            <a href="addItemMenu.php" class="dropdown-item">Ajouter de produits</a>
                            <a href="traitementproduit/updateproduct.php">Mise a jours des données du produit</a>
                            <a href="traitementproduit/deleteproduct.php">Suppression d'un produit</a>
                          </div>
                    </div>
                </li>
                <li>
                   <div class="dropdown">
                      <a href="" class="nav-link dropdown-item">
                      <?php echo $_SESSION['adminnom']; ?>
                      <i class="fa fa-caret-down"></i>
                      </a>
                        <div class="dropdown-content">
                           <a href="logout.php" class="dropdown-item">Logout</a>
                        </div>
                   </div>
               </li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>

    </header>

<div class="addItemList">
      <div class="container-fluid">
         <div class="card border-light mb-3">
           <div class="card-header text-center"><h3>Formulaire d'ajout de produit</h3></div>
             <div class="card-body offset-3 col-md-6">
             <form id="productInsertForm" method="POST" action="../controller/insertProductController.php"  enctype="multipart/form-data">
                   <div class="form-group">
                     <label for="codeProduit">Code produit</label>
                      <input name="codeProduit" type="text" class="form-control" id="codeProduit" placeholder="Veuiller entré le code du produit" required>
                  </div>
                  <div class="form-group">
                     <label for="nomProduit">Nom du produit</label>
                      <input name="nomProduit" type="text" class="form-control" id="codeProduit" placeholder="Veuiller entré le nom du produit" required>
                  </div>
                  <div class="form-group">
                     <label for="descriptionproduit">Description du produit</label>
                      <textarea name="descriptionProduit" type="textarea" class="form-control" id="desciption" placeholder="Veuillez entré la description du produit" rows="3" required></textarea>
                  </div>
                  <div class="form-group">
                     <label for="descriptionproduit">Prix du produit</label>
                     <input class="form-control" type="number" name=" prixProduit" placehoder="Veuillez entré le prix du produit" required>
                  </div>
                  <div class="form-group img_viewer">
                        <span class="btn btn-primary btn-sm" onclick="chooseFile(this);">Choisir une image ...</span>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                        <img class="image_apercu" style="width:300px;height:130px;display:none;">
                        <!--<span class="file-name"></span>-->
                        <!--<a  class="btn btn-danger remove-btn" style="display:none;" onclick="removeFile();">X</a>-->
                        <input name="productImg" type="file" class="form-control-file" id="productFile" style="display:none;"
                         name="productFile" onchange="show_apercu(this);" accept="image/*">
                  </div>

              </form>
             </div>
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

  <script src="js/notification.js"></script>
  <script src="js/main.js"></script>
  <script type="text/javascript">
    $('').submit(
      function(e){
        e.preventDefault();
        var $form = $(this);
        var formdata = (window.FormData) ? new FormData($form[0]) : null;
        var donnees = (formdata !== null) ? formdata : $form.serialize();
        $({
          url: $form.attr("action"),
          type:'POST',
          contentType: false,
          processData: false,
          data: donnes,
          success: function(data){
              var rep = JSON.parse(data);
              if(rep.OK){
                document.getElementById('productInsertForm').reset();
                //Renitialisation du formulaire
                $("productInsertForm").find('.img_apercu').hide();
                $("productInsertForm").find('.img_apercu').hide();
                $('alert-success').html(rep.msg);
                $('alert-success').show(500).delay(7000).hide(500);
              }else{
                $('alert-fail').html(rep.msg);
                $('alert-success').show(500).delay(7000).hide(500);
              }
          },
          error: function(){
            alert('Error');
          }
        });
      }
    );
</script>
  </body>
</html>
