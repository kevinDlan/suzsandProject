<?php
require(dirname(__DIR__).'\bd\connexion.php');
$query = $bdd->prepare("SELECT *  FROM  menu ORDER BY id DESC LIMIT 0,10");
$query->execute();
$data= $query->fetchAll(\PDO::FETCH_ASSOC);
$query->closeCursor();
 ?>
