<?php
require(dirname(__DIR__).'\bd\connexion.php');
$query = $bdd->prepare("SELECT region,montant_livraison FROM region_livraison");
$query->execute();
$area = $query->FetchAll(\PDO::FETCH_OBJ);
$query->closeCursor();
?>
