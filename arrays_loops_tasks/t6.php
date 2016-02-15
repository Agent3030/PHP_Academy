<?php
	$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
	$en = [];
	$ru = [];
	foreach ($arr as $key => $value) {
		$en[] = $key;
		$ru[] = $value;
	}
	var_dump($en);
	echo '<br/>';
	var_dump($ru);
	echo '<br/>';
