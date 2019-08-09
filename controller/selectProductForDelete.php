<?php
require(dirname(__DIR__).'\bd\connexion.class.php');
$bd = new BD();
$data = $bd->query("SELECT *  FROM  menu ORDER BY id DESC LIMIT 0,10");
