<?php
  function seriesSummation($number){
         $summation=0;
        for($i=1;$i<=$number;$i++){
            $summation+=$i;
        }
      echo "Summation of 1 to {$number} is:{$summation}.";
  }
  seriesSummation(10);
?>