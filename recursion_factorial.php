<?php
/* Read input from STDIN.  */
$_fp = fopen("php://stdin", "r");
/* Read the integer  */
fscanf($_fp,"%d",$n);
/* print the result */
echo factorial($n);

function factorial($num){
    if($num>1){
       return $num * factorial($num-1);
    }
    else{
        return 1;
        }
 
}


?>
