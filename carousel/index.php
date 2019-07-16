
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="carousel.css">
<script type="text/javascript">
    $(document).ready(function(){
        $(".wish-icon i").click(function(){
            $(this).toggleClass("fa-heart fa-heart-o");
        });
    });
    $(function() {
      $("#popModel").modal('show');
    });
    $(function() {
      $("#popModel2").modal('show');
    });
    $(function(){
        $('#img, #img1').click(
          function(){
            $('#clic').click();
          }
          )
      })
      $(function(){
        $('#lb, #lb1').click(
          function(){
            $('#clic').click();
          }
          )
      })
</script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" style="background: orange;"  data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" style="background:orange;"  data-slide-to="1"></li>
            </ol>
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="row">
                        <?php
                           foreach ($data as $product)
                        {

                          echo"
                          <div class='col-lg-4 col-md-6 mb-5'>
                          <a href='commande/commande.php?id=".$product["id"]."'>
                            <div class='product-item'>
                              <figure onchange='click('#clic');' style='cursor:pointer;' id='img'>
                                <img   src='imageRepas/".$product["photoMenu"]."' alt='Image' class='img-fluid'>
                              </figure>
                              <div class='px-4'>
                                <h3 class='libelleMenu' id='lb' style='cursor:pointer;' onchange='click('#clic');'>".$product["libelleMenu"]."</h3>
                                <p class='mb-4'>".$product["descriptionMenu"]."</p>
                                <p class='mb-4' style='font-weight:bold; font-size:20px'>".$product["prix"]." <strong> FCFA</strong></p>
                                <div>
                                  <form method='get' action='commande/commande.php'>
                                    <input type='hidden' name='id' value='".$product["id"]."'>
                                    <button type='submit' class='btn btn-black mr-1 rounded-0' id='clic'>Commander</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </a>
                          </div>
                            ";
                        }
                       ?>
                </div>
                </div>
                <div class="item carousel-item">
                    <div class="row">
                        <?php
                           foreach ($datas as $products)
                        {

                          echo"
                          <div class='col-lg-4 col-md-6 mb-5'>
                            <div class='product-item '>
                              <figure onchange='click('#clic');' style='cursor:pointer;' id='img1'>
                                <img   src='imageRepas/".$products["photoMenu"]."' alt='Image' class='img-fluid'>
                              </figure>
                              <div class='px-4'>
                                <h3 class='libelleMenu' id='lb1' style='cursor:pointer;' onchange='click('#clic');'>".$products["libelleMenu"]."</h3>
                                <p class='mb-4'>".$products["descriptionMenu"]."</p>
                                <p class='mb-4' style='font-weight:bold; font-size:20px'>".$products["prix"]." <strong> FCFA</strong></p>
                                <div>
                                  <form method='get' action='commande/commande.php'>
                                    <input type='hidden' name='id' value='".$products["id"]."'>
                                    <button type='submit' class='btn btn-black mr-1 rounded-0' id='clic'>Commander</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                            ";
                        }
                       ?>
                    </div>
                </div>
            </div>
            <!-- Carousel controls -->
            <a style="height: 40px; width: 40px; background: #f16821; margin: auto 0; border-radius: 40px; opacity: 0.8;" class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                <i  class="fa fa-angle-left"></i>
            </a>
            <a style="height: 40px; width: 40px; background: #f16821; margin: auto 0; border-radius: 40px; opacity: 0.8;" class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
        </div>
    </div>
</div>
<style type="text/css">

    .product-item
{
    border: 2px solid #DDD;
    border-radius: 5px;
    padding: 5px;
}
@media (min-width: 10px) and (max-width: 767.98px) {
  .dxsnone {
    display: none;
  }
}
@media (min-width: 768px) and (max-width: 991.98px) {
  .dsmnone{
    display: none;
  }
}
</style>
