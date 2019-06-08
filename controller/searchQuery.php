<?php
   require(dirname(__DIR__).'\bd\connexion.php');
   $query = $bdd->prepare('SELECT * FROM  menu WHERE codeMenu = :prodCode');
   $query->bindValue(':prodCode',$code,PDO::PARAM_STR);
   $query->execute();
   $data = $query->fetchAll(\PDO::FETCH_ASSOC);
   //var_dump($query->errorInfo());
   $query->closeCursor();

?>
