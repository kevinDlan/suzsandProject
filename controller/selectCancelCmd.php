<?php
require(dirname(__DIR__).'\bd\connexion.class.php');
$bd = new BD();
$param ="Annulée";
$orderTraited = $bd->query('SELECT
                                  nomPrenom,
                                  contact,
                                  order_date,
                                  delivery_place,
                                  order_total,
                                  GROUP_CONCAT(product_quantity) as product_quantity,
                                  GROUP_CONCAT(libelleMenu) as libelleMenu
                                  FROM customer,customer_order,customer_item_order,menu
                                  WHERE customer_order.order_status=:param
                                  AND customer.codecommande=customer_order.code_commande
                                  AND    customer_order.code_commande=customer_item_order.code_commande
                                  AND customer_item_order.id_menu=menu.id
                                  GROUP BY
                                  nomPrenom,
                                  contact,
                                  order_date,
                                  delivery_place,
                                  order_total',
                                  array("param"=>$param)
                           );
