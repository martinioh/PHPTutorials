<?php


// functions

function functionName(){

}
functionName();




function message($greetings,$name){
    echo "$greetings Thank you $name <br>";
}
message("Welcome & ","John");
message("Hello &","James");
message("Goodbye","Martin");

function numbers(int $x, int $y){
    return $x+y;
}
echo numbers(6,2);

?>