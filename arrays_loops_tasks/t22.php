<?php
	$str= [];
	for($i = 0; $i < 10; $i++){
		for ($j=0; $j < $i; $j++) {
				if($i%2 == 0){
					$str[] = '*';
				}
			}
				if($i%2 == 0){
					$str[] = '<br/>';
				}
	}
	
	echo implode($str, '');