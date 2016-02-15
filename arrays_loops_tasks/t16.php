<?php
 $elems = [1, 2, 3, 4, 5, 6, 7, 8, 9];
 $count = 0;
 foreach ($elems as $elem) {
 	$count++;
 	echo $elem;
 	if($count%3 == 0){
 		echo '<br/>';
 	}
 }
