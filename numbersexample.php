<?php

//is_int() checks whether value is int
$number = 10;
var_dump(is_int($number));
echo"<br>"; 

//is_float() checks whether value is float
$number3 = 10.94949;
var_dump(is_float($number3));
echo"<br>"; 

//is_numeric() checks whether value is a number (takes int and float as true)
$number4 = "hello";
var_dump(is_numeric($number4));
echo"<br>"; 

//casting from float to integer
$x = 10.333;
echo $x . "<br>";
var_dump($x);
echo"<br>";

$intnumber = (int)$x;
echo $intnumber . "<br>";
var_dump($intnumber);
echo"<br>";


//casting from string numeric value to int
$stringvalue = "9494";
echo $stringvalue . "<br>";
var_dump($stringvalue);
echo"<br>";

$intfromstring = (int)$stringvalue;
echo $intfromstring . "<br>";
var_dump($intfromstring);
echo"<br>";

//math functions

//pi() gives the value of pi
echo pi();
echo"<br>";

//min() minimum value of given parameters
echo min(2,4,6,1,3);
echo"<br>";

//max() maximum value of given parameters
echo max(2,4,6,1,3);
echo"<br>";

//abs returns absolute (positive) value of parameter
echo abs(-100);
echo"<br>";

//sqrt() square root of parameter
echo sqrt(1000);
echo"<br>";

//round() rounds value to integer
echo round(1.2);
echo"<br>";

//rand() returns random number (can set within a certain range)
echo rand(0,100);
echo"<br>";


?>