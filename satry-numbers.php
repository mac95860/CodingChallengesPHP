<!-- In this challenge, you have to establish if a given integer n is a Sastry number. 
If the number resulting from the concatenation of an integer n with its successor is a perfect square, then n is a Sastry Number.

Given a positive integer n, implement a function that returns true if n is a Sastry number, or false if it's not. -->

<?php
    function sastryNumbers($n) {
        $a = $n . ($n + 1);
        $root = $a / 3;
		for ($i = 0; $i < 32; $i++) {
			$root = ($root + $a / $root) / 2;
        }

		if($root - floor($root) > 0) {
            echo false;
        } else {
            echo true;
        }
    }

    sastryNumbers(183); // true
    sastryNumbers(184); // false
?>