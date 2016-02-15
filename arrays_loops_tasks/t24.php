<?php
	$str = '442158755745';
	$num = 5;
	$strArr = [];
	$counter = 0;

	if (is_numeric($str)) {
		$strArr = str_split($str);

		for ($i=0 ; $i < count($strArr) ; $i++ ) { 
			
			if ($strArr[$i] == $num) {
				$counter++;
			}

		}

		echo "Число $num встречается $counter раз";
	} else {
		echo 'Not a number!';
	}