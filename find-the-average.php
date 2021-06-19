<!-- Create a function that returns the average of a list composed of letters. 
First, find the number of the letter in the alphabet in order to find the average of the list. -->

<?php
    $letters = ["a", "b", "c", "i"];
    $letters2 = ["e", "d", "a", "b", "i", "t"];
    $letters3 = ["y", "o", "u", "a", "r", "e", "t", "h", "e", "b", "e", "s", "t"];

    function workWithArrays($a) {
        return ord($a) - 96;
    }

    function averageIndex($arr) {
        $array = array_map("workWithArrays", $arr);
        echo round(array_sum($array) / count($arr), 2) . "<br/>";
    }

    averageIndex($letters); # 3.75
    averageIndex($letters2); # 6.83
    averageIndex($letters3); # 12.62
?>