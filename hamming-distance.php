<?php

// Hamming distance is the number of characters that differ between two strings.

 function distance($str1, $str2) {
     $i = 0; 
     $count = 0;
     while (isset($str1[$i]) != '') {
         if ($str1[$i] != $str2[$i]) {
             $count++;
         }
         $i++;
     }
     echo $count;
 }
  

 distance("abcde", "bcdef");
 distance("abcde", "abcde");
 distance("strong", "strung");

?>