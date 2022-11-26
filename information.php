<?php

session_start();
if(isset($_SESSION['username'])){
    echo "Welcome ".$_SESSION['username'];
    echo ", your password is " . $_SESSION['password']; //obviously don't ever display password, just an example
    echo "<br>";
    echo "Your email is ".$_SESSION['email'];
} else {
    echo "Please log in again to continue.";
}



?>