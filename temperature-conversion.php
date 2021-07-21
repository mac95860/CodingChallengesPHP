<!-- Write a program that takes a temperature input in $celsius and converts it to Fahrenheit and Kelvin.
Return the converted temperature values in an array. -->

<?php
    function tempConversion($c) {
        $f = $c * 9 / 5 + 32;
        $k = $c + 273.15;

        $temps = [];
        array_push($temps, $f, $k);

        return $temps;
    }

    print_r(tempConversion(0)); // [32, 273.15]
    print_r(tempConversion(100)); // [212, 373.15]
    print_r(tempConversion(-10)); // [14, 263.15]
    print_r(tempConversion(300.4)); // [572.72, 573.55]
?>