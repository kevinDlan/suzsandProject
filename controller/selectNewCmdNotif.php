<?php
require(dirname(__DIR__).'\bd\connexion.php');
$query = $bdd->prepare("SELECT COUNT(*) as notifNbre FROM commandelist");
$query->execute();
$dataCmd = $query->fetch();
$query->closeCursor();
echo $dataCmd['notifNbre'];
?>
