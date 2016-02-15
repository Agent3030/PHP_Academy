<?php
 $num = '123';
 $numArr =[];
 $sum = 0;

 if (is_numeric($num)) {
 		$numArr = str_split($num);
 		
 		for ($i = 0; $i < count($numArr); $i++) {
 			$sum += $numArr[$i];
 		}
 } else {
 	echo 'not a number';
 }

 echo "$sum <br/>";
