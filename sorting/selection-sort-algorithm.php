<?php 

/**
 * ############################################################################
 * Implementation of Selection Sort algorithm in PHP
 * Tobias Baldauf, 20120621
 *
 */


/**
 * ############################################################################
 * Let's define our data to work with
 */
$data = array(8,4,1,9,5,7,3,2,6,0);


/**
 * ############################################################################
 * The nitty gritty
 */

// Let's move through the data
for($i=0; $i<count($data)-1; $i++) {
	$min = $i;
	for($j=$i+1; $j<count($data); $j++) {
		if ($data[$j]<$data[$min]) {
			echo "$data[$j] is smaller than ".$data[$i]."\n";
			$min = $j;
		}
	}
    $data = swappositions($data, $i, $min);
}

echo "\n\nResult:";
print_r($data);


/**
 * ############################################################################
 * Our toolbelt
 */

function swappositions($data, $left, $right) {
	$backup_old_data_right_value = $data[$right];
	$data[$right] = $data[$left];
	$data[$left] = $backup_old_data_right_value;
	return $data;
}


?>