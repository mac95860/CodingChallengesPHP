<?php

// Create a function that takes two numbers and returns their sum as a binary string;
    function addBinary($a, $b) {
        return decbin($a + $b);
    }

    addBinary(4, 5); // 1001
    addBinary(1, 1); // 10
    addBinary(1, 2); // 11
?>