
<?php
/*when you open a file with write mode, you can write content 

into that file but it will override current content in a file

*/
$myFile=fopen("names.txt","w") or die("failed to open file");

$name=array();

$name=["mutesa\n","cedric\n","yvan\n","bonless\n"];

$i=0;

while($i<count($name)){

    fwrite($myFile,$name[$i]);

    $i++;
    
}

fclose($myFile);


?>
