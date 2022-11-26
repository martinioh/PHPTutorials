<?php

//conditional statements

// if-else
$a = 9;
if($a == 9){
    echo "I am 9";
} else {
    echo "I am not 9";
}

//switch
$colour = "yellow";
switch($colour){
    case "red":
        echo "This is red";
        break;
    case "purple":
        echo "This is purple";
        break;
    case "yellow":
        echo "This is yellow";
        break;
    case "green":
        echo "This is green"; //this line would be printed also 
                                //without a break statement
        break;
    default:
    echo "I am not any of these colours";
}


?>