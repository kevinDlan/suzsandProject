<?php
  if(isset($_POST) && !empty($_POST))
       {
         require(dirname(__DIR__).'\bd\connexion.php');
         $query = $bdd->prepare("DELETE FROM menu WHERE codeMenu= :codeProduct");
         $query->bindValue(':codeProduct',$_POST['codeProduit'],PDO::PARAM_STR);
         $result = $query->execute();
         if($result)
         {
           $query->closeCursor();
           $file ="../imageRepas/".$_POST['imgProduit'];
           if(file_exists($file))
           {
             unlink($file);
             session_start();
             $_SESSION['deleteProduct']=('Le produit a été Supprimer avec succès !');
             header('Location:../admin/deleteproduct.php');
           }
           }else {
                  session_start();
                  $_SESSION['deleteProductError']=('Le produit que vous voulez supprimer ne peut pas etre supprimer parce qu\'il est lié a des commandes.');
                  header('Location:../admin/deleteproduct.php');
                  var_dump($result);
                  }

           }else {
                  echo "OK";
                }
