<?php
/*
Given an array of integers, find the pair of adjacent elements that has the largest product and return that product.
*/
$inputArray = [-23, 4, -3, 8, -12];

function solution($inputArray) {

    $len = count($inputArray);
    
    $p=-100;
  
      for ($i=0;$i<=$len-2;$i++){
          $o = $inputArray[$i];
          $y = $inputArray[$i+1];
          if ($o*$y>$p){
            $p=$o*$y;
          }   
          
    }
    return $p;    

    }



    echo solution($inputArray);
?>