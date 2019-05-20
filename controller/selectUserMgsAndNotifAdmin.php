<?php
require(dirname(__DIR__).'\bd\connexion.php');
$query = $bdd->prepare("SELECT COUNT(*) as notifNbre FROM contacter WHERE status_msg ='non vue'");
$query->execute();
$dataUserMsg = $query->fetch();
$query->closeCursor();
echo $dataUserMsg['notifNbre'];
 ?>
