<!-- Create a function that returns the factorial of a given integer. -->

<?php
    function returnFactorial($n) {
        $factorial = 1;
        for($x = $n; $x >= 1; $x--) {
            $factorial = $factorial * $x;
        }

        echo $factorial . "<br/>";
    }

    returnFactorial(5); // 120
    returnFactorial(3); // 5
    returnFactorial(13); // 6227020800
?> 