<!-- Create a function that takes two arguments: 
the original price and the discount percentage as integers 
and returns the final price after the discount. -->

<?php
    function getDiscount($total, $discount) {
        $amountOff = $discount / 100;
        $newTotal = $total * $amountOff;
        echo $newTotal . "<br>";
    };

    getDiscount(1500, 50); // 750
    getDiscount(89, 20); // 71.2
    getDiscount(100, 75); // 25

    echo 'PHP version: ' . phpversion();
?>