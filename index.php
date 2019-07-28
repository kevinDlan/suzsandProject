<?php require('header.php')?>
    <div class="site-blocks-cover overlay" style="background-image: url(images/suzsand.jpg);" data-aos="fade" data-stellar-background-ratio="1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
            <div class="row mb-4">
              <div class="col-md-12" style="text-align: center;">
                <h1>Bienvenue à SUZSAND</h1>
                <p class="mb-5 lead">Découvrez votre nouvelle sandwicherie avec son goût esquis et raffinée à l'ivoirienne.</p>
                <div>
                  <a href="#products-section" id="nos-produits" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 mb-lg-0 mb-2 d-block d-sm-inline-block">Achetez maintenant</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section" id="menu-suzsand">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-6 text-center">
            <h3 class="section-sub-title">PRODUITS POPULAIRES</h3>
            <h2 class="section-title mb-3">Nos Produits</h2>
            <a href="menu.php#menu-suzsand" class='btn btn-orange mr-1 rounded-0'>Decouvrez le menu de Suzsand...</a>
          </div>
        </div>
        <div class="row"><?php include('carousel/index.php'); ?></div>
    </div>
    <div class="site-blocks-cover inner-page-cover overlay get-notification"  style="background-image: url(images/suzsand/sand.jpg); background-attachment: fixed;" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <form action="/composant/newLetters.php" class="col-md-7" method="post">
            <h2>Être informé sur chaque nouvelle recette.</h2>
            <div class="d-flex mb-4">
              <input type="email" name="email" class="form-control rounded-0" placeholder="Entrer votre adresse email">
              <input type="submit" class="btn btn-white btn-outline-white rounded-0" value="SOUSCRIRE">
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat commodi veniam doloremque ducimus tempora.</p>
          </form>
        </div>
      </div>
    </div>
  </div>



    <div class="site-section" id="about-section">
      <div class="container">
        <div class="row align-items-lg-center">
          <div class="col-md-8 mb-5 mb-lg-0 position-relative">
            <img src="images/sand.jpg" class="img-fluid" alt="Image">
          </div>
          <div class="col-md-3 ml-auto">
            <h2 class="section-title mb-3">À propos de nous</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui fuga ipsa, repellat blanditiis nihil, consectetur. Consequuntur eum inventore, rem maxime, nisi excepturi ipsam libero ratione adipisci alias eius vero vel!</p>
          </div>
        </div>
      </div>
    </div>



    <div class="site-section border-bottom" id="team-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">Equipe</h3>
            <h2 class="section-title mb-3">Direction</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <div class="person text-center">
              <img src="images/n.jpg" alt="Image" class="img-fluid rounded w-75 mb-3">
              <h3>John Rooster</h3>
              <p class="position text-muted">Co-Founder, President</p>
              <p class="mb-4">Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
              <ul class="ul-social-circle">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <div class="person text-center">
              <img src="images/n.jpg" alt="Image" class="img-fluid rounded w-75 mb-3">
              <h3>Tom Sharp</h3>
              <p class="position text-muted">Co-Founder, COO</p>
              <p class="mb-4">Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
              <ul class="ul-social-circle">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
            <div class="person text-center">
              <img src="images/n.jpg" alt="Image" class="img-fluid rounded w-75 mb-3">
              <h3>Winston Hodson</h3>
              <p class="position text-muted">Marketing</p>
              <p class="mb-4">Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
              <ul class="ul-social-circle">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="site-section bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">Nos Services</h3>
            <h2 class="section-title mb-3">Nous offrons des services</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><img src="https://img.icons8.com/cotton/64/000000/delivery-unpacking.png"></div>
              <div>
                <h3>Livraison à domicile</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><img src="https://img.icons8.com/material-two-tone/64/000000/online-order.png"></div>
              <div>
                <h3>Commande en ligne</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><img src="https://img.icons8.com/cotton/64/000000/user-male.png"></span></div>
              <div>
                <h3>Ecoute des utilisateurs</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section testimonial-wrap" id="testimonials-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">Avis des utilisateurs</h3>
            <h2 class="section-title mb-3">Temoignages</h2>
          </div>
        </div>
      </div>
      <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              <figure class="mb-4 d-block align-items-center justify-content-center">
                <div><img src="images/n.jpg" alt="Image" class="w-100 img-fluid mb-3"></div>
              </figure>
              <blockquote class="mb-3">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <p class="text-black"><strong>John Smith</strong></p>
            </div>
          </div>
          <div>
            <div class="testimonial">
              <figure class="mb-4 d-block align-items-center justify-content-center">
                <div><img src="images/n.jpg" alt="Image" class="w-100 img-fluid mb-3"></div>
              </figure>
              <blockquote class="mb-3">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <p class="text-black"><strong>Robert Aguilar</strong></p>
            </div>
          </div>
          <div>
            <div class="testimonial">
              <figure class="mb-4 d-block align-items-center justify-content-center">
                <div><img src="images/n.jpg" alt="Image" class="w-100 img-fluid mb-3"></div>
              </figure>
              <blockquote class="mb-3">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <p class="text-black"><strong>Roger Spears</strong></p>
            </div>
          </div>
          <div>
            <div class="testimonial">
              <figure class="mb-4 d-block align-items-center justify-content-center">
                <div><img src="images/n.jpg" alt="Image" class="w-100 img-fluid mb-3"></div>
              </figure>
              <blockquote class="mb-3">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <p class="text-black"><strong>Kyle McDonald</strong></p>
            </div>
          </div>
        </div>
    </div>
    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">formulaire de contact</h3>
            <h2 class="section-title mb-3">entrer en contact</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 mb-5">
            <form method="POST" action="/contactus/contacter.php" class="p-5 bg-white">
              <h2 class="h4 text-black mb-5">Formulaire de contact</h2>
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Prénom</label>
                  <input type="text" id="fname" name="prenom" class="form-control rounded-0" required>
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Nom de famille</label>
                  <input type="text" id="lname" name="nom" class="form-control rounded-0"  required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label>
                  <input type="email" id="email" name="email" class="form-control rounded-0" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">Sujet</label>
                  <input type="subject" id="subject" name="sujet" class="form-control rounded-0" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label>
                  <textarea name="message" id="message" name="message" cols="30" rows="7" class="form-control rounded-0" placeholder="écrivez vos notes ou questions ici..." required></textarea>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Envoyer le message" class="btn btn-black rounded-0 py-3 px-4">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php require('footer.php')?>
