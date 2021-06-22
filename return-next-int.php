<!-- Create a function that takes a number as an argument, increments the number by +1 and returns the result -->

<?php
    function addition($num) {
        echo ++$num;
    }

    addition(10); // 11
    addition(1); // 2
?>