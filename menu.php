<?php require_once('header.php')?>
<?php require_once('controller/selectProductForMenu.php');?>
    <!-- <div class="site-blocks-cover overlay" style="background-image: url(images/suzsand.jpg);" data-aos="fade" data-stellar-background-ratio="1">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
            <div class="row mb-4">
              <div class="col-md-12" style="text-align: center;">
                <h1>Bienvenue au Menu de Suzsand </h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <style media="screen">
      .menu{
        margin-top:10%;
      }
      @media(max-width:1276px){
        .menu{
              margin-top:35.35%;
        }
      }
   .product-item {
    border: 2px solid #DDD;
    border-radius: 5px;
    padding: 5px;
}
    </style>
    <div class="container menu mb-5">
      <div class="container mb-5 col-md-12 col-12">
        <div class=""><hr></div>
        <div class="row justify-content-center">
          <div class="col-md-6 text-center">
            <h2 class="section-title mb-3">Menu Suz'Sand</h2>
          </div>
        </div>
       <div class=""><hr></div>
    </div>
      <div class="row">
        <?php foreach($data as $product):?>
          <div class='col-lg-4 col-md-6 mb-5'>
            <div class='product-item'>
             <a class="product_detail" href="/product_detail.php?product=<?= $product->codeMenu;?>">
              <figure onchange='click('#clic');' style='cursor:pointer;' id='img'>
                <img src="imageRepas/<?= $product->photoMenu;?>" alt='Image' class='img-fluid'>
              </figure>
             </a>
              <div class='px-4'>
               <a class="product_detail" href="/product_detail.php?product=<?= $product->codeMenu;?>">
                  <h3 class='libelleMenu' id='lb' style='cursor:pointer;' onchange='click('#clic');'><?= $product->libelleMenu?></h3>
                  <p class='mb-4'><?= $product->descriptionMenu;?></p>
                  <p class='mb-4' style="font-weight:bold; font-size:20px"><?=money_format($product->prix)?></p>
               </a>
                <div>
                  <!-- <form method='get' action='commande/commande.php'>
                    <input type='hidden' name='id' value='<?//= $product->id;?>'> -->
                    <a class='btn btn-black mr-1 rounded-0 addPanier' href="/addpanier.php?productId=<?= $product->id;?>">Ajouter au panier<i class="fas fa-shopping-cart offset-1"></i></a>
                    <button style="display:none;" class="visited-cart" data-toggle="modal" data-target="#visited-cart" type="button"></button>
                  <!-- </form> -->
                </div>
              </div>
            </div>
          </div>
          <?php endforeach ?>
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
      </div>
    </div>
    <?php require('carousel/modalAfterAddcart.php'); ?>
<?php require_once('footer.php')?>
