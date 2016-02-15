<?php
	$row = 10;
	$col = 10;
	$colors = ['red','yellow','blue','gray','maroon','brown','green'];

	echo '<table>';

	for ($i = 0; $i < $row; $i++) {
		echo '<tr>';

		for ($j = 0; $j < $col; $j++) {
			$color = $colors[rand(0, count($colors)-1)];
			$num = rand();
			echo "<td style='background-color:$color'>$num</td>";
		}
		echo '</tr>';
	}

	echo '</table>';
	echo '<br/>';