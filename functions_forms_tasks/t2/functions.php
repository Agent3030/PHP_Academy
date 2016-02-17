<?php
  function top3words($str) {
  	$arrStr = explode(' ', $str);
  	$arrLength = [];
    $top3 = [];
    $counter = 0;
  	
  	for ($i=0; $i < count($arrStr) ; $i++) {

      $arrLength[$arrStr[$i]] = strlen($arrStr[$i]);
  		
  			}
  	 	
  	arsort($arrLength);
  
    foreach ($arrLength as $key => $value) {
      if ($counter < 3) {
        $top3[] = $key;
        $counter++;
      }
      
    }
  		
  	

  	return $top3;
	
}