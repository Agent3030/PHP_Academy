<?php
	$days = ['1' => 'Понедельник', '2' => 'Вторник', '3' => 'Среда', '4' => 'Четверг', '5' => 'Пятница',
						'6' => 'Суббота', '0' => 'Воскресенье'];
	
	foreach ($days as $key => $value) {
		if ($key == '6' || $key == '0') {
			echo "<b>$value</b> <br/>";
		} else {
			echo "$value <br/>";
		}
	}