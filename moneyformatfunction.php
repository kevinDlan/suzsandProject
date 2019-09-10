<?php
function money_format($val,$symbol=' FCFA'){
    $s=(int)($val/1000);
    $i = strlen($val);
    $k = strlen($s);
    $f = substr($val,0,$k);
    $j = substr($val,$k,$i);
   	return  $f.','.$j.$symbol;
}

function code_commande($car=6){
  $string = "";
  $chaine = "abcdefghijklmnpqrstuvwxyABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  srand((double)microtime()*1000000);
  for($i=0; $i<$car; $i++) {
    $string .= $chaine[rand()%strlen($chaine)];
   }
 return $string;
}
