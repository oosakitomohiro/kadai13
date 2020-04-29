<?php

function bby($arr){
  $result = 1;
  foreach($arr as $a){
    $result *= $a;
  }
 return $result;
}
$arr =(array(1, 3, 5 ,7, 9));
echo bby($arr)."\n";

?>