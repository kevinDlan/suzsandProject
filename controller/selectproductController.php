<?php

$db_name = "suzsand_db";
$user_name = "root";
$password = "dylan7729";
$server = "localhost";

try{

    $bdd = new PDO('mysql:host='.$server.';dbname='.$db_name.';charset=utf8',$user_name,$password);
}catch(Exception $e)
{
    die("Erreur :".$e->getMessage);
}

   //require_once('../bd/connexion.php');
   $query=$bdd->prepare("SELECT * FROM menu ORDER BY id ASC LIMIT 3");
   $query->execute();
   $data = $query->fetchAll(\PDO::FETCH_ASSOC);

   $query=$bdd->prepare("SELECT * FROM menu ORDER BY id DESC LIMIT 3");
   $query->execute();
   $datas = $query->fetchAll(\PDO::FETCH_ASSOC);
   //var_dump($data);
   //foreach ($data as $product) {
   //echo $product["photoMenu"];
   //}
  ?>
