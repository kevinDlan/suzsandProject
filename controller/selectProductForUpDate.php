<?php
require(dirname(__DIR__).'\bd\connexion.class.php');
$bd = new BD();
$date = date('Y-m-d');
$data = $bd->query("SELECT *  FROM  menu
                    WHERE upDate_date<:dates ORDER BY id DESC",array("dates"=>$date)
                  );
