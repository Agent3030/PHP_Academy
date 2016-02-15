<?php
	$arr = [];
	$mul = 1;

	for ($i = 0; $i < 20; $i++) {
		$arr[$i] = rand(1, 100);
	}

	for ($i = 0; $i < count($arr); $i++) {
		if ($arr[$i] != 0) {

			if ($i%2 == 0) {
				$mul *= $arr[$i];
			} else {
				echo "$arr[$i] <br/>";
			}
		}
	}

	echo "$mul <br/>";

