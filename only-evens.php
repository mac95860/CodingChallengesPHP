<?php
    // Create a function that takes an array of numbers and returns only the even values.



    function onlyEvens($arr) {
        $evens = [];
        for($i = 0; $i < count($arr); $i++) {
            if($arr[$i] % 2 === 0 ) {
                array_push($evens, $arr[$i]);
            }
        }

        print_r($evens);
        echo "<br/>";
    }

    onlyEvens([1,2,3,4,5,6,7,8]); // [2, 4, 6, 8]
    onlyEvens([43, 65, 23, 89, 53, 9, 6]); // [6]
    onlyEvens([718, 991, 449, 644, 380, 440]); // [718, 644, 380, 440]
?>