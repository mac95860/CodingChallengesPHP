<?php
    //create a function that returns an array that contains no duplicates.

    function set($arr) {
        $result = array_unique($arr);
       print_r($result);
    }

    set([1, 3, 3, 5, 5]); //1, 3, 5
    set([4, 4, 4, 4]); // 4
    set([5, 7, 8, 9, 10, 15]); // [5, 7, 8, 9, 10, 15]


?>