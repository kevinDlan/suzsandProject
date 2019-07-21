<?php require_once('header.php')?>
<?php
require_once('controller/selectProductForMenu.php');
?>
    <div class="site-blocks-cover overlay" style="background-image: url(images/suzsand.jpg);" data-aos="fade" data-stellar-background-ratio="1">
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
    </div>
    <div class="container mt-5 mb-5">
      <div class="container mb-5">
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
          <a class="" href="/panier/addpanier.php?productId=<?= $product->id;?>">
            <div class='product-item'>
              <figure onchange='click('#clic');' style='cursor:pointer;' id='img'>
                <img   src="imageRepas/<?= $product->photoMenu;?>" alt='Image' class='img-fluid'>
              </figure>
              <div class='px-4'>
                <h3 class='libelleMenu' id='lb' style='cursor:pointer;' onchange='click('#clic');'><?= $product->libelleMenu?></h3>
                <p class='mb-4'><?= $product->descriptionMenu;?></p>
                <p class='mb-4' style="font-weight:bold; font-size:20px"><?= $product->prix;?><strong> FCFA</strong></p>
                <div>
                  <!-- <form method='get' action='commande/commande.php'>
                    <input type='hidden' name='id' value='<?//= $product->id;?>'> -->
                    <a href="/panier/addpanier.php?productId=<?= $product->id;?>" class='btn btn-black mr-1 rounded-0'>Ajouter au panier</a>
                  <!-- </form> -->
                </div>
              </div>
            </div>
          </a>
          </div>
          <?php endforeach ?>
      </div>
    </div>
    <?php require_once('footer.php')?>
