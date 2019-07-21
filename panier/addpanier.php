<?php
require('../_header.php');
if(isset($_GET['productId'])){
    $product = $bd->query('SELECT id FROM menu WHERE id=:id',array('id'=>$_GET['productId']));
    if(empty($product)){
      die('ce produit n\'exite pas !');
    }else {
          $panier->add($product[0]->id);
          var_dump($_SESSION['panier']);
          die('le produit a bien été ajouté a votre panier ! <a href="javascript:history.back()">Retour au catalogue</a>');
    }
   }else{
     die("Aucun produit ajoutée au panier");
}
