<?php

// readfile()
 echo readfile("data.txt"); 

 //fopen(file,read/write mode) then fread (file,lengthofdataread), then fclose(file)
/* $mydata = fopen("data.txt", "r");
 echo fread($mydata,filesize("data.txt"));
fclose($mydata);  */ 


//fgets() and feof() gets every line formatted, until end of the file
/*  while (!feof($mydata)){
    echo fgets($mydata);
    echo "<br>";
}
fclose($mydata);  */


//fgetc() gets each character, until end of the file 
/*  while (!feof($mydata)){
    echo fgetc($mydata);
    echo "<br>";
}
fclose($mydata); */
 

 //create and write files (fopen in write mode creates files if it doesnt already exist, 
 //else opens and edits)
$mynewfile = fopen("php.txt","w");
//echo $mynewfile;
$text = "Martin Robinson, Teesside";
fwrite($mynewfile,$text);


?>