<!-- Create a function that returns the first and last elements of an array -->

<?php
    $array1 = [5, 10, 15, 20, 25];
    $array2 = ["edabit", 13, null, false, true];
    $array3 = [undefined, 4, "6", "hello", null];

    function firstAndLast($arr) {
        $newArray = [];
        $first = array_shift($arr);
        $last = array_pop($arr);
        
        array_push($newArray, $first, $last);
        print_r($newArray);
       
    }

    firstAndLast($array1);
    firstAndLast($array2); // ["edabit", true]
    firstAndLast($array3); //[undefined, null]
?>