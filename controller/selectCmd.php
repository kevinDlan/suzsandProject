<?php
require(dirname(__DIR__).'\bd\connexion.php');
$query = $bdd->prepare("SELECT * FROM commandeliste");
$query->execute();
$data = $query->fetchAll(\PDO::FETCH_ASSOC);
$query->closeCursor();