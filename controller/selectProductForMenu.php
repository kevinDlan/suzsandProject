<?php
   require(dirname(__DIR__).'\bd\connexion.php');
   $query=$bdd->prepare("SELECT * FROM menu");
   $query->execute();
   $data = $query->fetchAll(\PDO::FETCH_OBJ);
