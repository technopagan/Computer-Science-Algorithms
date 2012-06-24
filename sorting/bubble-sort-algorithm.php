<?php 

/**
 * ############################################################################
 * Implementation of Bubble Sort algorithm in PHP
 * Tobias Baldauf, 20120624
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

function bubblesort($data) {
    $data_length = count($data);
    for ($i=0; $i<$data_length; $i++) {
        for ($j=0; $j<$data_length-1-$i; $j++) {
            if ($data[$j+1] < $data[$j]) {
                $data = swappositions($data, $j, $j+1);
            }
        }
    }
    return $data;
}

$data = bubblesort($data);
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