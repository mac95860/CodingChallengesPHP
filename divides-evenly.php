<!-- Given two integers, $a and $b, return true if $a can be divided evenly by $b. Return false otherwise. -->

<?php
    function dividesEvenly($a, $b) {
        return $a % $b === 0 ? true : false;
    }

    dividesEvenly(87, 29); // true
    dividesEvenly(30, 4); // false
?>