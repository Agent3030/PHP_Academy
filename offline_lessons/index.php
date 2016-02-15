<?php



function newYearTree($max = 48, $char = '*') {
    $data = '';
    for($i=$max;$i>=0;$i--) {
        if($i%3==0 || $i==0) {
            $str[] = str_repeat('&nbsp;', $i/2).$data.$char;
        } else {
            $data .= $char;
        }
    }
    echo implode('<br>', $str);
}

function romb($max = 48, $char = '*') {
    $data = '';
    $str =[];
    for($i=$max;$i>=0;$i--) {
    	if ($i > $max/2 ){
        if($i%3==0 || $i==0) {
        	
            $str[] = str_repeat('&nbsp;', $i/2).$data.$char;
            
          }else {
             $data .= $char;
           } 
         }elseif($i < $max/2) {

        	if($i%3==0) {

        		
            $str[] = str_repeat('&nbsp;', ($max/2-$i/2)+2).substr($data,  1).'&nbsp;';
            
          }else {
             $data = substr($data,  1);
           }
        }
     

    }
    echo implode('<br>', $str);
}


romb(48);


?>