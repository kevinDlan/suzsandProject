<?php
require(dirname(__DIR__).'\bd\connexion.php');
$query = $bdd->prepare("SELECT * FROM commande WHERE etatCommande='En attente de traitement' LIMIT 0,10");
$query->execute();
$data = $query->fetchAll(\PDO::FETCH_ASSOC);
$query->closeCursor();
