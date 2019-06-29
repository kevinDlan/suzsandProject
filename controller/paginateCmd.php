<?php
require(dirname(__DIR__).'\bd\connexion.php');
$query = $bdd->prepare("SELECT COUNT(*) AS nbreCmd FROM commande WHERE etatCommande='En attente de traitement'");
$query->execute();
$result = $query->fetch();
$query->closeCursor();
$nbreOfCmd = $result['nbreCmd'];
$CmdPerPage =10;
$nbreOfPage = ceil($nbreOfCmd / $CmdPerPage);
