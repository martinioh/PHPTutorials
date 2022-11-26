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
    <!-- Get Method -->
   <!--  <a href="<?php echo $_SERVER['PHP_SELF'] ?>?subject=PHP">Click me</a>

    <?php
    echo "This is a " . $_GET['subject']. " tutorial";

    ?> -->

    <form action = "welcome.php" method = "post">
        <input type = "text" name = "fname" autocomplete = "off">
        <br>
        <input type = "text" name = "lname" autocomplete = "off">
        <br>
        <button type = "submit">Submit</button>

    </form>


    <!-- when to use get and post (never send sensitive data using get method
        get can be used to bookmark data which isnt possible for post) --> 

  </body>
</html>