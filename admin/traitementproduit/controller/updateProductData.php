<?php
  if(isset($_POST) && !empty($_POST))
       {

         require_once('saveImgFunction.php');
         $productPicturefolder = "../imageRepas/";
        if(!is_dir($productPicturefolder)){
           mkdir($productPicturefolder);
       }
       //enregistrement de l'image dans le dossier
        $productImg = saveImg("img_repas",$productPicturefolder);
        $date = date('Y-m-d');
         require(dirname(__DIR__).'\bd\connexion.php');
         $dataArray= array('codemenu' => $_POST['repas_code'],
                           'libmenu' => $_POST['libelle_repas'],
                           'desc_menu' => $_POST['description_repas'],
                           'prix_menu' => $_POST['prix_repas'],
                           'photo_menu' => $productImg,
                           'jours' => $date
                            );
        $id=$_POST['id'];
         $query = $bdd->prepare("UPDATE menu SET
                                codeMenu= :codemenu,
                                libelleMenu= :libmenu,
                                descriptionMenu= :desc_menu,
                                prix= :prix_menu,
                                photoMenu= :photo_menu,
                                upDate_date= :jours WHERE id=$id
                                ");
         // $query->bindValue(':idmenu',$_POST['id'],PDO::PARAM_INT);
         $result = $query->execute($dataArray);
         $query->closeCursor();
         if($result)
         {
           //Requette effectuée avec succès
            session_start();
            $_SESSION['success_update'] = 'Modification effectuée avec succès !';
            header('Location:../admin/traitementproduit/updateproduct.php');
          }else {
          echo $result;
        }
       }

 ?>
