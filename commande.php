<?php
    require_once('controller/selectDeliveryArea.php');
    //include('controller/selectionProduit.php');
 ?>
<?php require 'header.php'; ?>
    <div class="container-fluid" style="margin-top:15%; margin-bottom:10%;">
      <div class="row">
         <div class="customer-personnel-info col-lg-6" style="text-align:center;" >
           <div class="note">
             <p>Information personnelle</p>
           </div>
           <div class="form-content">
              <form class="needs-validation" novalidate method="post" action="validation.php" role="form">
                <div class="form-group row">
                  <label for="validationCustom01" class="col-sm-4 col-form-label">Nom et Prénom</label>
                  <div class="col-sm-8">
                     <input name="nomPrenom" type="text" class="form-control" id="validationCustom01" pattern="^[a-zA-Zàé]([a-zA-Zàé ]){1,}$" placeholder="Votre nom&prénom"  required>
                  </div>
                  <div class="invalid-feedback">Veuillez remplir ce champ</div>
                </div>
                <div class="form-group row">
                   <label for="validationCustom02" class="col-sm-4 col-form-label">Téléphone</label>
                    <div class="col-sm-8">
                      <input name="contact" type="tel" class="form-control" id="validationCustom02"  pattern="^[0-9]{2}([ ]?[0-9]{2}){3}$" placeholder="Votre téléphone" required>
                    </div>
                   <div class="invalid-feedback">Entrez seulement des chiffres</div>
                </div>
                <div class="form-group row">
                   <label for="validationCustom02" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                      <input name="email" type="email" class="form-control" id="validationCustom02" placeholder="Votre Email" required>
                    </div>
                   <div class="invalid-feedback">Entrez seulement des chiffres</div>
                </div>
                <div class="form-group row">
                  <label for="validationCustom02" class="col-sm-4 col-form-label">Ville et Quartier de livraison</label>
                  <div class="col-sm-8 row">
                      <div class="col-sm-4">
                        <select class="custom-select" name="ville" id="inputGroupSelect01">
                            <option>--Ville--</option>
                            <option>Abidjan</option>
                         </select>
                      </div>
                      <div class="col-sm-8">
                        <select class="custom-select" id="quartier" name="quartierLivraison" onchange="selectDeliveryPrice(this);" required>
                            <option>--Quartier--</option>
                            <?php foreach ($area as $areas): ?>
                                <option><?=$areas->region ?></option>
                            <?php endforeach; ?>
                         </select>
                      </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputGroupSelect01" class="col-sm-4 col-form-label">Montant de la livraison</label>
                  <div class="col-sm-8 input-group">
                      <input class="form-control col-sm-4" type="number" readonly id="deleveryPrice" name="montant_livraison" value="0">
                      <div class="input-group-prepend">
                        <label class=" form-control input-group-text" for="inputGroupSelect01">FCFA</label>
                      </div>
                  </div>
                </div>
                <input class="order-total" type="hidden" name="order-total-price" value="">
                <button class="btn btn-black mr-1 mx-auto col-md-12 col-lg-8" style="height: 5%; font-size: 1em;margin-top:6%;" type="submit">Valider la commande</button>
              </form>
           </div>
         </div>
         <div class="customer-commande-info col-lg-6" style="text-align:center;">
            <div class="note">
              <p>Information Concernant la commande</p>
            </div>
            <div class="form-content">
              <table class="table table-bordered table-responsive">
               <thead>
                <tr>
                   <th scope="col">Repas</th>
                   <th scope="col">Qté</th>
                   <th scope="col">PU</th>
                   <th scope="col">Total</th>
               </tr>
              </thead>
              <tbody>
                <?php
                     $ids = array_keys($_SESSION['panier']);
                     if(empty($ids)){
                       $products = array();
                     }else {
                       $products = $bd->query('SELECT * FROM menu WHERE id IN('.implode(',',$ids).')');
                     }
                 ?>
                 <?php foreach ($products as $customerProduct):?>
              <tr>
                  <td>
                    <div class="media">
                        <img class="img-responsive" src="imageRepas/<?=$customerProduct->photoMenu?>" alt="prewiew" width="120" height="80">
                        <div class="media-body">
                            <p style="font-size:15px;font-family: fantasy;" class="media-heading offset-1"><a class="product_detail" href="/product_detail.php?product=<?=$customerProduct->codeMenu;?>"><?=$customerProduct->libelleMenu;?></a></p>
                       </div>
                   </div>
                  </td>
                  <td><?=$_SESSION['panier'][$customerProduct ->id]?></td>
                  <td><?=money_format($customerProduct->prix)?></td>
                  <td><?=money_format($panier->sous_total($customerProduct->id,$_SESSION['panier'][$customerProduct->id]))?></td>
              </tr>
            <?php endforeach; ?>
               <tr>
                 <td colspan="3"><strong>Montant Total de la commande</strong></td>
                 <td><b><?=money_format($panier->total())?></b></td>
               </tr>
               <tr>
                 <td colspan="3"><strong>Montant Total (Livraison+Commande)</strong></td>
                 <td><b><span class="totalCommande"><?=money_format($panier->total())?></span></b></td>
               </tr>
            </tbody>
         </table>
         <a href="panier.php" class="btn btn-black mr-1 mx-auto col-md-12 col-lg-8" style="height: 5%; font-size: 1em;margin-top:6%;">Modifier la commande</a>
        </div>
      </div>
    </div>
  </div>
    <script type="text/javascript">
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    <script type="text/javascript">
       function selectDeliveryPrice(x){
        var value = $(x).val();
        if(value != '--Quartier--')
        {
         $.ajax({
           type: 'POST',
           url: 'controller/selectDeliveryPrice.php',
           data: 'query=' + encodeURIComponent(value),
           success:function(data){
             $('#deleveryPrice').val(data);
             var prixTotal=<?=$panier->total()?>;
             var totalCommande = parseInt(prixTotal)+parseInt(data);
             $('.totalCommande').empty().append(totalCommande);
             $('.order-total').val(totalCommande);
             // $('#montantTotal').show("slow");
             // $('#totalCommande').val(
             //                         parseInt($('#prixUnitaire').val())*
             //                         parseInt($('.nbrePlat').val())+
             //                         parseInt($('#deleveryPrice').val())
             //                        );
           },
           error:function(){
                            alert('Error');
                            }
               });
         }
        }
    </script>

<?php require 'footer.php'; ?>
