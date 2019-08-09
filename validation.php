<?php
if(isset($_POST) && !empty($_POST))
{
  require '_header.php';
  require 'moneyformatfunction.php';
 $productID = array_keys($_SESSION['panier']);
 $productQty = array_values($_SESSION['panier']);
  $order_code = code_commande();
  //enregistrement du client
  $rep = $bd->insertQuery('INSERT INTO customer(nomPrenom,contact,email,codecommande) VALUES(:nomPrenom, :contact, :email, :order_code)',array('nomPrenom'=>$_POST['nomPrenom'],'contact'=>$_POST['contact'],'email'=>$_POST['email'],'order_code'=>$order_code));
    if($rep){
              //enregistement de la commande du client
              $insert_order_rep = $bd->insertQuery('INSERT INTO customer_order(code_commande,delivery_place,order_total) VALUES(:codeCommande, :delivery_place, :order_total)',array('codeCommande'=>$order_code,'delivery_place'=>$_POST['quartierLivraison'],'order_total'=>$_POST['order-total-price']));
              if($insert_order_rep)
                   {
                      //enregistrement des articles acheté par le client
                      $j=count($productID);
                      for ($i=0; $i <$j; $i++)
                           {
                             $customer_order_item = $bd->insertQuery('INSERT INTO customer_item_order(code_commande,id_menu,product_quantity)VALUES(:commandeCode, :idMenu, :productQuantite)',array('commandeCode'=>$order_code,'idMenu'=>$productID[$i],'productQuantite'=>$productQty[$i]));
                           }
                           if($customer_order_item)
                           {
                               unset($_SESSION['panier']);
                               $_SESSION['valide'] = 'Félicitation votre commande a bien été enregistrer, vous serez contacté dans quelque instant !';
                               header('Location:/index.php');
                           }else {
                                  $_SESSION['invalide'] = 'Une erreur c\'est produit, la commande n\'a pas pu etre enregisté. Veuillez réessayez SVP';
                                 }
                     }else
                          {
                            $error = "une erreur est survenu lors du traitement la commande n'a pas pu etre enregistré. Veuillez reéssayez S'il vous plait";
                            require 'error.php';
                          }
            }
            else{
                           $error = "une erreur est survenu lors du traitement le client n'a pas pu etre enregistré. Veuillez reéssayez S'il vous plait";
                           require 'error.php';
                 }
 }else {
        echo "Veuillez Renseignez le formulaire SVp";
       }
    // $isSuccess = false;
      // if (isset($_POST['name']))
      // {
      //   $isSuccess = true;
      //
      //   if (isset($_POST['name']))
      //   {
      //     if (preg_match("#^[a-zA-Zàé]([a-zA-Zàé ]){1,}$#", $_POST['name']))
      //     {
      //       $name = htmlspecialchars($_POST['name']);
      //     }
      //     else
      //     {
      //
      //       $isSuccess = false;
      //     }
      //
      //   }
      //
      //   if (isset($_POST['tel']))
      //   {
      //     if (preg_match("#^[0-9]{2}([ ]?[0-9]{2}){3}$#", $_POST['tel']))
      //     {
      //       $tel = htmlspecialchars($_POST['tel']);
      //     }
      //     else
      //     {
      //
      //       $isSuccess = false;
      //     }
      //
      //   }
      //
      //   if (isset($_POST['ville']))
      //   {
      //     if (!empty($_POST['ville']))
      //     {
      //       $ville = htmlspecialchars($_POST['ville']);
      //     }
      //     else
      //     {
      //
      //       $isSuccess = false;
      //     }
      //
      //   }
      //
      //   if (isset($_POST['quartier']))
      //   {
      //     if (!empty($_POST['quartier']))
      //     {
      //       $quartier = htmlspecialchars($_POST['quartier']);
      //     }
      //     else
      //     {
      //
      //       $isSuccess = false;
      //     }
      //
      //   }
      //
      //
      //   if (isset($_POST['prix']))
      //   {
      //     $prixUnitaire = htmlspecialchars($_POST['prix']);
      //   }
      //
      //   if (isset($_POST['nombre_plats']))
      //   {
      //     if (preg_match("#^[0-9]{1,}$#", $_POST['nombre_plats']))
      //     {
      //       $nombre_plats = htmlspecialchars($_POST['nombre_plats']);
      //
      //       $prix = $nombre_plats * $prixUnitaire;
      //
      //     }
      //     else
      //     {
      //
      //       $isSuccess = false;
      //     }
      //
      //   }
      //   if (isset($_POST['totalCommande']))
      //   {
      //     if (!empty($_POST['totalCommande']))
      //     {
      //       $totalCommande = htmlspecialchars($_POST['totalCommande']);
      //     }
      //     else
      //     {
      //
      //       $isSuccess = false;
      //     }
      //
      //   }
      //
      //   if (isset($_POST['libelleMenu']))
      //   {
      //     $libelleMenu = htmlspecialchars($_POST['libelleMenu']);
      //   }
      //   if ($isSuccess)
      //   {
      //     include('../bd/connexion.php');
      //     session_start();
      //     $_SESSION['vaide'] = true;
      //    $req = $bdd->prepare('INSERT INTO commande(nom,contact,ville_livraison,quartier_livraison,articleCommande,nombre_plats,prixUnitaire,prixTotal,dateCommande)
      //       VALUES(:nom,:contact,:ville_livraison,:quartier_livraison,:articleCommande,:nombre_plats,:prixUnitaire,:prixTotal,NOW())
      //       ');
      //
      //     $req->execute(array(
      //
      //           'nom' => $name,
      //           'contact' => $tel,
      //           'ville_livraison' => $ville,
      //           'quartier_livraison' => $quartier,
      //           'articleCommande' => $libelleMenu,
      //           'nombre_plats' => $nombre_plats,
      //           'prixUnitaire' => $prixUnitaire,
      //           'prixTotal' => $prix,
      //     ));
      //
      //   }
      // }
  // if(isset($_POST) && !empty($_POST)){
  // $dataTable = array(
  //                    'nomPrenom'=>$_POST['nomPrenom'],
  //                    'telephone'=>$_POST['tel'],
  //                    'libmenu'=>$_POST['libelleMenu'],
  //                    'nbrePlat'=>$_POST['nombre_plats'],
  //                    'quartierLivr'=>$_POST['quartierLivraison'],
  //                    'totalcmd'=>$_POST['totalCommande'],
  //                    'montantPlat'=>$_POST['prixUnitaire']
  //                    );
  //   require_once('../bd/connexion.php');
  //   $query = $bdd->prepare(
  //                           "INSERT INTO commande(nomPrenom,contact,articleCommande,nombrePlats,lieuLivraison,totalCommande,prixArticle)
  //                           VALUES(:nomPrenom, :telephone, :libmenu, :nbrePlat, :quartierLivr, :totalcmd, :montantPlat);
  //                           "
  //                         );
  //   $query->execute($dataTable);
  //   $query->closeCursor();
  //   if($query->rowCount() > 0)
  //    {
  //      session_start();
  //      $_SESSION['vaide'] = true;
  //      header('Location: ../index.php');
  //    }else {
  //           echo "Not save data !";
  //          }
  // }
  // else
  // {
  //       echo "Nothing does exist";
  // }
//echo $var;
