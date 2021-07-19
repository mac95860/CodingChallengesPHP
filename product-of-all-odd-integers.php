<?php
    function oddProduct($arr) {
        $newArr = [];

        for ($i = 0; $i < count($arr); $i++) {
            if($arr[$i] % 2 !== 0) {
                array_push($newArr, $arr[$i]);
            }
        }

        return array_product($newArr);
    }

    echo oddProduct([3, 4, 1, 1, 5]); //15
    echo oddProduct([5, 5, 8, 2, 4, 32]); //25
    echo oddProduct([1, 2, 1, 2, 1, 2, 1, 2]); //1
?>