<?php
 $valueArray = array("Terminée","Annulée");
if (isset($_POST) AND !empty($_POST) AND in_array($_POST['changeOrderStatus'],$valueArray)){
  require(dirname(__DIR__).'\bd\connexion.class.php');
  $con = new BD();
  $update = $con->updateQuery("UPDATE
                                     customer_order SET order_status =:orderstatus
                                     WHERE code_commande=:codeCommande",
                                     array("orderstatus"=>$_POST['changeOrderStatus'],"codeCommande"=>$_POST['order_code'])
                              );
  if($update){
              session_start();
              $_SESSION['updateOrderStatus']="L'état de la commande a été mise a jour avec succès !";
              header('Location:admin/commandeList.php');
              }else {
              session_start();
              $_SESSION['updateOrderStatus']="une erreur c'est produite la mise à jour n'a pas pu etre effectué ! Veuillez réessayé SVP";
              header('Location:admin/customerOrder.php');

                 }
}else{
  echo "Erreur";
}
// if(isset($_POST) and !empty($_POST)){
// //tester le button qui envoie le formulaire
// //si c'est le button de traitement de la commande
//   if(isset($_POST['cmdtreat'])){
//    $etatcmd ='commande traité';
//    $query = $bdd->prepare(" ");
//    $query->bindValue(':etatcmd',$etatcmd,PDO::PARAM_STR);
//    $query->bindValue(':cmdid',$_POST['treatId'],PDO::PARAM_STR);
//    $query->execute();
//    if($query){
//               $query->closeCursor();
//               header('Location:../admin/commandeList.php');
//     }else {
//              echo "Commande non traitée";
//           }
//   }
//   //si c'est le button d'annulation de la commande
//   else if(isset($_POST['cmdcancel'])){
//     $etatcmd ='commande annulée';
//     $query = $bdd->prepare("UPDATE commande SET etatCommande =:etatcmd WHERE id = :cmdid ");
//     $query->bindValue(':etatcmd',$etatcmd,PDO::PARAM_STR);
//     $query->bindValue(':cmdid',$_POST['cancelId'],PDO::PARAM_STR);
//     $query->execute();
//     if($query){
//       header('Location:../admin/commandeList.php');
//      }else {
//               echo "Commande non traitée";
//            }
//
//   }
// }
 ?>
