<?php
require(dirname(__DIR__).'\bd\connexion.php');
$query = $bdd->prepare("SELECT COUNT(*) as notifNbre FROM customer_order where order_status='on-processing'");
$query->execute();
$dataCmd = $query->fetch();
$query->closeCursor();
echo $dataCmd['notifNbre'];
?>
