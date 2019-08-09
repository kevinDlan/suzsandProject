<?php
  require(dirname(__DIR__).'\bd\connexion.class.php');
  $bd = new BD();
  $selectPage = $page;
  $pageProductValue =10;
  if ( $selectPage != 1){
    $LimitParam1=($selectPage-1)*$pageProductValue;
    $LimitParam2=$selectPage*$pageProductValue;
  }
  else {
    $LimitParam1=0;
    $LimitParam2=$pageProductValue;
  }

  $data = $bd->query("SELECT
                            nomPrenom,
                            contact,
                            codecommande,
                            order_date,
                            delivery_place,
                            order_total
                            FROM customer,customer_order
                            WHERE customer.codecommande=customer_order.code_commande
                            AND customer_order.order_status=:param
                            LIMIT $LimitParam1,$LimitParam2
                        ",array("param"=>'on-processing')
                      );
