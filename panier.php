<?php require('header.php'); ?>
<div class="container" style="margin-top:10%;margin-bottom:5%;">
<?php if(isset($_SESSION['panier']) AND !empty($_SESSION['panier'])):?>
  <form class="form" action="panier.php" method="post">
    <?php if(isset($_GET['delPanier']) And !empty($_GET['delPanier'])): ?>
      <div class="alert alert-success mx-auto col-md-6" style="text-align:center;">
         le produit a été supprimé du panier avec succès !
         <button type='button' class='close' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
         </button>
      </div>
    <?php endif; ?>
   <div class="card shopping-cart">
            <div class="card-header bg-dark text-light">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Panier Client
                <div class="clearfix"></div>
            </div>
            <div class="card-body">
              <table class="table table-hover">
               <thead>
                   <tr>
                       <th>Produit</th>
                       <th>Quantité</th>
                       <th class="text-center">Prix</th>
                       <th class="text-center">S_total</th>
                       <th>Action</th>
                   </tr>
               </thead>
                    <!-- PRODUCT -->
                    <?php
                         $ids = array_keys($_SESSION['panier']);
                         if(empty($ids)){
                           $products = array();
                         }else {
                           $products = $bd->query('SELECT * FROM menu WHERE id IN('.implode(',',$ids).')');
                         }
                     ?>
                     <?php foreach ($products as $customerProduct):?>
                       <tbody>
                         <tr>
                       <td class="col-sm-8 col-md-6">
                          <div class="media">
                              <img class="img-responsive" src="imageRepas/<?=$customerProduct->photoMenu;?>" alt="prewiew" width="120" height="80">
                              <div class="media-body">
                                  <p style="font-size:15px;font-family: fantasy;" class="media-heading offset-1"><a class="product_detail" href="/product_detail.php?product=<?=$customerProduct->codeMenu;?>"><?=$customerProduct->libelleMenu?></a></p>
                                  <p style="font-size:15px;font-family: sans-serif;" class="media-heading offset-1"><a class="product_detail" href="/product_detail.php?product=<?=$customerProduct->codeMenu;?>"><?=$customerProduct->descriptionMenu?></a></p>
                             </div>
                         </div>
                       </td>
                       <td class="col-sm-1 col-md-1" style="text-align: center">
                            <input onchange="refreshbtnactive();" name="panier[quantity][<?=$customerProduct->id;?>]" type="number" min="1" class="form-control" id="exampleInputEmail1" value="<?=$_SESSION['panier'][$customerProduct ->id]?>">
                      </td>
                      <td class="col-sm-1 col-md-1 text-center">
                        <strong><?=money_format($customerProduct->prix)?></strong>
                      </td>
                      <td class="col-sm-1 col-md-1 text-center">
                        <strong><?=money_format($panier->sous_total($customerProduct->id,$_SESSION['panier'][$customerProduct->id]))?></strong>
                      </td>
                      <td class="col-sm-1 col-md-1">
                        <a href="panier.php?delPanier=<?=$customerProduct->id;?>" class="btn btn-outline-danger btn-xs del">
                           <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                      </td>
                     </tr>
                  </tbody>
                    <?php endforeach; ?>
                    <!-- END PRODUCT -->
            </table>
            <hr>
            <div class="offset-6">
              <p><h3>Montant total des produits : <b><?=money_format($panier->total())?></b></h3></p>
            </div>
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="offset-1 btn">
                  <button disabled type="submit" class="btn btn-success refreshbtn">Actualiser le panier<i class="fas fa-refresh offset-1"></i></button>
                </div>
                <div class="offset-6">
                    <a href="commande.php" class="btn btn-success ">Valider la commande</a>
                </div>
              </div>
            </div>
        </div>
     </form>
     <script type="text/javascript">
       function refreshbtnactive(){
         //console.log(
         $(".form").children('.card').children('.card-footer').children('.row').children('.btn').children('.refreshbtn').removeAttr('disabled');
         //);
         //$("#refreshbtn").removeAttr('disabled');
       }
     </script>
   <?php else:?>
          <div class="panier-vide">
              <div class='col-md-6 offset-3' style='text-align:center'><h4>You cart is empty !</h4></div><br>
              <div class="col-md-6 offset-3" style='text-align:center'>
                <a class="btn btn-black" href="menu.php">Allez au menu</a>
              </div>
          </div>
   <?php endif;?>
</div>
<?php require('footer.php'); ?>
