<!-- Return the number of uppercase letters in an array -->

<?php
    function countUppercase($arr) {
        $str = join($arr);
        $sum = 0;
        for($i = 0; $i < strlen($str); $i++) {
            if ($str[$i] === strtoupper($str[$i])) {
                $sum++;
            }
        }

        echo $sum;
    }

    countUppercase(["SOLO", "hello", "Tea", "wHat"]); // 6
    countUppercase(["Thomas", "Jefferson"]); // 2
    countUppercase(["little", "lower", "down"]); // 0
?>