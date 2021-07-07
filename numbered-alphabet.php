<!-- Create a function that converts a string of letters to their respective number in the alphabet. -->

<?php
    function alphNum($str) {
        $arr = str_split($str);
        $getNumbers = array_map(function ($letter) {
            return ord($letter) - 65;
        }, $arr);

        echo join(" ", $getNumbers);
        echo "<br/>";
    }

    alphNum("XYZ");
    alphNum("ABCDEF");
    alphNum("JAVASCRIPT");
?>