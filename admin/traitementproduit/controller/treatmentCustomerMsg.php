<?php
if(isset($_POST) and !empty($_POST)){
   require(dirname(__DIR__).'\bd\connexion.php');
   $etatM = 'vue';
   $query = $bdd->prepare("UPDATE contacter SET status_msg =:etatMsg WHERE id=:statuId");
   $query->bindValue('etatMsg',$etatM,PDO::PARAM_STR);
   $query->bindValue('statuId',$_POST['msgId'],PDO::PARAM_INT);
   $query->execute();
   if($query){
          $query->closeCursor();
           header('Location:../admin/contactusList.php');
         }else {
            echo "error";
           }

   }
