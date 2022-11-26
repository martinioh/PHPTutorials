<?php

//php loops

//for loop
for($x=0; $x<10; $x++){
    echo $x . "<br>";

}

// foreach
$fruits=array("apple","orange","banana");
foreach($fruits as $values){
    echo $values . "<br>";
}

// associative array foreach
$mydata = array("name" => "martin", "branch" => "computer science"
, "place" => "teesside");
foreach($mydata as $z=>$y){
    echo "$z=>$y". "<br>";
}

// while loop
$a = 0;
while($a<6){
    echo $a . "<br>";
    $a++;
}

// do-while (while loop that checks conditon after running, always runs at least one time)
$b = 0;
do{
    echo $b . "<br>";
    $b++;
} while ($b<6);

// break
for($c=0; $c<10; $c++){
    echo $c;
    if ($c == 6){
        break;
    }
}

?>