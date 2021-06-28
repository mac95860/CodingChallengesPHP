<?php

//Create a function that converts two arrays of x- and y- coordinates into an array of (x, y) coordinates.
    
$array1 = [1, 5, 3, 3, 4];
    $array2 = [5, 8, 9, 1, 0];

    function createPairs($arr1, $arr2) {
      return  array_map(null, $arr1, $arr2);
    }

    createPairs($array1, $array2); // [[1, 5], [5, 8], [3, 9], [3, 1], [4, 0]]
?>