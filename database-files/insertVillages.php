<?php

include_once "connection.php";

$villagesFile=fopen("Village.txt","r");

while(!feof($villagesFile)){

    $villageName= explode(',',fgets($villagesFile))[2];
    // echo $villageName . "<br>";
    $villageId=explode(',',fgets($villagesFile))[0];
    $cellId=explode(',',fgets($villagesFile))[1];

    // echo $villageName;

    $insertQuery=mysqli_query($connection,"INSERT INTO village (villageId,cellId,villageName) VALUES('$villageId','$cellId','$villageName')");
    if($insertQuery){
        echo "village with name '$villageName' inserted";
        echo "<br>";
    }
}
fclose($villagesFile);

?>