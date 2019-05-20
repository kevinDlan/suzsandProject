<?php

if(isset($_POST) && !empty($_POST))
     {
       require(dirname(__DIR__).'\bd\connexion.php');
       $query = $bdd->prepare("DELETE FROM menu WHERE codeMenu= :codeProduct");
       $query->bindValue('codeProduct',$_POS['codeProduit']);
       $result = $query->execute();
       if($result)
       {
         //Requette de suppression de l'image dans le dossier imageRepas

        session_start();
        $_SESSION['deleteProductResult']="Le produit a été supprimé de la base de données avec succès !";
        header('Location:../admin/traitementproduit/deleteproduct.php');
       }
     }


 ?>
