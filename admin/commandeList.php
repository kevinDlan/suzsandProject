<?php
if(isset($_GET['page']) and !empty($_GET['page']))
    {
      $page = $_GET['page'];
       require_once('../controller/paginationCmd.php');
    }else
    {
      require_once('../controller/selectCmd.php');
    }
    require_once('../controller/paginateCmd.php');
    require_once('../function/convertDateToFrench.php');
 ?>
<?php require_once('header.php'); ?>
<div class="commandlist" style="margin-top:200px;">
    <h3 class="text-center"> Liste des commandes</h3>
      <div class="container-fluid">
      <table class="table-responsive">
        <table class="table table-hover">
         <thead class="thead-light" style="font-size:75%;">
          <tr>
            <th scope="col">Date et heure de la commande</th>
            <th scope="col">Nom et prenom du client</th>
            <th scope="col">Contact du client</th>
            <th scope="col">Plat commandé</th>
            <th scope="col">Nombre de plat</th>
            <th scope="col">Lieu Livraison</th>
            <th scope="col">Montant Total</th>
            <th scope="col">Traitement</th>
          </tr>
         </thead>
         <?php
        foreach ($data as $cmd) {
          echo "
          <tbody>
            <tr>
             <th scope='row'>".dateToFrench($cmd['dateCommande'],'l j F Y')."  à ".extratHour($cmd['dateCommande'])."</th>
                <td>".$cmd['nomPrenom']."</td>
                <td>".$cmd['contact']."</td>
                <td>".$cmd['articleCommande']."</td>
                <td>".$cmd['nombrePlats']."</td>
                <td>".$cmd['lieuLivraison']."</td>
                <td>".$cmd['totalCommande']." FCFA</td>
                <td><button data-toggle='modal' data-target='#modal' class='btn btn-dark' style='text-transform:uppercase;'>Traiter la commande</button></td>
            </tr>
          </tbody>
          <!-- Modal -->
           <div class='modal fade' id='modal' tabindex='-1' role='dialog' aria-labelledby='modal' aria-hidden='true'>
             <div class='modal-dialog modal-dialog-centered' role='document'>
              <div class='modal-content'>
               <div class='modal-header'>
                 <h4 style='margin-left:100px;'>Traitement commande</h4>
              </div>
              <div class='modal-body'>
                  <h5>Marquer la commande comme:</h5><br/>
                <div class='row'>
                    <form  method='POST' action='../controller/treatmentCmd.php'>
                      <input type='text'style='display:none' name='treatId' value='".$cmd['id']."'>
                      <button name='cmdtreat' type='submit' class='btn btn-success ml-4'>commande traitée</button>
                    </form>
                   <form  method='POST' action='../controller/treatmentCmd.php'>
                     <input style='display:none' type='text' name='cancelId' value='".$cmd['id']."'>
                     <button name='cmdcancel' type='submit' class='btn btn-danger  ml-2'>commande annulée !</button>
                  </form>
                </div>
             </div>
            <div class='modal-footer'>
            </div>
         </div>
      </div>
    </div>
          ";
        }
          ?>
    </table>
  </table>
    </div>
  </div>
  <div class="horizontal_bar" style="margin-left:5%;margin-right:5%;">
     <hr>
  </div>
  <div class="pagination" style="margin-top:5%;width:10%;margin:auto;">
    <nav aria-label="Page navigation example">
      <ul class="pagination">
    <?php
           echo "
                 <form action='' methods='GET'>
                  <input name='page' type='hidden' value='1'>
                 <li class='page-item'>
                   <button type='submit' class='page-link'  aria-label='Previous'>
                     <span aria-hidden='true'>&laquo;</span>
                   </button>
                 </li>
                 </form>
           ";

             for($i=1;$i<=$nbreOfPage;$i++){
               echo "
                      <form action='commandeList.php' method='GET'>
                        <input name='page' type='hidden' value='".$i."'>
                        <li id='activeItem' class='page-item'><button id='".$i."' onclick='activeFunction(this);' class='page-link' type='submit'>".$i."</button></li>
                      </form>
                    ";
             }

         $last=$i-1;
         echo "
               <form action='' method='GET'>
                <input name='page' type='hidden' value='".$last."'>
                <li class='page-item'>
                 <button class='page-link' aria-label='Next'>
                   <span aria-hidden='true'>&raquo;</span>
                 </button>
              </li>
               </form>
             ";
      ?>
      </ul>
    </nav>
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
  <script src="../js/main.js"></script>
  <script src="js/activeBtn.js"></script>
  </body>
</html>
