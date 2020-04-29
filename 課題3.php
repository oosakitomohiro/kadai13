<?php

function bby($arr){
  $ccz = 1;
  foreach($arr as $a){
    $ccz *= $a;
  }
 echo $ccz."\n";
}
bby(array(1, 3, 5 ,7, 9));



?>