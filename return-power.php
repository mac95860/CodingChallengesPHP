<!-- Create a function that takes a base number and an exponent number and returns the calculation. -->

<?php
    function calculateExponent($n, $ex) {
        echo pow($n, $ex) . "<br>";
    };

    calculateExponent(5, 5); // 3125
    calculateExponent(10, 10); // 100000000
    calculateExponent(3, 3); // 27
?>