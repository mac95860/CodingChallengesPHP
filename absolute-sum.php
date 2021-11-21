<?php

// Create a function that return the sum of all the absolute values in an array

	function getAbsSum($arr) {
        $sum = 0;
        foreach($arr as $value) {
            $sum += abs($value);
        }
        return $sum;
    }

    echo(
        getAbsSum([2,5,-7]) // 14
    );
	
?>