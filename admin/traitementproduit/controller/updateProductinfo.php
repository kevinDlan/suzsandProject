<?php
if(isset($_POST) && !empty($_POST))
     {
       $array = array('codeProduct' =>$_POST['repas_code'],
                      'libMenu' =>$_POST['libelle_repas'],
                      'descrMenu' =>$_POST['description_repas'],
                      'prixRepas' =>$_POST['prix_repas'],
                      'photo' =>$_POST['img_repas']
                     );
       require(dirname(__DIR__).'\bd\connexion.php');
       $query = $bdd->prepare("UPDATE menu SET codeMenu= :codeProduct,libelleMenu= :libMenu,descriptionMenu= :descrMenu,prix= :prixRepas,photoMenu= :photo WHERE id= :productId");
       $query->bindValue(':productId',$_POST['id'],PDO::PARAM_INT);
       $result = $query->execute($array);
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

 ?>
