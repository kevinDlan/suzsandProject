<?php
require(dirname(__DIR__).'\bd\connexion.php');
   $query=$bdd->prepare("SELECT * FROM menu ORDER BY id ASC LIMIT 3");
   $query->execute();
   $data = $query->fetchAll(\PDO::FETCH_OBJ);

   $query=$bdd->prepare("SELECT * FROM menu ORDER BY id DESC LIMIT 3");
   $query->execute();
   $datas = $query->fetchAll(\PDO::FETCH_OBJ);
   $query->closeCursor();
  ?>
