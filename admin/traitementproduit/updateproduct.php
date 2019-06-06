<?php
     session_start();
      include("../../controller/selectProductForUpDate.php");
   ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Administration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../../images/n.jpg" rel="icon" type="image/jpg">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../../fonts/icomoon/style.css">

    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/jquery-ui.css">
    <link rel="stylesheet" href="../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="../../css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="../../fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="../../css/aos.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/dropdown.css">
    <script type="text/javascript">
    function chooseFile(x){
       $(x).parents('.rowImg').children('input[type="file"]').click();
                           }
  function show_apercu(x){
    var files = jQuery(x)[0].files;
    if(files.length > 0){
       var file = files[0];
       if(file.size<=4*1024*1024){
         var file = files[0];
         //$(x).prevAll('.file-name').html(file.name+" "+parseInt(file.size/1024)+"  KO");
         $(x).prevAll('.image_apercu').attr('src', window.URL.createObjectURL(file));
         $(x).prevAll('.image_apercu').show();
       }else{
             alert('l\'image que vous avez choisi est trop lourd. Elle doit etre inferieur a 4 MO');
             }
           }
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

    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">
      <?php
        require_once('../../errorAlert.php');
       ?>
      <div class="container-fluid" style="height: 80px;">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo">
            <a href="../home.php" class="text-black mb-0">
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
               <li>
                 <a href="../commandeList.php" class="nav-link">
                    Commandes
                    <sup style ='font-size:15px; font-weight:bold;'><span class='badge badge-pill badge-danger countCmdNotif'></span></sup>
                  </a>
                </li>


                <li><a href="../contactusList.php" class="nav-link">
                  Messages client
                  <sup style ="font-size:15px; font-weight:bold;"><span class='badge badge-pill badge-danger count'></span></sup>

                   </a>
                 </li>
                 <li>
                   <a href="../newletterlist.php" class="nav-link">
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
                            <a href="../addItemMenu.php" class="nav-link">Ajouter de produits</a>
                            <a href="updateproduct.php" class="nav-link">Mise a jours des données du produit</a>
                            <a href="deleteproduct.php" class="nav-link">Suppression d'un produit</a>
                          </div>
                    </div>
                </li>
                <li>
                  <a href="../index.php">Deconnexion</a>
               </li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>

    </header>
     <div class="container-fluid">
       <div class="search-form">
             <div class="container-fluid  col-md-6" style="margin-top:200px;">
              <form class="" action="index.html" method="post">
                <div class="input-group mb-3">
                  <input type="search" class="form-control" placeholder="Veuillez entrer le code du produit a modifié" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                       <button type="submit" class="btn btn-outline-primary" id="button-addon2"><span style="font-size:25px;" class="icon-search"></span></button>
                   </div>
                </div>
              </form>
           </div>
         </div>
         <div class="product_table">
           <table class="table-responsive">
             <table class="table table-hover">
              <thead class="thead-light">
               <tr>
                 <th scope="col">Code du repas</th>
                 <th scope="col">Libelle du repas</th>
                 <th scope="col">Description du repas</th>
                 <th scope="col">Prix du repas</th>
                 <th scope="col">Image du repas</th>
                 <th scope="col"></th>
               </tr>
             </thead>
            <?php
      foreach ($data as $product){
            echo "
          <form  action='../../controller/updateProductData.php' method='post' enctype='multipart/form-data'>
            <input style='display:none;' type='number' name='id' value='".$product['id']."'>
             <tbody>
               <tr class='updated'>
                <th class='rowCode activateBtn' scope='row'>
                       <input onkeyup='remove_attr(this);' id='repasCode' name='repas_code' type='text' value='".$product['codeMenu']."' readonly required style='border:none;'/>
                       <i style='cursor:pointer;' id='edit_code_pens' onclick='editCode(this);' class='fa fa-pen'></i>
                </th>
                   <td class='rowLibelle activateBtn'>
                     <input onkeyup='remove_attr(this);' id='libelle' name='libelle_repas' type='text' value='".$product['libelleMenu']."' readonly required style='border:none;'/>
                     <i style='cursor:pointer;' id='edit_descip_pens'onclick='editLibelle(this);' class='fa fa-pen'></i>
                   </td>
                   <td class='rowDescrip activateBtn'>
                      <textarea onkeyup='remove_attr(this);' id='description' name='description_repas'  rows='3' readonly required style='border:none;'/>".$product['descriptionMenu']."</textarea>
                      <i style='cursor:pointer;' id='edit_libelle_pens' onclick='editDescrip(this);' class='fa fa-pen'></i>
                   </td>
                   <td class='rowPrix activateBtn'>
                     <input onchange='remove_attr(this);' id='prix' name='prix_repas' class='display-none' type='number' value='".$product['prix']."' readonly required style='border:none;'/>
                     <i style='cursor:pointer;' id='edit_prix_pens' onclick='editPrix(this);' class='fa fa-pen'></i>
                  </td>
                   <td class='rowImg activateBtn'>
                      <img class='image_apercu' src='../../imageRepas/".$product['photoMenu']."' width='100px' height='100px' alt=''>
                      <input id='img' name='img_repas' style='display:none' onchange='show_apercu(this);remove_attr(this);'     type='file' accept='image/*'/>
                      <i style='cursor:pointer;' id='edit_img_pens' onclick='chooseFile(this);' class='fa fa-pen'></i>
                   </td>
                   <td class='btn'>
                      <button disabled id='button' type='button' data-toggle='modal' data-target='#".$product['codeMenu']."' class='btn btn-primary sm-1'>Enregister</button>
                   </td>
               </tr>
             </tbody>
             <!-- Modal -->
              <div class='modal fade' id='".$product['codeMenu']."' tabindex='-1' role='dialog' aria-labelledby='modal' aria-hidden='true'>
                <div class='modal-dialog modal-dialog-centered' role='document'>
                 <div class='modal-content'>
                  <div class='modal-header'>
                    <button type='button' class='btn btn-danger' data-dismiss='modal' aria-label='Close'>
                       <span aria-hidden='true'>&times;</span>
                    </button>
                 </div>
                 <div class='modal-body'>
                    <p class='text-center'>
                       <i class='far fa-question-circle fa-7x' style='color:#f16821;' ></i>
                    </p>
                    <p class='text-center' style='text-size:30px;'> Voulez-Vous enregistré les modifications </p>
                    <p class='text-center'>
                      <button type='button' class='btn btn-info ml-4' data-dismiss='modal' aria-label='Close'>Annuler</button>
                      <button name='mgsView' type='submit' class='btn btn-success ml-4'>Confirmer</button>
                    </p>
                </div>
               <div class='modal-footer'>
               </div>
            </div>
         </div>
       </div><!-- endModal -->
            </form>
            ";
             }
              ?>
         </table>
       </table>
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

  <script src="../../js/jquery-3.3.1.min.js"></script>
  <script src="../../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../../js/jquery-ui.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <script src="../../js/owl.carousel.min.js"></script>
  <script src="../../js/jquery.stellar.min.js"></script>
  <script src="../../js/jquery.countdown.min.js"></script>
  <script src="../../js/bootstrap-datepicker.min.js"></script>
  <script src="../../js/jquery.easing.1.3.js"></script>
  <script src="../../js/aos.js"></script>
  <script src="../../js/jquery.fancybox.min.js"></script>
  <script src="../../js/jquery.sticky.js"></script>

  <script src="../js/notification.js"></script>
  <script src="../../js/main.js"></script>
  <script>
  function editCode(x){
      $(x).parents('.rowCode').children("#repasCode").removeAttr('readonly').focus();
    }
    function editLibelle(x){
        $(x).parents('.rowLibelle').children("#libelle").removeAttr('readonly').focus();
      }
      function editDescrip(x){
          $(x).parents('.rowDescrip').children("#description").removeAttr('readonly').focus();
        }
        function editPrix(x){
            $(x).parents('.rowPrix').children("#prix").removeAttr('readonly').focus();
          }

      function remove_attr(x){
        $(x).parents('.activateBtn').parents('.updated').children('.btn').children('#button').removeAttr('disabled');
      }
  </script>
  <script src="js/removeAlert.js"></script>
  </body>
</html>
