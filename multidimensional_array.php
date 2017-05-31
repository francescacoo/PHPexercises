<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$a = array();
for($a_i = 0; $a_i < $n; $a_i++) {
   $a_temp = fgets($handle);
   $a[] = explode(" ",$a_temp);
  array_walk($a[$a_i],'intval');
}
$sum=0;
$sum2=0;


for($i=0;$i<$n;$i++){

    $sum += $a[$i][$i]; 
}
$b=0;
for($l=$n-1;$l>-1;$l--){

    $sum2 += $a[$b][$l]; 
    $b++;
}

echo abs($sum-$sum2);
?>