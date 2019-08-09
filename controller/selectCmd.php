<?php
require(dirname(__DIR__).'\bd\connexion.class.php');
$bd = new BD();
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
                              ORDER BY order_date DESC
                              LIMIT 0,10"
                              ,array("param"=>'on-processing')
                   );
