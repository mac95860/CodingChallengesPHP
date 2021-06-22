<!-- A vehicle needs 10 times the amount of fuel than the distance it travels. 
However, it must always carry a minimum of 100 fuel before setting off.
Create a function which calculates the amount of fuel it needs, given the distance. -->

<?php
    function calculateFuel($n) {
        if($n * 10 > 100) {
            echo $n * 10 . "<br/>";
        } else {
            echo 100 . "<br/>";
        }
    }

    calculateFuel(15); //150
    calculateFuel(23.5); //235
    calculateFuel(3); // 100
?>