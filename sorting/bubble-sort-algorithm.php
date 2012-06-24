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

function swappositions($data, $left, $right) {
    $backup_old_data_right_value = $data[$right];
    $data[$right] = $data[$left];
    $data[$left] = $backup_old_data_right_value;
    return $data;
}


?>