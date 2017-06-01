<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$unsorted = array();
for($unsorted_i = 0; $unsorted_i < $n; $unsorted_i++){
   fscanf($handle,"%s",$unsorted[]);    
}

for($i=0;$i<$n;$i++){
    
    for($j=0;$j<$n-1-$i;$j++){
        
        
        if($unsorted[$j+1]<$unsorted[$j]){
        
            $tmp=$unsorted[$j];
            $unsorted[$j]=$unsorted[$j+1];
            $unsorted[$j+1]=$tmp;

        }
    }
    
}

for($i=0;$i<$n;$i++){
 echo $unsorted[$i]."\n";   
}

?>
