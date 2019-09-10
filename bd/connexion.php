<?php
$db_name = "suzsand_db";
$user_name = "root";
$password = "dylan7729";
$server = "localhost";

try{

    $bdd = new PDO('mysql:host='.$server.';dbname='.$db_name.';charset=utf8',$user_name,$password);
}catch(Exception $e)
{
    die("Erreur :".$e->getMessage());
}
?>
