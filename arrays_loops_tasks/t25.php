<?php
	$arr = [];

	for ($i = 0; $i < 20; $i++) {
		$arr[$i] = rand(1,20);
	}
	$min = $arr[0];
	$max = $arr[0];
	$mini = 0;
	$maxi = 0;

	for ($i = 0; $i < count($arr); $i++) {
		if ($arr[$i] < $min ) {
			$min = $arr[$i];
			$mini = $i;
		} elseif ($arr[$i] > $max) {
			$max = $arr[$i];
			$maxi = $i;
		}
	}
	echo "$min, $mini, $max, $maxi <br/>";
	var_dump($arr);

	$arr[$mini] = $max;
	echo '<br/>';
	$arr[$maxi] = $min;

	var_dump($arr);