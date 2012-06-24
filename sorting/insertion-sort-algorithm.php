<?php 

/**
 * ############################################################################
 * Implementation of Insertion Sort algorithm in PHP
 * Tobias Baldauf, 20120620
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

// Let's move through the data left to right (actually 'left but one'), one step at a time
for($i=1; $i<count($data); $i++) {

	// Always compare the bit we're looking at to its next left neighbor, unless we're at the leftmost side of the array
	for ($j=$i-1; $j>=0; $j--) {

		sleep(1); // this is just so you can see the work in progress
		$comparisons++;

		// If the left neighbor is actually bigger than our current bit, let's swap them
		if ($data[$j]>$data[$j+1]) {

			echo "$data[$j] is bigger than ".$data[$j+1]."\n";
			$data = swappositions($data, $j, $j+1);
			$swappings++; // count how often we're swapping things around

		} else { // If the left neighbor is smaller, all is well & we'll skip to the next position
			break;
		}

	}

}

// Let's output some friedly info on how we've done at the end
echo "\nI compared data elements $comparisons times.\n";
echo "I executed $swappings swap-operations to sort all data!\n";
echo "Look at the fantastic result:\n";
print_r($data);


/**
 * ############################################################################
 * Our toolbelt
 */

function swappositions($data, $left, $right) { // Beispielhaft der erste Durchlauf: 0 1 bzw. 8 4
	$backup_old_data_right_value = $data[$right]; // tmp = 4
	$data[$right] = $data[$left]; // Die Reihe wird 8,8,1,9,5 ... usw => Rechter Part wird ersetzt durch linken Part
	$data[$left] = $backup_old_data_right_value; // Jetzt ist's 4,8,1,9,5 ... usw => Linker Part wird ersetzt mit altem rechten Part
	return $data;
}


?>