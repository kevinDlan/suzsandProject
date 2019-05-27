<?php
require(dirname(__DIR__).'\bd\connexion.php');
$date = date('Y-m-d');
$query = $bdd->prepare("SELECT *  FROM  menu WHERE upDate_date<:dates");
$query->bindValue(':dates',$date);
$query->execute();
$data= $query->fetchAll(\PDO::FETCH_ASSOC);
$query->closeCursor();
 ?>
