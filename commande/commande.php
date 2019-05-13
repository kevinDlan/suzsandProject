<?php       
      if (isset($_GET['valide'])) 
      {
        session_start();
        session_destroy(); 
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
    
    <style type="text/css">
      .modal label
      {

      }
    </style>
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">



  <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: <?php 
      if (isset($_GET['valide'])) 
      {
          echo "block"; 
      }
      else
      {
        echo "none";
      }
      ?>
    ;">
  <strong>Bien joué!</strong> Votre commande a bien été enregistré. <?php if (isset($_GET['valide']))echo  $_SESSION['name'];  ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>

  <div class="alert alert-warning alert-dismissible fade show" role="alert" style="display: 

  <?php 
    if(isset($_GET['invalide']))
    {
      
      
        echo "block";
     
    }
    else
    {
      echo "none";
    }

  ?>;

  ">
  <strong>Votre commande n'a pas été enregistré !</strong> Vous devriez bien renseigner  certains champs du formulaire de commande.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>



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
    
    <div class="site-section" id="products-section" >
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-6 text-center">
            <h3 class="section-sub-title">PRODUITS POPULAIRES</h3>
            <h2 class="section-title mb-3">Nos Produits</h2>
          </div>
        </div>
        <div class="row">
          
            <div class="col-xs-6 col-sm-6 col-lg-4 col-md-6 mb-5">
              <div class="product-item">
                <figure>
                  <img src="../images/suzsand/1.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="px-4">
                  <h3>sandwichs1</h3>
                  <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                  <div class="row">
                    <div class="col-md-3">  
                    </div>
                    <a href="" class="col-md-6 btn btn-black mr-1 rounded-0" data-toggle="modal" data-target="#mymodal">COMMANDER</a>
                    <div class="col-md-3">  
                    </div>
                    <div class="col-md-12">
                      <div class="modal fade" id="mymodal" style="text-align: left;">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title" style="margin-left: 160px;">COMMANDE</h4>
                            <button type="button" class="close" data-dismiss="modal">x</button>
                          </div>
                          <div class="modal-body">
                          <form id="contact-form" method="post" action="validationCommande.php?sandwichs1=sand" role="form">
                            <div class="row">
                            <div class="col-md-12">
                              <label for="name">Nom et prénom <span class="blue">*</span></label>
                                <input type="text" required="" class="form-control" id="name" placeholder="Votre prénom" name="name" value="<?php if (isset($_GET['valide'])) echo  $_SESSION['name'];  ?>" partern="^[a-zA-Zàé]([a-zA-Zàé ]){1,}$" data-toggle="tooltip" title="Entrer seulement des lettres">
                                
                            </div>

                            <div class="col-md-12">
                              <label for="tel">Téléphone <span class="blue">*</span></label>
                              <input type="tel" required="" class="form-control" id="tel" placeholder="Votre téléphone" name="tel" value="" partern="^[0-9]{2}([ ]?[0-9]{2}){3}$" data-toggle="tooltip" title="Entrer seulement des chiffres">
                              <p class="comments"></p>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="exampleFormControlSelectAbidjan">Lieu de livraison <span class="blue">*</span></label><br>
                                <div class="row">
                                  <div class="col-md-6">
                                    <label>Ville</label>
                                    <select class="form-control" name="ville" id="exampleFormControlSelectAbidjan" name="choixVille">
                                      <option>Abidjan</option>
                                    </select>
                                  </div>
                                  <div class="col-md-6">
                                    <label>Quartier</label>
                                    <select class="form-control is-large" name="quartier" id="exampleFormControlSelectAbidjan" name="choixVille">
                                      <option>2 Plateaux - 7ème Tranche</option>
                                      <option>2 Plateaux - Agban</option>
                                      <option>2 Plateaux - Aghien</option>  
                                    </select>
                                  </div>
                      
                                </div>
                              </div>
                  
                              <p class="comments"></p>
                            </div>

                            <div class="col-md-12">
                              <label for="nombre_plats">Nombre de plats <span class="blue">*</span></label>
                              <input type="text" required="" class="form-control" id="nombre_plats" placeholder="Ex: 5" name="nombre_plats" data-toggle="tooltip" partern="^[0-9]{1,}$" title="Entrer seulement des chiffres">
                              <p class="comments"></p>
                            </div>

                            <div class="col-md-12">
                              <p class="blue"><strong>* Ces informations sont requises</strong></p>
                            </div>


                            <div class="col-md-12">
                                <input type="submit" class="button1" value="Valider la commande">
                            </div> 
                          </div>
                        </form>
                      </div>  
                    </div>
                  </div>
                </div>
              </div>
                  </div>



                </div>
              </div>
            </div>
    
        

         
          <div class="col-xs-6 col-sm-6 col-lg-4 col-md-6 mb-5">
            <div class="product-item">
              <figure>
                <img src="../images/suzsand/2.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="px-4">
                <h3>sandwichs2</h3>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>

                   
                <div class="row">
                    <div class="col-md-3">  
                    </div>
                    <a href="" class="col-md-6 btn btn-black mr-1 rounded-0" data-toggle="modal" data-target="#mymodal2">COMMANDER</a>
                    <div class="col-md-3">  
                    </div>
                    <div class="col-md-12">
                      <div class="modal fade" id="mymodal2" style="text-align: left;">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" style="margin-left: 160px;">COMMANDE</h4>
                          <button type="button" class="close" data-dismiss="modal">x</button>
                       
                        </div>
                      <div class="modal-body">
                      <form id="contact-form" method="post" action="validationCommande.php?sandwichs2=sand" role="form">
                        <div class="row">
                          <div class="col-md-12">
                            <label for="name">Nom et prénom <span class="blue">*</span></label>
                              <input type="text" required="" class="form-control" id="name" placeholder="Votre prénom" name="name" value="" partern="^[a-zA-Zàé]([a-zA-Zàé ]){1,}$" data-toggle="tooltip" title="Entrer seulement des lettres">
                              <p class="comments"></p>
                          </div>

                          <div class="col-md-12">
                            <label for="tel">Téléphone <span class="blue">*</span></label>
                            <input type="tel" required="" class="form-control" id="tel" placeholder="Votre téléphone" name="tel" value="" partern="^[0-9]{2}([ ]?[0-9]{2}){3}$" data-toggle="tooltip" title="Entrer seulement des chiffres">
                            <p class="comments"></p>
                          </div>

                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="exampleFormControlSelectAbidjan">Lieu de livraison <span class="blue">*</span></label><br>
                              <div class="row">
                                <div class="col-md-6">
                                  <label>Ville</label>
                                  <select class="form-control" name="ville" id="exampleFormControlSelectAbidjan" name="choixVille">
                                    <option>Abidjan</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                  <label>Quartier</label>
                                  <select class="form-control is-large" name="quartier" id="exampleFormControlSelectAbidjan" name="choixVille">
                                    <option>2 Plateaux - 7ème Tranche</option>
                                    <option>2 Plateaux - Agban</option>
                                    <option>2 Plateaux - Aghien</option>  
                                  </select>
                                </div>
                    
                              </div>
                            </div>
                
                            <p class="comments"></p>
                          </div>

                          <div class="col-md-12">
                            <label for="nombre_plats">Nombre de plats <span class="blue">*</span></label>
                            <input type="text" required="" class="form-control" id="nombre_plats" placeholder="Ex: 5" name="nombre_plats" partern="^[0-9]{1,}$" data-toggle="tooltip" title="Entrer seulement des chiffres">
                            <p class="comments"></p>
                          </div>

                          

                          <div class="col-md-12">
                          
                            <p class="blue"><strong>* Ces informations sont requises</strong></p>
                          </div>


                          <div class="col-md-12">
                              <input type="submit" class="button1" value="Valider la commande">
                          </div> 
                        </div>
                      </form>
                    </div>  
                  </div>
                </div>
              </div>
                    </div>
                  </div>



              </div>
            </div>
          </div>
       

          
          <div class="col-xs-6 col-sm-6 col-lg-4 col-md-6 mb-5">
            <div class="product-item">
              <figure>
                <img src="../images/suzsand/3.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="px-4">
                <h3>sandwichs3</h3>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>

                <div class="row">
                    <div class="col-md-3">  
                    </div>
                    <a href="" class="col-md-6 btn btn-black mr-1 rounded-0" data-toggle="modal" data-target="#mymodal3">COMMANDER</a>
                    <div class="col-md-3">  
                    </div>
                    <div class="col-md-12">
                      <div class="modal fade" id="mymodal3" style="text-align: left;">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" style="margin-left: 160px;">COMMANDE</h4>
                          <button type="button" class="close" data-dismiss="modal">x</button>
                        </div>
                      <div class="modal-body">
                      <form id="contact-form" method="post" action="validationCommande.php?sandwichs3=sand" role="form">
                        <div class="row">
                          <div class="col-md-12">
                            <label for="name">Nom et prénom <span class="blue">*</span></label>
                              <input type="text" required="" class="form-control" id="name" placeholder="Votre prénom" name="name" value="" partern="^[a-zA-Zàé]([a-zA-Zàé ]){1,}$" data-toggle="tooltip" title="Entrer seulement des lettres">
                              <p class="comments"></p>
                          </div>

                          <div class="col-md-12">
                            <label for="tel">Téléphone <span class="blue">*</span></label>
                            <input type="tel" required="" class="form-control" id="tel" placeholder="Votre téléphone" name="tel" value="" partern="^[0-9]{2}([ ]?[0-9]{2}){3}$" data-toggle="tooltip" title="Entrer seulement des chiffres">
                            <p class="comments"></p>
                          </div>

                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="exampleFormControlSelectAbidjan">Lieu de livraison <span class="blue">*</span></label><br>
                              <div class="row">
                                <div class="col-md-6">
                                  <label>Ville</label>
                                  <select class="form-control" name="ville" id="exampleFormControlSelectAbidjan" name="choixVille">
                                    <option>Abidjan</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                  <label>Quartier</label>
                                  <select class="form-control is-large" name="quartier" id="exampleFormControlSelectAbidjan" name="choixVille">
                                    <option>2 Plateaux - 7ème Tranche</option>
                                    <option>2 Plateaux - Agban</option>
                                    <option>2 Plateaux - Aghien</option>  
                                  </select>
                                </div>
                    
                              </div>
                            </div>
                
                            <p class="comments"></p>
                          </div>

                          <div class="col-md-12">
                            <label for="nombre_plats">Nombre de plats <span class="blue">*</span></label>
                            <input type="text" required="" class="form-control" id="nombre_plats" placeholder="Ex: 5" name="nombre_plats" partern="^[0-9]{1,}$" data-toggle="tooltip" title="Entrer seulement des chiffres">
                            <p class="comments"></p>
                          </div>

                          

                          <div class="col-md-12">
                            <p class="blue"><strong>* Ces informations sont requises</strong></p>
                          </div>


                          <div class="col-md-12">
                              <input type="submit" class="button1" value="Valider la commande">
                          </div> 
                        </div>
                      </form>
                    </div>  
                  </div>
                </div>
              </div>
                    </div>
                  </div>



              </div>
            </div>
          </div>
          

          
            <div class="col-xs-6 col-sm-6 col-lg-4 col-md-6 mb-5">
              <div class="product-item">
                <figure>
                  <img src="../images/suzsand/4.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="px-4">
                  <h3>sandwichs4</h3>
                  <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>

                  <div class="row">
                    <div class="col-md-3">  
                    </div>
                    <a href="" class="col-md-6 btn btn-black mr-1 rounded-0" data-toggle="modal" data-target="#mymodal4">COMMANDER</a>
                    <div class="col-md-3">  
                    </div>
                    <div class="col-md-12">
                      <div class="modal fade" id="mymodal4" style="text-align: left;">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" style="margin-left: 160px;">COMMANDE</h4>
                          <button type="button" class="close" data-dismiss="modal">x</button>
                        </div>
                      <div class="modal-body">
                      <form id="contact-form" method="post" action="validationCommande.php?sandwichs4=sand" role="form">
                        <div class="row">
                          <div class="col-md-12">
                            <label for="name">Nom et prénom <span class="blue">*</span></label>
                              <input type="text" required="" class="form-control" id="name" placeholder="Votre prénom" name="name" value="" partern="^[a-zA-Zàé]([a-zA-Zàé ]){1,}$" data-toggle="tooltip" title="Entrer seulement des lettres">
                              <p class="comments"></p>
                          </div>

                          <div class="col-md-12">
                            <label for="tel">Téléphone <span class="blue">*</span></label>
                            <input type="tel" required="" class="form-control" id="tel" placeholder="Votre téléphone" name="tel" value="" partern="^[0-9]{2}([ ]?[0-9]{2}){3}$" data-toggle="tooltip" title="Entrer seulement des chiffres">
                            <p class="comments"></p>
                          </div>

                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="exampleFormControlSelectAbidjan">Lieu de livraison <span class="blue">*</span></label><br>
                              <div class="row">
                                <div class="col-md-6">
                                  <label>Ville</label>
                                  <select class="form-control" name="ville" id="exampleFormControlSelectAbidjan" name="choixVille">
                                    <option>Abidjan</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                  <label>Quartier</label>
                                  <select class="form-control is-large" name="quartier" id="exampleFormControlSelectAbidjan" name="choixVille">
                                    <option>2 Plateaux - 7ème Tranche</option>
                                    <option>2 Plateaux - Agban</option>
                                    <option>2 Plateaux - Aghien</option>  
                                  </select>
                                </div>
                    
                              </div>
                            </div>
                
                            <p class="comments"></p>
                          </div>

                          <div class="col-md-12">
                            <label for="nombre_plats">Nombre de plats <span class="blue">*</span></label>
                            <input type="text" required="" class="form-control" id="nombre_plats" placeholder="Ex: 5" name="nombre_plats" partern="^[0-9]{1,}$" data-toggle="tooltip" title="Entrer seulement des chiffres">
                            <p class="comments"></p>
                          </div>

                          

                          <div class="col-md-12">
                            <p class="blue"><strong>* Ces informations sont requises</strong></p>
                          </div>


                          <div class="col-md-12">
                              <input type="submit" class="button1" value="Valider la commande">
                          </div> 
                        </div>
                      </form>
                    </div>  
                  </div>
                </div>
              </div>
                    </div>
                  </div>




                </div>
              </div>
            </div>
          
          
          
            <div class="col-xs-6 col-sm-6 col-lg-4 col-md-6 mb-5">
              <div class="product-item">
                <figure>
                  <img src="../images/suzsand/5.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="px-4">
                  <h3>sandwichs5</h3>
                  <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>


                  <div class="row">
                    <div class="col-md-3">  
                    </div>
                    <a href="" class="col-md-6 btn btn-black mr-1 rounded-0" data-toggle="modal" data-target="#mymodal5">COMMANDER</a>
                    <div class="col-md-3">  
                    </div>
                    <div class="col-md-12">
                      <div class="modal fade" id="mymodal5" style="text-align: left;">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" style="margin-left: 160px;">COMMANDE</h4>
                          <button type="button" class="close" data-dismiss="modal">x</button>
                        </div>
                      <div class="modal-body">
                      <form id="contact-form" method="post" action="validationCommande.php?sandwichs5=sand" role="form">
                        <div class="row">
                          <div class="col-md-12">
                            <label for="name">Nom et prénom <span class="blue">*</span></label>
                              <input type="text" required="" class="form-control" id="name" placeholder="Votre prénom" name="name" value="" partern="^[a-zA-Zàé]([a-zA-Zàé ]){1,}$" data-toggle="tooltip" title="Entrer seulement des lettres">
                              <p class="comments"></p>
                          </div>

                          <div class="col-md-12">
                            <label for="tel">Téléphone <span class="blue">*</span></label>
                            <input type="tel" required="" class="form-control" id="tel" placeholder="Votre téléphone" name="tel" value="" partern="^[0-9]{2}([ ]?[0-9]{2}){3}$" data-toggle="tooltip" title="Entrer seulement des chiffres">
                            <p class="comments"></p>
                          </div>

                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="exampleFormControlSelectAbidjan">Lieu de livraison <span class="blue">*</span></label><br>
                              <div class="row">
                                <div class="col-md-6">
                                  <label>Ville</label>
                                  <select class="form-control" name="ville" id="exampleFormControlSelectAbidjan" name="choixVille">
                                    <option>Abidjan</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                  <label>Quartier</label>
                                  <select class="form-control is-large" name="quartier" id="exampleFormControlSelectAbidjan" name="choixVille">
                                    <option>2 Plateaux - 7ème Tranche</option>
                                    <option>2 Plateaux - Agban</option>
                                    <option>2 Plateaux - Aghien</option>  
                                  </select>
                                </div>
                    
                              </div>
                            </div>
                
                            <p class="comments"></p>
                          </div>

                          <div class="col-md-12">
                            <label for="nombre_plats">Nombre de plats <span class="blue">*</span></label>
                            <input type="text" required="" class="form-control" id="nombre_plats" placeholder="Ex: 5" name="nombre_plats" partern="^[0-9]{1,}$" data-toggle="tooltip" title="Entrer seulement des chiffres">
                            <p class="comments"></p>
                          </div>

                          

                          <div class="col-md-12">
                            <p class="blue"><strong>* Ces informations sont requises</strong></p>
                          </div>


                          <div class="col-md-12">
                              <input type="submit" class="button1" value="Valider la commande">
                          </div> 
                        </div>
                      </form>
                    </div>  
                  </div>
                </div>
              </div>
                    </div>
                  </div>




                </div>
              </div>
            </div>
          

          
          <div class="col-xs-6 col-sm-6 col-lg-4 col-md-6 mb-5">
            <div class="product-item">
              <figure>
                <img src="../images/suzsand/6.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="px-4">
                <h3>sandwichs6</h3>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                <div class="row">
                    <div class="col-md-3"></div>
                    <a href="" class="col-md-6 btn btn-black mr-1 rounded-0" data-toggle="modal" data-target="#mymodal6">COMMANDER</a>
                    <div class="col-md-3"></div>
                    <div class="col-md-12">
                      <div class="modal fade" id="mymodal6" style="text-align: left;">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" style="margin-left: 160px;">COMMANDE</h4>
                          <button type="button" class="close" data-dismiss="modal">x</button>
                        </div>
                      <div class="modal-body">
                      <form id="contact-form" method="post" action="validationCommande.php?sandwichs6=sand" role="form">
                        <div class="row">
                          <div class="col-md-12">
                            <label for="name">Nom et prénom <span class="blue">*</span></label>
                              <input type="text" required="" class="form-control" id="name" placeholder="Votre prénom" name="name" value="" partern="^[a-zA-Zàé]([a-zA-Zàé ]){1,}$" data-toggle="tooltip" title="Entrer seulement des lettres">
                              <p class="comments"></p>
                          </div>

                          <div class="col-md-12">
                            <label for="tel">Téléphone <span class="blue">*</span></label>
                            <input type="tel" required="" class="form-control" id="tel" placeholder="Votre téléphone" name="tel" value="" partern="^[0-9]{2}([ ]?[0-9]{2}){3}$" data-toggle="tooltip" title="Entrer seulement des chiffres">
                            <p class="comments"></p>
                          </div>

                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="exampleFormControlSelectAbidjan">Lieu de livraison <span class="blue">*</span></label><br>
                              <div class="row">
                                <div class="col-md-6">
                                  <label>Ville</label>
                                  <select class="form-control" name="ville" id="exampleFormControlSelectAbidjan" name="choixVille">
                                    <option>Abidjan</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                  <label>Quartier</label>
                                  <select class="form-control is-large" name="quartier" id="exampleFormControlSelectAbidjan" name="choixVille">
                                    <option>2 Plateaux - 7ème Tranche</option>
                                    <option>2 Plateaux - Agban</option>
                                    <option>2 Plateaux - Aghien</option>  
                                  </select>
                                </div>
                    
                              </div>
                            </div>
                
                            <p class="comments"></p>
                          </div>

                          <div class="col-md-12">
                            <label for="nombre_plats">Nombre de plats <span class="blue">*</span></label>
                            <input type="text"  required="" class="form-control" id="nombre_plats" placeholder="Ex: 5" name="nombre_plats" partern="^[0-9]{1,}$" data-toggle="tooltip" title="Entrer seulement des chiffres">
                            <p class="comments"></p>
                          </div>

                          

                          <div class="col-md-12">
                            <p class="blue"><strong>* Ces informations sont requises</strong></p>
                          </div>


                          <div class="col-md-12">
                              <input type="submit" class="button1" value="Valider la commande">
                          </div> 
                        </div>
                      </form>
                    </div>  
                  </div>
                </div>
              </div>
                    </div>
                  </div>




              </div>
            </div>
          </div>
         

          
        </div>
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
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits réservés | Ce modèle est fait avec<i class="icon-heart" aria-hidden="true"></i> par <a href="" target="_blank" >SIC design</a>
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
     $(function () {
      $('[data-toggle="tooltip"]').tooltip({
        placement:'bottom',
        trigger:'hover'
    });
      
    })
   </script>
 
  <script src="../js/main.js"></script>
    
  </body>
</html>