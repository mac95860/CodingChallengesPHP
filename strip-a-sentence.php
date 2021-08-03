<?php
//   Create a function which takes in a sentence str and a string of characters chars and return the sentence but with all the specified characters removed.

  function stripSentence($str, $chars) {
    for($i=0; $i < strlen($chars); $i++) {
      $str = str_replace( $chars[$i], '' , $str );
    } 
    
    return $str . "<br/>";
  }

   echo stripSentence("the quick brown fox jumps over the lazy dog", "aeiou"); //th qck brwn fx jmps vr th lzy dg
   echo stripSentence("the hissing snakes sinisterly slither across the rustling leaves", "s"); // "the hiing nake initerly lither acro the rutling leave"
   echo stripSentence("gone, reduced to atoms", "go, muscat nerd") ; // ""
?>