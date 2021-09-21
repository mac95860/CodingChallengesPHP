<!-- Create a function which validates whether a bridge is safe to walk on (i.e. has no gaps in it to fall through). -->
<?php

    function isSafeBridge($str) {
        return strpos($str, " ")  < 1;
    }

    echo isSafeBridge("###"); // true
    echo isSafeBridge("### ##"); // false
    echo isSafeBridge("#");// true
?>