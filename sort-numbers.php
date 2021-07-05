<!-- 
Create a function that takes an array of numbers and returns a new array, sorted in ascending order (smallest to biggest).
Sort numbers array in ascending order.
If the function's argument is null, an empty array, or undefined; return an empty array.
Return a new array of sorted numbers.
 -->


<?php
    function sortNumsAscending($arr) {
        if(empty($arr)) {
            $arr = [];
            print_r($arr);
            echo "<br/>";
        } else {
            sort($arr);
            print_r($arr);
            echo "<br/>";
        }
    }
 
    sortNumsAscending([1, 2, 10, 50, 5]); //[1, 2, 5, 10, 50]
    sortNumsAscending(null); // [-95, -24, 4, 29, 80, 85]
    sortNumsAscending([80, 29, 4, -95, -24, 85]); //[]
    sortNumsAscending([]); //[]
?>