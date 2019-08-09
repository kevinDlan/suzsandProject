<?php
require(dirname(__DIR__).'\bd\connexion.class.php');
  $bd = new BD();
  $selectPage = $page;
  $pageProductValue = 10;
  if ( $selectPage != 1){
    $LimitParam1=($selectPage-1)*$pageProductValue;
    $LimitParam2=$selectPage*$pageProductValue;
  }
  else {
    $LimitParam1=0;
    $LimitParam2=$pageProductValue;
  }
  $data = $bd->query("SELECT * FROM menu LIMIT $LimitParam1,$LimitParam2");
