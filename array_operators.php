<?php

$handle = fopen ("php://stdin", "r");
function solve($grades){
    // Complete this function
    
    for($a=0;$a<sizeof($grades);$a++){
        
        // check that the grade is bigger than 37, otherwise it would be a fail grade
        if($grades[$a]>37){
            $i=$grades[$a];
            while($i%5 != 0){
                $i++;
            }
            //echo $i;
            if($i - $grades[$a] <3){
                $grades[$a]=$i;
            }           
          
         }
        print $grades[$a]."\n";
    }
}

fscanf($handle, "%d",$n);
$grades = array();
for($grades_i = 0; $grades_i < $n; $grades_i++){
   fscanf($handle,"%d",$grades[]);
}
$result = solve($grades);
echo implode("\n", $result)."\n";

?>
