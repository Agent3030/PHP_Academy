<?php
	$elems = [26, 17, 136, 12, 79, 15];
	$squareSum = 0;

	foreach ($elems as $elem) {
		$squareSum += $elem*$elem;
	}

	echo "Sum of elems saquare: $squareSum <br/>";