<?php

function lcg($seed,$m,$a,$c){
  $sequence=array();
  for($i=0;$i<$m;$i++){
    $seed=($a * $seed + $c) % $m;
    $sequence[]=$seed;
  }
  return $sequence;
}

$seq=lcg($seed,$argv[1],$argv[2],$argv[3]);
print_r($seq);
?>
