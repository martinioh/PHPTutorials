<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms
    </title>
    <link rel="stylesheet" href="style.css">
  </head>
  
  <body>
	<form action="<?php $_SERVER['PHP_SELF']?>" 
    method = "post">
    <input type = "text" name = "fname" placeholder = "First Name" autocomplete = "off">
    <br>
    <br>
    <input type = "text" name = "lname" placeholder = "Last Name" autocomplete = "off">
    <br>
    <br>
    <button type = "submit">Submit</button>

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        echo $fname . "<br>";
        echo $lname . "<br>";
    }
    
    
    ?>

</form>

  </body>
</html>