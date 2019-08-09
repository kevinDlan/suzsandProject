<?php require 'header.php';?>
<div class="addItemList" style="margin-top:10%;">
  <div class="container register-form">
        <div class="form">
            <div class="note">
                <p>Formulaire d'ajout de produit</p>
            </div>
            <div class="form-content">
             <form class="col-lg-10" id="productInsertForm" method="POST" action="../controller/insertProductController.php"  enctype="multipart/form-data">
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
  </div>
  <!-- .site-wrap -->
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
  <script src="../js/main.js"></script>
  <script src="js/removeAlert.js"></script>
  </body>
</html>
