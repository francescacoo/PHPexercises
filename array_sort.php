<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$height_temp = fgets($handle);
$height = explode(" ",$height_temp);
array_walk($height,'intval');

sort($height,SORT_NUMERIC);
$tot=1;
for($i=$n-1;$i--;$i==0){

    if($height[$i]==$height[$n-1]){
        $tot++;
    }
}
echo $tot;
?>