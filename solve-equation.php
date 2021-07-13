<?php
    function equation($arg) {
       echo eval('return '.$arg.';');
    }

    equation("1 + 1"); //2
    equation("7*4-2");// 26
    equation("1+1+1+1+1");// 5

?>