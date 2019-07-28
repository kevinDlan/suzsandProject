<?php
class panier
{
  private $db;
  public function __construct($db)
  {
    if(!isset($_SESSION)){
    session_start();
    }
    if(!isset($_SESSION['panier']))
    {
      $_SESSION['panier'] = array();
    }

    if(isset($_GET['delPanier']))
    {
      $this->del($_GET['delPanier']);
    }
    $this->db = $db;
  }


public function count()
{
  return array_sum($_SESSION['panier']);
}
public function add($product_id){
  if(isset($_SESSION['panier'][$product_id]))
  {
          $_SESSION['panier'][$product_id]++;
  }else {
           $_SESSION['panier'][$product_id]=1;
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

 public function total(){
   $total = 0;
   $ids = array_keys($_SESSION['panier']);
   if(empty($ids)){
     $products = array();
   }else
   {
     $products = $this->db->query('SELECT id,prix FROM menu WHERE id IN('.implode(',',$ids).')');
   }
   foreach ($products as $produit)
   {
      $total+=$produit->prix*$_SESSION['panier'][$produit->id];
   }
     return $total;
 }

 public function sous_total($id,$quantity)
 {
     $products=$this->db->query('SELECT *  FROM menu WHERE id=:id',array('id'=>$id));
     foreach ($products as $produit) {
       $sous_total=$produit->prix*$quantity;
     }
      return $sous_total;
 }

}
