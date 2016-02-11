<?php
	$age = 17;
	if ($age > 18 && $age < 59) {
		echo "Мне еще работать и работать <br/>";
	} elseif ($age > 59) {
		echo "Вам пора на пенсию <br/>";
	} elseif ($age < 18) {
		echo "Вам еще рано работать";
	}
