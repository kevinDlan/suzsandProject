<?php
   require(dirname(__DIR__).'\bd\connexion.php');
   $query=$bdd->prepare("SELECT * FROM menu ORDER BY id DESC");
   $query->execute();
   $data = $query->fetchAll(\PDO::FETCH_OBJ);
