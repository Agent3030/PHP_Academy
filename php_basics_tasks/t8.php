<?php
	$age = -1;
	if ($age > 18 && $age < 59) {
		echo 'Мне еще работать и работать <br/>';
	} elseif ($age > 59) {
		echo 'Вам пора на пенсию <br/>';
	} elseif ($age < 18 && $age >=0) {
		echo 'Вам еще рано работать <br/>';
	} elseif ($age < 0) {
		echo 'Неизвестный возраст<br/>';
	}