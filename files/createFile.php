<?php

//when you need to create a file with php , you use 
//fopen() function with "w" or "a" flag

//example

$testFile=fopen("test.txt","w") or die("unable to open the file");

//now test file is created

echo "file is created!";

fclose($testFile);

?>
