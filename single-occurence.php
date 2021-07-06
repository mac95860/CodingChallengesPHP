<!-- Create a function that, given a string $str, finds a letter that has a single occurrence. -->

<?php
    function singleOccurrence($str) {
        for($i = 0; $i < strlen($str); $i++) {
            if (substr_count($str, $str[$i]) == 1) {
                $str = $str[$i];
            }
        }

        echo strtoupper($str); 
    }

    singleOccurrence("EFFEAAc"); // C
    singleOccurrence("AAAAVNNNNSS"); // V
    singleOccurrence("S"); // S
?>