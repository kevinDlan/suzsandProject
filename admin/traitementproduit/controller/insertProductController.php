<?php
 //enregistrement des données dans la base de données
if(isset($_POST) && !empty($_POST)){
    require_once('saveImgFunction.php');
    $productPicturefolder = "../imageRepas/";
   if(!is_dir($productPicturefolder)){
      mkdir($productPicturefolder);
  }
  //enregistrement de l'image dans le dossier
   $productImg = saveImg("productImg",$productPicturefolder);

   $code=$_POST['codeProduit'];
   $libelle=$_POST['nomProduit'];
   $description =  $_POST['descriptionProduit'];
   $prix = $_POST['prixProduit'];
   $date ='2019-06-04';

    $array = array(
             'codeproduct' => $code,
              'libelleproduct' =>$libelle,
              'descriptionproduct' =>$description,
              'productprice' => $prix,
              'productimg' => $productImg,
              'updDate'=>$date
             );

    require_once('../bd/connexion.php');
    $req = $bdd->prepare(
                         "INSERT INTO menu (codeMenu,libelleMenu,descriptionMenu,prix,photoMenu,upDate_date)
                          VALUES(:codeproduct, :libelleproduct, :descriptionproduct, :productprice, :productimg, :updDate)"
                        );
    $req->execute($array);
    if($req->rowCount()>0){
        $req->closeCursor();
        session_start();
        $_SESSION['insertProductSuccesMsg']="Le produit a été enregistrer avec succès !";
        header("location:../admin/addItemMenu.php");
        $data->closeCursor();
    }else{
      session_start();
          $_SESSION['insertProductFailMsg']="Le produit n'a pas pu etre enregistré veuillez réessayé en changeant le code. Il se peut que ce code soit dejà attribué a un produit enregistré.";
          header("location:../admin/addItemMenu.php");
          //echo "Blablablabla";
         }

 }else {
   echo "Remplisez Tout les champs SV";
 }
?>
