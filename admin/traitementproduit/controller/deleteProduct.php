<?php
  if(isset($_POST) && !empty($_POST))
       {
         require(dirname(__DIR__).'\bd\connexion.php');
         $query = $bdd->prepare("DELETE FROM menu WHERE codeMenu= :codeProduct");
         $query->bindValue(':codeProduct',$_POST['codeProduit'],PDO::PARAM_STR);
         $result = $query->execute();
         $query->closeCursor();
         if($result)
         {
           $file ="../imageRepas/".$_POST['imgProduit'];
           if(file_exists($file))
           {
             unlink($file);
             session_start();
             $_SESSION['deleteProduct']=('Le produit a été Supprimer avec succès !');
             header('Location:../admin/traitementproduit/deleteproduct.php');
           }
           }else {
                  echo "Chemin non trouvé !";
                  }

           }else {
                  echo "OK";
                }
