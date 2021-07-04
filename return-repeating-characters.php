<!-- Create a function that keeps only strings with repeating identical characters (in other words, it has a set size of 1). -->

<?php
    function filtering($arr) {
        $repeated = array_filter($arr, function($str) {
            for($i = 0; $i < count($str); $i++) {
                if(substr_count($str, $str[$i]) === strlen($str)) {
                    return $str;
                }
            }
        });

        print_r($repeated);
        echo "<br/>";
    }

    filtering(["aaaaaa", "bc", "d", "eeee", "xyz"]); //["aaaaaa", "d", "eeee"]
    filtering(["88", "999", "22", "545", "133"]); //["88", "999", "22"]
    filtering(["xxxxo", "oxo", "xox", "ooxxoo", "oxo"]); //[]
?>