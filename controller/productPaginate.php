<?php
require(dirname(__DIR__).'\bd\connexion.php');
$query = $bdd->prepare("SELECT COUNT(*) AS nbreProd FROM menu");
$query->execute();
$result = $query->fetch();
$query->closeCursor();
$nbreOfProd = $result['nbreProd'];
$CmdPerPage =10;
$nbreOfPage = ceil($nbreOfProd / $CmdPerPage);
