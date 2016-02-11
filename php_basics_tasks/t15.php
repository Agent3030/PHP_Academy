<?php
	$a = 3;
	$b = 0;
	$operator = '/';
	switch ($operator) {
		case '+':
			echo $a + $b.'<br>';
			break;
		case '-':
			echo $a - $b.'<br>';
			break;
		case '*':
			echo $a * $b.'<br>';
			break;
		case '/':
			echo ($b == 0) ? 'На ноль делить нельзя <br/>' : $a / $b.'<br>';
			break;			
			
		
		default:
			echo 'Нет такого действия! <br/>';
			break;
	}