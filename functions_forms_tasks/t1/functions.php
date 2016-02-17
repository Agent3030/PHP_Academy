<?php
  function getCommonWords($a, $b) {
  	$arrA = [];
  	$arrB = [];
  	$commonWords = [];
  	$arrA = array_unique(explode(' ', $a));
  	$arrB = array_unique(explode(' ', $b));
  	for ($i=0; $i < count($arrA) ; $i++) {
  		for ($j=0; $j < count($arrB) ; $j++) {

  			if ($arrA[$i] == $arrB[$j]) {
  				$commonWords[] = $arrB[$j];
  				array_splice($arrB, $j, 1);
  			}
  		 	
  		 } 
  		
  	}

  	return $commonWords;
	
}