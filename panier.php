<?php require('header.php'); ?>
<?php
if(isset($_GET['del']))
{
  $panier->del($_GET['del']);
}
?>
<div class="container">
   <div class="card shopping-cart">
            <div class="card-header bg-dark text-light">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Panier Client
                <a href="" class="btn btn-outline-info btn-sm pull-right">Continiu shopping</a>
                <div class="clearfix"></div>
            </div>
            <div class="card-body">
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
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                                <img class="img-responsive" src="imageRepas/<?=$customerProduct->photoMenu?>" alt="prewiew" width="120" height="80">
                        </div>

                        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                            <h4 class="product-name"><strong><?=$customerProduct->libelleMenu?></strong></h4>
                            <h4>
                                <small><?=$customerProduct->descriptionMenu?></small>
                            </h4>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                <h6><strong><?=$customerProduct->prix?>$<span class="text-muted">x</span></strong></h6>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4">
                                <span class="quantity"><?=$_SESSION['panier'][$customerProduct ->id]?></span>
                            </div>
                            <div class="col-2 col-sm-2 col-md-2 text-right">
                                <a href="panier.php?del=<?=$customerProduct->id?>" class="btn btn-outline-danger btn-xs del">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <?php endforeach; ?>
                    <!-- END PRODUCT -->
                <div class="pull-right">
                    <a href="" class="btn btn-outline-secondary pull-right">
                        Update shopping cart
                    </a>
                </div>
            </div>
            <div class="card-footer">
                <div class="coupon col-md-5 col-sm-5 no-padding-left pull-left">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="cupone code">
                        </div>
                        <div class="col-6">
                            <input type="submit" class="btn btn-default" value="Use cupone">
                        </div>
                    </div>
                </div>
                <div class="pull-right" style="margin: 10px">
                    <a href="" class="btn btn-success pull-right">Checkout</a>
                    <div class="pull-right" style="margin: 5px">
                        Total price: <b>50.00€</b>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php require('footer.php'); ?>
