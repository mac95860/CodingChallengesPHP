<?php
// Create a function that takes a string and returns a new string with its first and last characters swapped, except under three conditions:

// If the length of the string is less than two, return "Incompatible.".
// If the argument is not a string, return "Incompatible.".
// If the first and last characters are the same, return "Two's a pair."

    function switchSpots($str) {
        $first = substr($str, 0, 1);
        $last = substr($str, -1);
        $middle = substr($str, 1, -1);

        $switchedUp = $last . $middle . $first;

        if(getType($str) !== string || strlen($str) < 2) {
            echo "Incompatible";
        } else if ($first == $last) {
            echo "Two's a pair";
        } else {
            echo $switchedUp;
        }

       echo "<br/>";
    }

    switchSpots("Cat, dog, and mouse."); //  ".at, dog, and mouseC"
    switchSpots("ada"); // "Two's a pair"
    switchSpots("Ada"); // "adA"
    switchSpots("z"); //"Incompatible."
    switchSpots([1, 2, 3]); //"Incompatible."
?>