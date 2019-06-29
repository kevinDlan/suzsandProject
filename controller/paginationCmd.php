<?php
  require(dirname(__DIR__).'\bd\connexion.php');
  $selectPage = $page;
  $pageProductValue = 10;
  if ( $selectPage != 1){
    $LimitParam1=($selectPage-1)*$pageProductValue;
    $LimitParam2=$selectPage*$pageProductValue;
  }
  else {
    $LimitParam1=0;
    $LimitParam2=$pageProductValue;
  }

  $query = $bdd->prepare("SELECT * FROM commande WHERE etatCommande='En attente de traitement' LIMIT $LimitParam1,$LimitParam2");
  $query->execute();
  //var_dump($query);
  $data = $query->fetchAll(\PDO::FETCH_ASSOC);
  //var_dump($query);
  $query->closeCursor();
