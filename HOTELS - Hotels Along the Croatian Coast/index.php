<?php
 function solver ($size, $amount, $hotels) {
     
     	$temp = [];
     for ($i = 0; $i < $size; $i++) {
         $local_max = 0;
       for ($j=$i; $j < $size; $j++) { 
       	 	$local_max+=$hotels[$j];
       	 	if ($local_max<=$amount){
			$temp[]= $local_max;
       	 	}
       }
     }
     return max($temp);
 }

 echo solver(5, 12, [2,1, 3, 4, 5]);
 echo "<br>";
 echo solver(4, 9, [7,3, 5, 6]);
