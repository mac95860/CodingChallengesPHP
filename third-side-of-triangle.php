<!-- Create a function that finds the maximum range of a triangle's third edge, where the side lengths are all integers. -->
<?php
    function nextEdge($side1, $side2) {
        return ($side1 + $side2) - 1;
    }

    nextEdge(10, 8); // 17
    nextEdge(9, 2); // 10
?>