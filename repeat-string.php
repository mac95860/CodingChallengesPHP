<?
//  Create a function that takes a string $txt and a number $n and returns the repeated string $n number of times.

function repeatString($str, $num) {
    return str_repeat($str, $num);
}

echo repeatString("Mushabir", 2); // MushabirMushabir
echo "<br/>";
echo repeatString("Hello", 3); // HelloHelloHello

?>