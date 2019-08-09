<?php if(isset($_GET['orderCode']) && !empty($_GET['orderCode'])):?>
  <?php require 'header.php'; ?>
  <?php require '../controller/customerOrderItem.php'; ?>
  <?php require '../moneyformatfunction.php'; ?>
    <div class="container" style="margin-top:10%;margin-left:15%;">
      <div class="customer-commande-info col-lg-10">
         <div class="note">
           <?php foreach($customer as $custom): ?>
             <p>Information Concernant la commande de Monsieur <b><?=$custom->nomPrenom?></b></p>
           <?php endforeach; ?>
         </div>
         <div class="form-content">
           <table class="table table-bordered" style="text-align:center;">
            <thead>
             <tr>
                <th scope="col">Repas</th>
                <th scope="col">Qté</th>
                <th scope="col">Coût</th>
                <th scope="col">Total</th>
            </tr>
           </thead>
           <tbody>
              <?php foreach ($orderItem as $orderitem):?>
           <tr>
               <td>
                 <div class="media">
                     <img class="img-responsive" src="../imageRepas/<?=$orderitem->photoMenu?>" alt="prewiew" width="120" height="80">
                     <div class="media-body">
                         <p style="font-size:15px;font-family: fantasy;" class="media-heading offset-1"><a href="#"><?=$orderitem->libelleMenu?></a></p>
                    </div>
                </div>
               </td>
               <td><?=$orderitem->product_quantity?></td>
               <td><?=money_format($orderitem->prix)?></td>
               <td><?=money_format($orderitem->prix*$orderitem->product_quantity)?></td>
           </tr>
         <?php endforeach; ?>
            <tr>
              <td colspan="3"><strong>Montant Total (Livraison+Commande)</strong></td>
              <?php foreach($totalorder as $total): ?>
               <td><b><span class="totalCommande"><?=money_format($total->order_total)?></span></b></td>
             <?php endforeach; ?>
            </tr>
         </tbody>
      </table>
        <form class="" action="../controller/treatmentCmd.php" method="POST" style="margin-top:5%;">
         <div id="row" class="row">
             <button id="btn" disabled class="btn btn-black mr-1 mx-4 col-md-6 col-lg-6" style="height: 5%; font-size: 1em;">Mettre à jour<i class="fa fa-refresh offset-1"></i></button>
             <div id="select" class="form-group col-md-4 col-lg-4 select">
                <select onchange="selectlistchange(this)" class="custom-select" name="changeOrderStatus">
                  <optgroup label="Traiter la commande">
                    <option value="En cour">En cour</option>
                    <option value="Terminée">Terminée</option>
                    <option value="Annulée">Annulée</option>
                  </optgroup>
                </select>
             </div>
             <input type="hidden" name="order_code" value="<?=$_GET['orderCode'] ?>">
         </div>
        </form>
     </div>
    </div>
  </div>
  <script type="text/javascript">
    function selectlistchange(x){
      $(x).parents('#select').parents('#row').children('#btn').removeAttr('disabled');
    }
  </script>
 <?php require 'footer.php'; ?>
<?php else: header('Location:home.php');
       endif ?>
