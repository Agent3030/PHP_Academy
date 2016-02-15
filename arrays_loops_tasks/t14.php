<?php
	$elems = [4, 2, 5, 19, 13, 0, 10];
	$e = 2;
	$count = 0;
	foreach ($elems as $elem) {
		if ($e == $elem) {
			 if ($e == 2 || $e == 3 || $e == 4){
				$count++;
			}	
		}
	}
echo ($count > 0) ? 'Есть!' : 'Нет!';

