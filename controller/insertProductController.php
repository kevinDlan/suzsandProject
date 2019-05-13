<?php
 //enregistrement des données dans la base de données
if(isset($_POST) && !empty($_POST)){
    require_once('saveImgFunction.php');
    $productPicturefolder = "../imageRepas/";
   if(!is_dir($productPicturefolder)){
      mkdir($productPicturefolder);
  }
  //enregistremùent de l'image dans le dossier
   $productImg = saveImg("productImg",$productPicturefolder);
   $code=$_POST['codeProduit'];
   $libelle=$_POST['nomProduit'];
   $description =  $_POST['descriptionProduit'];
   $prix = $_POST['prixProduit'];


    $array = array(
             'codeproduct' => $code,
              'libelleproduct' =>$libelle,
              'descriptionproduct' =>$description,
              'productprice' => $prix,
              'productimg' => $productImg
             );

    require_once('../bd/connexion.php');
    $req = $bdd->prepare(
                         "INSERT INTO menu (codeMenu,libelleMenu,descriptionMenu,prix,photoMenu)
                              VALUES(:codeproduct, :libelleproduct, :descriptionproduct, :productprice, :productimg)"
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
