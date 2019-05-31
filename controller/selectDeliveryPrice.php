<?php
require(dirname(__DIR__).'\bd\connexion.php');
if(isset($_POST['query']) and !empty($_POST['query'])){
   $queryCondition = htmlspecialchars($_POST['query']);
   $query = $bdd->prepare('SELECT montant_livraison FROM region_livraison WHERE region=:regions');
   $query->bindValue('regions',$queryCondition,PDO::PARAM_STR);
   $query->execute();
   $result = $query->fetch();
   $query->closeCursor();
   echo $result['montant_livraison'];
}else {
  echo "false";
}
