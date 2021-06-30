<!-- Write a function that takes all even-indexed characters and odd-indexed characters from a string and concatenates them together. -->

<?php
    function indexShuffle($str) {
        $array = str_split($str);
        $evens = [];
        $odds = [];
        for($i = 0; $i < count($array); $i++) {
            if($i % 2 === 0) {
                array_push($evens, $array[$i]);
            } else {
                array_push($odds, $array[$i]); 
            }
        }

        array_push($evens, ...$odds);
        echo implode("", $evens);
        echo "<br/>";
    }

    indexShuffle("abcd"); // acbd
    indexShuffle("holiday"); // hldyoia
    indexShuffle("maybe"); // myeab
?>