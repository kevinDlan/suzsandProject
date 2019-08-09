<?php if(isset($_GET['product']) AND !empty($_GET['product'])):?>
     <?php require 'header.php';
        $product = $bd->query("SELECT * FROM menu WHERE codeMenu=:codeproduit",array("codeproduit"=>$_GET['product']));
      ?>
      <?php if(!empty($product)):?>
      <div class="container" style="margin-top:13%;margin-bottom:10%">
       <?php foreach($product as $products):?>
           <div class="row">
                <div class="col-xs-4 item-photo">
                     <img class="col-lg-10"  src="imageRepas/<?=$products->photoMenu;?>" />
                </div>
                <div class="col-xs-6" style="border:0px solid gray">
                     <h3><strong><?=$products->libelleMenu;?></strong></h3>
                     <h5><?=$products->descriptionMenu;?></h5>
                     <h5 style="color:#337ab7"><small style="color:#337ab7">(5054 ventes)</small></h5>
                     <h4 class="title-price"><small>Cout du repas</small></h4>
                     <h3 style="margin-top:0px;"><?=money_format($products->prix)?></h3>
                     <div class="section" style="padding-bottom:20px;">
                         <h4 class="title-attr"><small>Quantité</small></h4>
                         <div>
                             <div class="btn-minus"><span class="glyphicon glyphicon-minus"></span></div>
                               <input class="col-md-5 product-quantity" name='product-quantity' type='number'min="1" value="1"/>
                             <div class="btn-plus"><span class="glyphicon glyphicon-plus"></span></div>
                         </div>
                     </div>
                     <div class="section" style="padding-bottom:20px;">
                         <a class='btn btn-black mr-1 rounded-0 addPanier' href="/addpanier.php?productId=<?= $products->id;?>">Ajouter au panier<i class="fas fa-shopping-cart offset-1"></i></a>
                         <button style="display:none;" class="visited-cart" data-toggle="modal" data-target="#visited-cart" type="button"></button>
                     </div>
                 </div>
             </div>
          <?php endforeach; ?>
         </div>
         <!-- Modal -->
            <div class='modal fade' id='visited-cart' tabindex='-1' role='dialog' aria-labelledby='modal' aria-hidden='true'>
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
                  <p class='text-center' style='text-size:30px;'>Le produit a été ajouter au panier avec succès. Voulez-vous visité votre panier?</p>
                  <p class='text-center'>
                    <a  class='btn btn-info ml-4' data-dismiss='modal' aria-label='Close'>Non</a>
                    <a href="panier.php"  class='btn btn-success ml-4'>Oui</a>
                  </p>
              </div>
             <div class='modal-footer'>
             </div>
          </div>
         </div>
         </div>
         <!-- endModal -->
         <script type="text/javascript">
              $(document).ready(function(){
                //-- Click on QUANTITY
                $(".btn-minus").on("click",function(){
                    var now = $(".section > div > input").val();
                    if ($.isNumeric(now)){
                        if (parseInt(now) -1 > 0){ now--;}
                        $(".section > div > input").val(now);
                    }else{
                        $(".section > div > input").val("1");
                   }
                })
                $(".btn-plus").on("click",function(){
                    var now = $(".section > div > input").val();
                    if ($.isNumeric(now)){
                        $(".section > div > input").val(parseInt(now)+1);
                    }else{
                       $(".section > div > input").val("1");
                    }
                })
            })
         </script>
       <?php else:
                  $error="le produit que vous éssayez de voir n'exite pas !";
                   include 'error.php';
             endif;
       ?>
       <?php require 'footer.php'; ?>
  <?php
        else:
              $error ="Le produit que vous essayé de voir n'exist pas !";
              include 'error.php';
        endif;
  ?>
