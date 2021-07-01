<!-- Your friend is trying to write a function that removes all vowels from a string. They write:

function removeVowels($str) {
  return preg_replace("/aeiou/", "", $str);
}
However, it seems that it doesn't work? Fix your friend's code so that it actually does remove all vowels. -->

<?php
    function isVowel($c) {
        return ($c == 'a') || ($c == 'e') || 
               ($c == 'i') || ($c == 'o') || 
               ($c == 'u') || ($c == 'A') ||
               ($c == "E") || ($c == 'I') ||
               ($c == 'O') || ($c == 'U');
    }


    function removeVowels($str) {
        $newStr = "";
    
        for ($i = 0; $i < strlen($str); $i++) {
            if ((!isVowel($str[$i]))) {
                // printf($str[$i]);
                $newStr .= $str[$i];
            }
        }
        
        echo $newStr . "<br/>";  
    }

    removeVowels("hello"); // hll
    removeVowels("Where did my vowels go?"); //whr dd my vwls g?
    removeVowels("A dog walks"); // dg wlks

    
?>
