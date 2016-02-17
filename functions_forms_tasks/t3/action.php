<?php 
	require_once __DIR__.'/functions.php';
	$n = 0;
	

	if ($_POST) {

		
			$n = $_POST['num'];
			
		
	}

	fileContentLengths($n);
    echo "Файл сохранен...<br/>";
     
  echo '<a href = "/">Назад</a> <br/>'; 

	 



