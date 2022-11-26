<?php

// global variables


// GLOBALS

$a = 10;
$b = 20;
function numbers(){
    global $result, $a, $b;
    $result = $a + $b;
    echo $result . "<br>";

}
numbers();


// $_SERVER

echo $_SERVER['PHP_SELF'] . "<br>";
echo $_SERVER['SERVER_ADDR']. "<br>";
echo $_SERVER['SERVER_NAME']. "<br>";





?>