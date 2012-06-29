<?php 

/**
 * ############################################################################
 * Implementation of binary search algorithm in PHP
 * Tobias Baldauf, 20120624
 */


/**
 * ############################################################################
 * Let's define our data to work with
 */
$haystack = array("a","b","c","d","e","f","i","q","r","s","t","x","y","z");
$needle = "i";

/**
 * ############################################################################
 * The nitty gritty
 */

$left = 0;
$right = count($haystack);
$haystack_middle = round($right/2, 0, PHP_ROUND_HALF_DOWN);

while($haystack[$haystack_middle]!=$needle and $left<$right-1) {
    ++$counter;
    if(strcmp($haystack[$haystack_middle],$needle)>0) {
        $right = $haystack_middle;
        $haystack_middle = $left + round(($right-$left)/2, 0, PHP_ROUND_HALF_DOWN);
    } else {
        $left = $haystack_middle;
        $haystack_middle = $haystack_middle + round(($right-$left)/2, 0, PHP_ROUND_HALF_DOWN);
    }
}

if (strcmp($haystack[$haystack_middle],$needle)==0) {
    echo "Found on position $haystack_middle\n";
} else {
    echo "Nothing found\n";
}

?>