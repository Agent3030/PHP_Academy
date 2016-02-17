<?php 
	require_once __DIR__.'/functions.php';
	$str = '';
	

	if ($_POST) {

		
			$str = $_POST['form3'];
			echo $str;
		
	}
     echo "Топ 3 слова по длинне: ".implode(top3words($str), ' ').'<br/>';
     
  echo '<a href = "/">Назад</a> <br/>'; 

	 



