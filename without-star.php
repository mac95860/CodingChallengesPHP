<?php
    //Multiply two numbers without using *

    function multiply($n1, $n2) {
        $total = $n1;
        $count = 1;
        
        do {
            
            $total += $n1;
            
            $count++;
            
        } while($count < abs($n2));

        if($n2 < 0) {
           echo  $total * -1;
        } else {
           echo  $total;
        }
        
       
    }

    multiply(2, 3); // 6
    multiply(4, 10); // 40
    multiply(9, 2); // 18
    multiply(9, -9); // -81
?>