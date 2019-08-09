<?php
require(dirname(__DIR__).'\bd\connexion.php');
$array = array('codeCommande' =>$_GET['orderCode']);
$query = $bdd->prepare("SELECT
                              libelleMenu,
                              prix, photoMenu,
                              product_quantity
                              FROM menu,customer_item_order
                              WHERE menu.id=customer_item_order.id_menu
                              AND code_commande=:codeCommande
                       ");
$query->execute($array);
$orderItem = $query->fetchAll(\PDO::FETCH_OBJ);
$query->closeCursor();

//select customer order total price
$query = $bdd->prepare("SELECT order_total FROM customer_order WHERE code_commande=:codeCommande");
$query->execute($array);
$totalorder = $query->fetchAll(\PDO::FETCH_OBJ);
$query->closeCursor();

//select customer order total price
$query = $bdd->prepare("SELECT nomPrenom FROM customer WHERE codecommande=:codeCommande");
$query->execute($array);
$customer = $query->fetchAll(\PDO::FETCH_OBJ);
$query->closeCursor();
