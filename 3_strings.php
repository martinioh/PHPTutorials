<?php
//String functions

//strlen() length of string
$language = "Hypertext Preprocessor";
echo strlen($language);
echo "<br>";

//str_word_count() counts number of words
$sentence1 = "The quick brown fox jumped over the lazy dog";
echo str_word_count($sentence1);
echo "<br>";

//strrev() reverses string
$sentence2 = "I am programming in PHP.";
echo strrev($sentence2);
echo "<br>";

//strpos()  finds the position of the first occurrence of a substring in a string 
$sentence3 = "What are you having for your lunch today?";
echo strpos($sentence3,"you");
echo "<br>";
?>