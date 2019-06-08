<?php
if(isset($_POST) and !empty($_POST))
{
  $id=$_POST['suscriberId'];
  echo $id;
  $newStatu ="old";
  require(dirname(__DIR__).'\bd\connexion.php');
  $query = $bdd->prepare(
                          "UPDATE clientnewsletter SET status= :statu WHERE id=$id"
                         );
  $query->bindValue(':statu',$newStatu,PDO::PARAM_INT);
  $result = $query->execute();
  //var_dump($query->errorInfo());
  $query->closeCursor();
  if($result){
              header('Location:../admin/newLetterList.php');
              }
  else {
        session_start();
        $_SESSION['newletter_update-error']="Une erreur c'est produit veuillez reéssayé plus tard";
       }
}else{

      }
