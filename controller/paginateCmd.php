<?php
require(dirname(__DIR__).'\bd\connexion.php');
$query = $bdd->prepare("SELECT
                        COUNT(*) AS nbreCmd
                        FROM customer,customer_order
                        WHERE customer.codecommande=customer_order.code_commande
                        AND customer_order.order_status='on-processing'
                        ");
$query->execute();
$result = $query->fetch();
$query->closeCursor();
$nbreOfCmd = $result['nbreCmd'];
$CmdPerPage =10;
$nbreOfPage = ceil($nbreOfCmd / $CmdPerPage);
