<?php
   //  Create a function that takes a string and returns a new string with each new character accumulating by +1. Separate each set with a dash.

    function accum($str) {
        $arr1 = str_split($str);
        $repeated = [];
        foreach($arr1 as $key => $value) {
             $repeatLetters = str_repeat($value, $key + 1);
             $makeUpper = ucfirst($repeatLetters);
             array_push($repeated, $makeUpper);
        }

        echo join("-", $repeated) . '<br/>';
    }

    accum("abcd"); // A-Bb-Ccc-Dddd
    accum("RqaEzty"); // R-Qq-Aaa-EEEE-Zzzzz-Tttttt-Yyyyyyy
    accum("cwAt"); // "C-Ww-Aaa-Tttt"
?>