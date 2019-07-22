<?php
require_once('controller/selectproductController.php');
require_once('panier.class.php');
require('bd/connexion.class.php');
$bd = new BD();
$panier = new panier($bd);
