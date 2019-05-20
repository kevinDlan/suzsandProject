<?php
session_start();
if($_SESSION['adminnom']){

  if(isset($_POST) && !empty($_POST))
       {
         require(dirname(__DIR__).'\bd\connexion.php');
         $query = $bdd->prepare("DELETE FROM menu WHERE codeMenu= :codeProduct");
         $query->bindValue(':codeProduct',$_POST['codeProduit'],PDO::PARAM_STR);
         $result = $query->execute();
         $query->closeCursor();
         if($result)
         {
        //Requette de suppression de l'image dans le dossier imageRepas
           echo 'delete_success';
          //"Le produit a été supprimé de la base de données avec succès !";
        }else {
          echo $result;
        }
       }

}else {
  echo "Veuiller vous connecter";
}
 ?>
