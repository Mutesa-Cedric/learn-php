
<?php

/*
when you need to write into a file but also keep what is inside that file,
you use append method which is done as follows:
*/
$myFile=fopen("../names.txt","a") or die("failed to open the file!");
// echo fread($myFile,filesize("../names.txt"));

$namesToAppend=array();

$namesToAppend=["keivn\n","prince\n","gihozo\n"];

$i=0;

while($i<count($namesToAppend)){

    //even if its appending , you use fwrite
    
    fwrite($myFile,$namesToAppend[$i]);

    // echo "name".$namesToAppend[$i] . "was inserted";

    $i++;

}

fclose($myFile);


?>