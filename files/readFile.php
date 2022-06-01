<?php

/* there are two options to read a file, the first one is to read the whole file at same time
the second file is to read a file line by line
*/

//reading whole file at once

$textContent = fopen("test.txt", "r") or die("unable to read the file");

//fread funtion receives mainly two parameters: filestream and filesize
/*

echo "the content of a file in a single line is : ";

echo "<br>";

echo fread($textContent, filesize("test.txt"));

echo "<br>";
//reading whole file at once

*/

//reading file line by line

//we use fgets to get read a line. after reading a line, the pointer moves to next line

echo "the content of a file in a single line is : ";

echo "<br>";

while (!feof($textContent)) {

    echo fgets($textContent);

    echo "<br>";
}

fclose($textContent);
