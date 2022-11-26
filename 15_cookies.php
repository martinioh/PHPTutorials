<!-- cookies -->
<!-- A piece of information stored inside our system. We should never set 
username or password using cookies.-->


<?php

//syntax of setting cookies
//setcookie(name,value,expires,path);

$category_name = "Food";
$category_value = "Pizza";

setcookie($category_name,$category_value,time()+86400,"/"); //set cookie with name and value, for 1 day 
//and "/" means everywhere on the website.
echo "Cookie is set";

?>
