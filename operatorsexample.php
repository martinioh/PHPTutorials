<?php

//operators

//Arithmetic operator
$x = 10;
$y = 20;
//addition
echo $x+$y;
echo"<br>";

//subtraction
echo $x-$y;
echo"<br>";

//multiplication
echo $x*$y;
echo"<br>";

//division
echo $x/$y;
echo"<br>";

//modulus
echo $x%$y;
echo"<br>";

//exponential
echo $x**$y;
echo"<br>";


//Assignment operator

//initialisation
$mydata = "Computer Science";

//incrementation
$number = 2;
$number += 20;
echo $number;
echo"<br>";

//decrementation
$number2 = 100;
$number2 -=10;
echo $number2;
echo"<br>";

//Comparison operator 

//check value
$a = 10;
$b = "10";
echo var_dump($a==$b);
echo"<br>";

//check type and value
$c = 10;
$d = "10";
echo var_dump($c===$d);
echo"<br>";

//not equal to
$e = 10;
$f = "100";
echo var_dump($e!=$f);
echo"<br>";

//greater than/less than
$g = 99;
$h = 100;
echo var_dump($g<$h);
echo"<br>";
echo var_dump($g>$h);
echo"<br>";

//spaceship operator (returns 0 if values are equal, 1 if value on left is greater
//and -1 if value on right if greater)
$i = 1000;
$j = 1001010;
echo var_dump($i<=>$j);
echo"<br>";

//Logical operator
//and, or, not, xor

//and
$k = 10;
$l = 15;
if ($k==10 and $l==15){
    echo "true";
} else {
    echo "false";
}
echo"<br>";

//or
$m = 10;
$n = 15;
if ($m==9 or $n==15){
    echo "true";
} else {
    echo "false";
}
echo"<br>";

//not (1 changes to 0 and vice versa)
$o = 0;
echo !$o . "<br>";

//xor (true if either p or q is true, but not both)
$p = 10;
$q = 15;
if ($p==10 xor $q==15){
    echo "true";
} else {
    echo "false";
}
echo"<br>";

//Array operators

$colours1 = array("blue"=>"2","green"=>"5");
$colours2 = array("black"=>"2","yellow"=>"5");

// + concatenate arrays
print_r($colours1+$colours2);
echo"<br>";

// == true if $a and $b have the same key/value pairs.
var_dump($colours1==$colours2);
echo"<br>";

// === strict array equality (keys/values are in same order and values are same types)
var_dump($colours1===$colours2);
echo"<br>";

// != checks whether arrays are not equal
var_dump($colours1!==$colours2);
echo"<br>";


//Conditional assignment
// ?:

$marks=40;
echo ($marks>=40) ? ("Pass") : ("Fail");


?>