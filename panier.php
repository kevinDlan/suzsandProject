<?php require('header.php'); ?>
<div class="container">
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
                              <img class="img-responsive" src="imageRepas/<?=$customerProduct->photoMenu?>" alt="prewiew" width="120" height="80">
                              <div class="media-body">
                                  <p style="font-size:15px;font-family: fantasy;" class="media-heading offset-1"><a href="#"><?=$customerProduct->libelleMenu?></a></p>
                                  <p style="font-size:15px;font-family: sans-serif;" class="media-heading offset-1"><a href="#"><?=$customerProduct->descriptionMenu?></a></p>
                             </div>
                         </div>
                       </td>
                       <td class="col-sm-1 col-md-1" style="text-align: center">
                            <input name="quantity" type="number" class="form-control" id="exampleInputEmail1" value="<?=$_SESSION['panier'][$customerProduct ->id]?>">
                      </td>
                      <td class="col-sm-1 col-md-1 text-center">
                        <strong>$<?=$customerProduct->prix?></strong>
                      </td>
                      <td class="col-sm-1 col-md-1 text-center">
                        <strong>$<?=$panier->sous_total($customerProduct->id,$_SESSION['panier'][$customerProduct->id])?></strong>
                      </td>
                      <td class="col-sm-1 col-md-1">
                        <a href="panier.php?delPanier=<?=$customerProduct->id?>" class="btn btn-outline-danger btn-xs del">
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
              <p><h3>Montant total des produits : <b><?=$panier->total()?> FCFA</b></h3></p>
            </div>
            </div>
            <div class="card-footer">
                <div class="offset-8">
                    <a href="" class="btn btn-success ">Valider la commande</a>
                </div>
            </div>
        </div>
</div>
<?php require('footer.php'); ?>
