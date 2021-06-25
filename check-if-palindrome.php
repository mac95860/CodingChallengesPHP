<!-- Write a function that takes a string and determines whether it's a palindrome or not.
The function should return a boolean (true or false value). -->

<?php
    function isPalindrome($string){
        $string = preg_replace("/\W+/", '', $string);
        $string2 = strrev($string);

        if (strtolower($string) == strtolower($string2)) {
            return true;
        } else {
            return false;
        }
    }
        isPalindrome("bob"); // true
        isPalindrome("This is not a palindrome"); // false
        isPalindrome("Kayak"); // true
        isPalindrome("A man, a plan, a cat, a ham, a yak, a yam, a hat, a canal-Panama!"); // true
?>