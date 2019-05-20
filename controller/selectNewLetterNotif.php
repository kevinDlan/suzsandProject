<?php
require(dirname(__DIR__).'\bd\connexion.php');
$query = $bdd->prepare("SELECT COUNT(*) as notifnewLetter FROM clientnewsLetter WHERE status ='new'");
$query->execute();
$dataUserMsg = $query->fetch();
$query->closeCursor();
echo $dataUserMsg['notifnewLetter'];
 ?>
