<?php
require(dirname(__DIR__).'\bd\connexion.php');
$query = $bdd->prepare("SELECT COUNT(*) as notifNbre FROM commande WHERE etatCommande ='En attente de traitement'");
$query->execute();
$dataCmd = $query->fetch();
$query->closeCursor();
 ?>