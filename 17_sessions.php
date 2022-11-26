<?php

// sessions()
session_start();
$_SESSION['username']="Martin";
$_SESSION['password']="coding";
$_SESSION['email']="coding@gmail.com";

echo "Session data is saved.";

//sessions data is stored inside server, cookies data is stored inside system

?>