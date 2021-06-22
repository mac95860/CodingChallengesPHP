<!-- Create a function that returns the number of seconds in a given number of hours -->

<?php
    function howManySeconds($hours) {
        echo $hours * 3600;
    }

    howManySeconds(2); // 7200
    howManySeconds(10); // 36000
    howManySeconds(24); // 6400
?>