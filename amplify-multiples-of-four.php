<!-- Create a function that takes an integer and returns an array from 1 to the given number, where:

If the number can be divided evenly by 4, amplify it by 10 (i.e. return 10 times the number).
If the number cannot be divided evenly by 4, simply return the number. -->

<?php
    function amplify($n) {
        $arr = [];

        for ($i = 1; $i <= $n; $i++) {
            if($i % 4 == 0) {
                array_push($arr, $i * 10);
            } else {
                array_push($arr, $i);
            }
        }
        
        print_r($arr);
        echo "<br/>";
    }

    amplify(4);
    amplify(3);
    amplify(25);
?>