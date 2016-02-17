<?php 
	require_once __DIR__.'/functions.php';
	$str = [];
	

	if ($_POST) {

		foreach ($_POST as $key => $value) {
			$str[] = $value;
		}
	}
     echo "Одинаковые слова: ".implode(getCommonWords($str[0], $str[1]), ' ').'<br/>';
     
  echo '<a href = "/">Назад</a> <br/>'; 

	 



