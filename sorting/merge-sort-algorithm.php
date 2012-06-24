<?php 

/**
 * ############################################################################
 * Implementation of Mergesort algorithm in PHP
 * Tobias Baldauf, 20120624
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

// This is it! Get the data to process, split it into halfs and compare
// Returns: freshly sorted, reassembled array from split array-parts
function mergesort($data) {

    // Only process if we're not down to one piece of data
    if(count($data)>1) {
        
        // Find out the middle of the current data set and split it there to obtain to halfs
        $data_middle = round(count($data)/2, 0, PHP_ROUND_HALF_DOWN);
        // and now for some recursive magic
        $data_part1 = mergesort(array_slice($data, 0, $data_middle));
        $data_part2 = mergesort(array_slice($data, $data_middle, count($data)));

        // Setup counters so we can remember which piece of data in each half we're looking at
        $counter1 = $counter2 = 0;

        // iterate over all pieces of the currently processed array, compare size & reassemble
        for ($i=0; $i<count($data); $i++) {
            // if we're done processing one half, take the rest from the 2nd half
            if($counter1 == count($data_part1)) {
                $data[$i] = $data_part2[$counter2];
                ++$counter2;
            // if we're done with the 2nd half as well or as long as pieces in the first half are still smaller than the 2nd half
            } elseif (($counter2 == count($data_part2)) or ($data_part1[$counter1] < $data_part2[$counter2])) { 
                $data[$i] = $data_part1[$counter1];
                ++$counter1;
            } else {
                $data[$i] = $data_part2[$counter2];
                ++$counter2;
            }
        }
    }
    return $data;
}

// Initiate the recursive magic by calling the function once & print the output for our viewing pleasure 
$data = mergesort($data);
print_r($data);


?>