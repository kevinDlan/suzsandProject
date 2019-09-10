<?php
  require "header.php";
 ?>
 <?php if(isset($_GET['error']) AND $_GET['error']=404){
     $error = "Désolé,
               mais la page que vous recherchez n'existe pas,
               a été supprimée,
               modifiée ou est temporairement indisponible.";
 } ?>
 <div class="container">
   <div class="customer-commande-info col-lg-8 offset-2" style="text-align:center;margin-top:16.666%;">
         <div class="note">
           <p>Erreur</p>
         </div>
         <div class="form-content">
           <div class="row">
             <div class="col-md-5">
                <p class="error-msg" style="color:#FFABBA;">
                  <i class="fas fa-times-circle fa-7x"></i>
                </p>
             </div>
             <div class="col-md-5">
               <p><?=$error; ?></p>
             </div>
           </div>
         </div>
   </div>
   <div class="btn">
       <a class="btn btn-success" href="index.php">Retour au menu principal</a>
   </div>
 </div>
 <?php
       require "footer.php";
  ?>
