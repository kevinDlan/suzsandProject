<?php
class panier
{
  public function __construct()
  {
    if(!isset($_SESSION)){
    session_start();
    }
    if(!isset($_SESSION['panier'])){
      $_SESSION['panier'] = array();
    }
  }

public function add($product_id){
  if(isset($_SESSION['panier'][$product_id]))
  {
          $_SESSION['panier'][$product_id]=$_SESSION['panier'][$product_id]+1;
          die(1+1);
  }else {
           $_SESSION['panier'][$product_id]=0;
        }

}
public function del($product_id){
  // $deleteMessage ="<div id='alertSpace'  class='alert alert-success offset-3 col-6 col-md-6 mb-3 mb-md-0 text-center'>Produit supprimé avec succès !
  //                     <button  id='closeAlert' type='button' class='close' data-dismiss='alert' aria-label='Close'>
  //                       <span aria-hidden='true'>&times;</span>
  //                     </button>
  //                  </div>";
  unset($_SESSION['panier'][$product_id]);
    // return $deleteMessage;
 }
}
