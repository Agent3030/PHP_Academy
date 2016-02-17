<?php

function fileContentLengths($n) {
	
	$contentArr = [];
	$newContentArr = [];
	$newContent = '';
	$filename = __DIR__.'/test.txt';
	if (file_exists($filename)) {
		$content = file_get_contents($filename);
		$contentArr = explode(' ', $content);
		for ($i=0; $i < count($contentArr) ; $i++) {

			if (iconv_strlen($contentArr[$i], 'utf-8') < $n) {

				$newContentArr[] = $contentArr[$i];

			} 
			
		}

		$newContent = implode(' ', $newContentArr);
		file_put_contents($filename, $newContent);

		
	} else {
		echo 'Нет такого файла!';
	}
}