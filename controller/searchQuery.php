<?php
require(dirname(__DIR__).'\bd\connexion.class.php');
$bd = new BD();
$data = $bd->query("SELECT * FROM  menu WHERE codeMenu = :prodCode",array("prodCode"=>$code));
