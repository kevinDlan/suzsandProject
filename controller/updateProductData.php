<?php
session_start();
if($_SESSION['adminnom']){

  if(isset($_POST) && !empty($_POST))
       {
         require(dirname(__DIR__).'\bd\connexion.php');
         $dataArray= array('codemenu' => $_POST[''],
                           'libmenu' => $_POST[''],
                           'desc_menu' => $_POST[''],
                           'prix_menu' => $_POST[''],
                           'photo_menu' => $_POST[''],
                            );
         $query = $bdd->prepare("UPDATE menu SET codeMenu= :codemenu,libelleMenu= :libmenu,descriptionMenu= :desc_menu,prix= :prix_menu,photo= :photo_menu WHERE codeMenu= :menu");
         $query->bindValue(':menu',$_POST['codeProduit'],PDO::PARAM_STR);
         $result = $query->execute($dataArray);
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
