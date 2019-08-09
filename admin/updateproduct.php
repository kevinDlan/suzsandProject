<?php
     if(isset($_GET['productCode']) and !empty($_GET['productCode']))
       {

         //session_start();
         $code = $_GET['productCode'];
         include("../controller/searchQuery.php");
       }else {
                  if (isset($_GET['page']) and !empty($_GET['page'])) {
                         $page = $_GET['page'];
                         require '../controller/productPagination.php';
                  }else {
                         include("../controller/selectProductForUpDate.php");
                        }
                  require '../controller/productPaginate.php';
                 }
   ?>
<?php require 'header.php';?>
<?php require '../moneyformatfunction.php'; ?>
     <div class="container-fluid">
       <div class="search-form">
             <div class="container-fluid  col-md-6" style="margin-top:150px;">
              <form class="" action="updateproduct.php" method="GET">
                <div id="searchDiv" class="input-group mb-3">
                  <input name="productCode" onblur="searchbarLoseCursor();" autofocus  id="searchbar" type="search" class="form-control" value="" placeholder="Veuillez entrer le code du produit a modifié" autocomplete="off"required>
                    <div id="btnDiv" class="input-group-append">
                       <button id="submit" type="submit" class="btn btn-outline-primary"><span style="font-size:25px;" class="icon-search"></span></button>
                   </div>
                </div>
                <ul id="searchresult" class="searchbar">
                </ul>
              </form>
           </div>
         </div>
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
                 <th scope="col"></th>
               </tr>
             </thead>
            <?php foreach ($data as $product):?>
                 <form  action='../../controller/updateProductData.php' method='post' enctype='multipart/form-data'>
                   <input style='display:none;' type='number' name='id' value='<?=$product->id?>'>
                    <tbody id='tbody'>
                     <tr class='updated'>
                       <th class='rowCode activateBtn' scope='row'>
                              <input onkeyup='remove_attr(this);' id='repasCode' name='repas_code' type='text' value='<?=$product->codeMenu?>' readonly required style='border:none;'/>
                              <i style='cursor:pointer;' id='edit_code_pens' onclick='editCode(this);' class='fa fa-pen'></i>
                       </th>
                       <td class='rowLibelle activateBtn'>
                         <input onkeyup='remove_attr(this);' id='libelle' name='libelle_repas' type='text' value='<?=$product->libelleMenu?>' readonly required style='border:none;'/>
                         <i style='cursor:pointer;' id='edit_descip_pens'onclick='editLibelle(this);' class='fa fa-pen'></i>
                       </td>
                       <td class='rowDescrip activateBtn'>
                          <textarea onkeyup='remove_attr(this);' id='description' name='description_repas'  rows='3' readonly required style='border:none;'/><?=$product->descriptionMenu?></textarea>
                          <i style='cursor:pointer;' id='edit_libelle_pens' onclick='editDescrip(this);' class='fa fa-pen'></i>
                       </td>
                       <td class='rowPrix activateBtn'>
                         <input onchange='remove_attr(this);' id='prix' name='prix_repas' class='display-none' type='number' value='<?=$product->prix?>' readonly required style='border:none;'/>
                         <i style='cursor:pointer;' id='edit_prix_pens' onclick='editPrix(this);' class='fa fa-pen'></i>
                      </td>
                      <td class='rowImg activateBtn'>
                        <img class='image_apercu' src='../../imageRepas/<?=$product->photoMenu?>' width='100px' height='100px' alt=''>
                        <input id='img' name='img_repas' style='display:none' onchange='show_apercu(this);remove_attr(this);'     type='file' accept='image/*'/>
                        <i style='cursor:pointer;' id='edit_img_pens' onclick='chooseFile(this);' class='fa fa-pen'></i>
                      </td>
                      <td class='btn'>
                         <button disabled id='button' type='button' data-toggle='modal' data-target='#<?=$product->codeMenu?>' class='btn btn-primary sm-1'>Enregister</button>
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
  <?php endforeach;?>
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
                     <form class="pagevalue" action='deleteproduct.php' method='GET'>
                        <input class="pageValue" name='page' type='hidden' value='<?=$i?>'>
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
   <script src="js/notification.js"></script>
   <script src="../../js/main.js"></script>
   <script>
   function chooseFile(x)
      {
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
   <script type="text/javascript" src="js/removeAlert.js"></script>
   <script type="text/javascript">
     $(document).ready(function(){
          $('#searchbar').keyup(function(){
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
        $('#searchbar').val(val);
        $('#searchresult').fadeOut('fast');
        $('#searchDiv').children('#btnDiv').children('button[type="submit"]').click();
      }
      function searchbarLoseCursor(){
           $('#searchresult').fadeOut('fast');
      }
      var pageValue = $('.pagevalue').children('input[type="hidden"]').val();
      if(pageValue<=0)
      {
        $('.page-item').css('display','none');
      }
   </script>
   <script src="js/activeBtn.js"></script>
   </body>
 </html>
