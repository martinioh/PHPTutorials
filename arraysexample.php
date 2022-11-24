<?php
// 1) Indexed array
$colors = array("blue", "green", "yellow", "white", "black");
$colorsLength = count($colors);

for($i=0; $i<$colorsLength; $i++){
    echo $colors[$i];
    echo "<br>";
}

// 2) Associative array
$subject = array("Martin"=>"Computer Science", "John"=>"Economics");
echo $subject["Martin"]. "<br>";
echo $subject["John"]. "<br>";

foreach($subject as $x=>$value){
    echo "key=".$x.",value=".$value."<br>";
}

//3) Multidimensional array
$shapes=array(array("square",11),array("rectangle",10)
,array("triangle",15));

echo $shapes[0][1]."<br>"; //1st array, value in 1st index
echo $shapes[1][0]."<br>"; //2nd array, value in 0st index


for($row=0; $row<3; $row++){
    echo "Row ".$row."<br>";
    for($col=0; $col<2; $col++){
        echo $shapes[$row][$col]." ";
    }
    echo "<br>";
}

//Functions in arrays

//sort() alphabetical sort
$fruits = array("apple","mango","pineapple","banana");
sort($fruits);
print_r($fruits); //print_r is used to display array values to a string
echo"<br>"; 

//rsort() reverse sort
$dogs = array("chihuahua","dalmation","poodle","french bulldog");
rsort($dogs);
print_r($dogs);
echo"<br>";

//asort() ascending sort by pointer value
$title = array("James"=>"Captain", "Brian"=>"Private","Jim"=>"Major");
asort($title);
print_r($title);
echo"<br>";

//ksort() sorts keys in ascending order
$sports = array("Football"=>"Good", "Basketball"=>"Boring","Cricket"=>"Long");
ksort($sports);
print_r($sports);
echo"<br>";

//arsort() descending sort by pointer value
$foods = array("Chicken"=>"Pen", "Cow"=>"Farm","Fish"=>"Sea");
asort($foods);
print_r($foods);
echo"<br>";

//krsort() sorts keys in descending order
$watches = array("Rolex"=>"Gold", "Tag Heuer"=>"Silver","Argos"=>"Tin");
ksort($watches);
print_r($watches);
echo"<br>";


?>
