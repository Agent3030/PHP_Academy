<?php
	$days = ['1' => 'Понедельник', '2' => 'Вторник', '3' => 'Среда', '4' => 'Четверг', '5' => 'Пятница',
						'6' => 'Суббота', '0' => 'Воскресенье'];
	$day = date('w');

	foreach ($days as $key => $value) {
		if ($key == $day) {
			echo "<i>$value</i> <br/>";
		} else {
			echo "$value <br/>";
		}
	}