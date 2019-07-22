<?php
require('_header.php');
$json=array('error'=>true);
if(isset($_GET['productId'])){
    $product = $bd->query('SELECT id FROM menu WHERE id=:id',array('id'=>$_GET['productId']));
    if(empty($product)){
    $json['message']='ce produit n\'exite pas !';
    }else {
             $panier->add($product[0]->id);
             $json['error'] =false;
             $json['count'] =$panier->count();
             $json['message']='le produit a bien été ajouté a votre panier !';
          }
   }else{
          $json['message']='Aucun produit ajoutée au panier';
        }
 echo json_encode($json);
