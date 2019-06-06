<?php

if(isset($_POST) and !empty($_POST)){
  //tester le button qui envoie le formulaire
  require(dirname(__DIR__).'\bd\connexion.php');

  //si c'est le button de traitement de la commande
  if(isset($_POST['cmdtreat'])){
   $etatcmd ='commande traité';
   $query = $bdd->prepare("UPDATE commande SET etatCommande =:etatcmd WHERE id = :cmdid ");
   $query->bindValue(':etatcmd',$etatcmd,PDO::PARAM_STR);
   $query->bindValue(':cmdid',$_POST['treatId'],PDO::PARAM_STR);
   $query->execute();
   if($query){
              $query->closeCursor();
              header('Location:../admin/commandeList.php');
    }else {
             echo "Commande non traitée";
          }
  }

  //si c'est le button d'annulation de la commande
  else if(isset($_POST['cmdcancel'])){
    $etatcmd ='commande annulée';
    $query = $bdd->prepare("UPDATE commande SET etatCommande =:etatcmd WHERE id = :cmdid ");
    $query->bindValue(':etatcmd',$etatcmd,PDO::PARAM_STR);
    $query->bindValue(':cmdid',$_POST['cancelId'],PDO::PARAM_STR);
    $query->execute();
    if($query){
      header('Location:../admin/commandeList.php');
     }else {
              echo "Commande non traitée";
           }

  }
}
 ?>
