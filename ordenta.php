<?php


function solution($statues) {
   sort($statues);
   $leng = count($statues);
   $c = 0;
   $cta = 0;
   $n = $statues[0];
   $y = $statues[$leng-1];
            for ($i=$n; $i<=$y;$i++){
                if ($statues[$c]==$i){
                    $c= $c+1;
                } else {
                    $statues[] = $i;
                    $cta = $cta+1;
                }    
               
            }
       
     echo $cta;       
   
}

$statues = [7, 5, 8, 9];
solution($statues);


?>