<?php
if(isset($_GET['productCode']) and !empty($_GET['productCode']))
  {
     //session_start();
     $code = $_GET['productCode'];
     include("../controller/searchQuery.php");
  }else{
        if(isset($_GET['page']) and !empty($_GET['page'])){
         //session_start();
         $page = $_GET['page'];
         require_once('../controller/productPagination.php');
           }
           else
           {
             //session_start();
             include("../controller/selectProductForDelete.php");
           }
          require_once('../controller/productPaginate.php');
        }
?>
<?php require 'header.php'; ?>
<?php require '../moneyformatfunction.php'; ?>
     <div class="container-fluid">
       <div class="search-form">
             <div class="container-fluid  col-md-6" style="margin-top:150px;">
              <form class="" action="deleteproduct.php" method="GET">
                <div id="deleteSearchbar" class="input-group mb-3">
                  <input id="deleteProductCode" name="productCode" autofocus type="search" onblur="searchbarLoseCursor();" class="form-control" placeholder="Veuillez entrer le code du produit a supprimé" autocomplete="off">
                    <div id="searchBtn" class="input-group-append">
                       <button id="submit" type="submit" class="btn btn-outline-primary"><span style="font-size:25px;" class="icon-search"></span></button>
                   </div>
                </div>
                <ul id="searchresult" class="searchbar">
                </ul>
              </form>
           </div>
         </div>
         <?php if(isset($_SESSION['deleteProduct'])):?>
           <div class="alert alert-success mx-auto alert-dismissible fade show col-md-6" role="alert" style="text-align:center;">
                  <?=$_SESSION['deleteProduct'];?>
              <button type='button' class='close' data-dismiss="alert" aria-label='Close '>
                     <span aria-hidden='true'>&times;</span>
              </button>
           </div>
        <?php elseif(isset($_SESSION['deleteProductError'])):?>
        <div class="alert alert-danger mx-auto alert-dismissible fade show col-md-6" role="alert" style="text-align:center;">
               <?=$_SESSION['deleteProductError'];?>
           <button type='button' class='close' data-dismiss="alert" aria-label='Close '>
                  <span aria-hidden='true'>&times;</span>
           </button>
        </div>
        <?php endif; ?>
         <div class="product_table">
           <div class="table-responsive">
             <table class="table table-hover">
              <thead class="thead-light">
               <tr>
                 <th scope="col">Code du repas</th>
                 <th scope="col">Libelle du repas</th>
                 <th scope="col">Description du repas</th>
                 <th scope="col">Prix du repas</th>
                 <th scope="col">Image du repas</th>
                 <th scope="col">Action</th>
               </tr>
              </thead>
            <?php foreach ($data as $product): ?>
                  <div class='productRow'>
                    <form action='../../controller/deleteProduct.php' id='deleteForm' class='deleteForm' method='post'>
                      <tbody>
                            <input name='codeProduit' type='text' style='display:none' value='<?=$product->codeMenu?>'/>
                            <input name='imgProduit' type='text' style='display:none' value='<?=$product->photoMenu?>'/>
                        <tr class='<?=$product->codeMenu?>'>
                        <th scope='row'>
                                <?=$product->codeMenu?>
                        </th>
                            <td>
                              <?=$product->libelleMenu?>
                            </td>
                            <td>
                            <?=$product->descriptionMenu?>
                            </td>
                            <td>
                            <?=money_format($product->prix)?>
                          </td>
                            <td>
                              <img src='../../imageRepas/<?=$product->photoMenu?>' width='100px' height='100px' alt=''>
                            </td>
                            <td>
                              <button data-toggle='modal' data-target='#<?=$product->codeMenu?>'  class='btn btn-primary sm-1' type='button'>Supprimer</button>
                            </td>
                        </tr>
                      </tbody>

                      <!-- Modal -->
                      <div class='modal fade' id='<?=$product->codeMenu?>' tabindex='-1' role='dialog' aria-labelledby='modal' aria-hidden='true'>
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
                            <p class='text-center' style='text-size:30px;'> Voulez-Vous vraiment supprimé le produit </p>
                            <p class='text-center'>
                              <button type='button' class='btn btn-info ml-4' data-dismiss='modal' aria-label='Close'>Annuler</button>
                              <button name='mgsView' type='submit' class='btn btn-danger ml-4'>Confirmer</button>
                            </p>
                        </div>
                        <div class='modal-footer'>
                        </div>
                    </div>
                  </div>
                </div><!-- endModal -->
              </form>
            </div>
        <?php endforeach ?>
         </table>
       </div>
      </div>
     </div>
     <div class="horizontal_bar" style="margin-left:5%;margin-right:5%;">
        <hr>
     </div>
     <div class="pagination offset-5" style="margin-top:5%;width:10%;margin:auto;">
       <nav aria-label="Page navigation example">
         <ul class="pagination">
             <?php if(isset($nbreOfPage)):?>
                  <form action='' methods='GET'>
                     <input name='page' type='hidden' value='1'>
                      <li class='page-item'>
                        <button type='submit' class='page-link'  aria-label='Previous'>
                          <span aria-hidden='true'>&laquo;</span>
                        </button>
                      </li>
                  </form>
                 <?php for($i=1;$i<=$nbreOfPage;$i++): ?>
                          <form action='deleteproduct.php' method='GET'>
                             <input name='page' type='hidden' value='<?=$i?>'>
                             <li id='activeItem' class='page-item'><button id='<?=$i?>' onclick='activeFunction(this);' class='page-link' type='submit'><?=$i?></button></li>
                          </form>
                <?php endfor; ?>
               <?php $last=$i-1; ?>
               <form action='' method='GET'>
                 <input name='page' type='hidden' value='<?=$last?>'>
                   <li class='page-item'>
                     <button class='page-link' aria-label='Next'>
                       <span aria-hidden='true'>&raquo;</span>
                     </button>
                   </li>
               </form>
            <?php endif; ?>
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
     <script src="../js/main.js"></script>
     <script src="js/notification.js"></script>
     <script src="js/removeAlert.js"></script>
     <script type="text/javascript">
     $(document).ready(function(){
          $('#deleteProductCode').keyup(function(){
             var userQuery = $(this).val();
             var leng = userQuery.length;
           if(leng>0){
                       //$('.updated').fadeOut('slow');
                       $.ajax({
                         type:'POST',
                         data:'query=' + encodeURIComponent(userQuery),
                         url:"../../controller/ajaxQueryforselect.php",
                         success:function(data){
                           if(data != ""){
                               $('#searchresult').show().html(data);
                             }else {
                                 $('#searchresult').show().html('Aucun resultat trouvé !');
                             } ;

                         //var QueryData = data;
                         //alert(QueryData.codeMenu);
                         },
                         error:function(){
                           alert('Error');
                         }
                       });
                     }
                     else
                     {
                       $('#searchresult').fadeOut('fast');
                       //location.reload();
                     }
        })
     });
      function choseItem(x)
      {
        var val = $(x).html();
        $('#deleteProductCode').val(val);
        $('#searchresult').fadeOut('fast');
        $('#deleteSearchbar').children('#searchBtn').children('button[type="submit"]').click();
      }
      function searchbarLoseCursor(){
           $('#searchresult').fadeOut('fast');
      }
     </script>
      <script src="js/activeBtn.js"></script>
     </body>
     </html>
