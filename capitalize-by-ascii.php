<!-- Create a function that takes a string as input and capitalizes a letter 
if its ASCII code is even and returns its lower case version if its ASCII code is odd. -->

<?php
    function asciiCapitalize($str) {
        $arrayOfLetters = str_split($str);
        
        $newArray = [];

        for($i = 0; $i < count($arrayOfLetters); $i++) {
            $value = ord($str[$i]) - 96;
             if($value % 2 == 0) {
                 $letter = strtoupper($str[$i]);
                array_push($newArray, $letter);
            } else {
                $letter = strtolower($str[$i]);
                array_push($newArray, $letter);
            }
        }

       echo join("", $newArray) . "<br>"; 
    }

    asciiCapitalize("Hello World!"); // HeLLo woRLD!
    asciiCapitalize("to be or not to be"); //To Be oR NoT To Be
    asciiCapitalize("THE LITTLE MERMAID"); // THe LiTTLe meRmaiD
?>