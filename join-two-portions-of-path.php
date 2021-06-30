<!-- Write a function that receives two portions of a path and joins them. 
The portions will be joined with the "/" separator. 
There could be only one separator and if it is not present it should be added. 

Try not to solve this challenge using only if-else conditions.
-->


<?php

    function joinPath($string1, $string2){
        $path = join('/', array( trim($string1, "/"), trim($string2, "/") ));

        echo $path . "<br/>";
    }

    joinPath("portion1/", "portion2");
    joinPath("portion1/", "/portion2");
    joinPath("portion1", "portion2");
    joinPath("portion1", "/portion2");

    // all instances of function return "portion1/portion2"
?>