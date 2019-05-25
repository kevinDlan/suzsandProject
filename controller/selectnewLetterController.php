<?php
  require_once('../bd/connexion.php');
  $query = $bdd->prepare('SELECT * FROM clientnewsLetter ');
  $query->execute();
  $data = $query->fetchAll(\PDO::FETCH_ASSOC);
  $query->closeCursor();
  //var_dump($data)
