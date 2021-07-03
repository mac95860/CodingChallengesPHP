<!-- 
    From edabit.com:
    Create a function that returns true if every number is prime and false if not
    Remember, that 1 is not a prime number
 -->

<?php
    function containsPrime($arr) {
        $checkForPrime = array_map(function($num) {
            if($num === 1) {
                return 0;
            }

            for($i = 2; $i < $num; $i++) {
                if($num % $i == 0) {
                    return 0;
                } else {
                    return 1;
                }
            }
        }, $arr);

        if(in_array(0, $checkForPrime, TRUE)) {
            echo false;
        } else {
            echo true;
        };
    }
    
    containsPrime([5,2,1,5,6,7]); //false
    containsPrime([2, 3, 5, 7, 13, 17, 19, 23, 29]);// true
    containsPrime([1, 5, 3]); // false
?>