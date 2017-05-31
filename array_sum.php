<?php

$handle = fopen ("php://stdin", "r");
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
$arr = array_map('intval', $arr);
sort($arr,SORT_NUMERIC);
$min=0;
$max=0;
for($i=0;$i<sizeof($arr)-1;$i++){
    $min +=$arr[$i];
}
for($i=sizeof($arr)-1;$i>0;$i--){
    $max +=$arr[$i];
}
echo $min. " ".$max;
?>
