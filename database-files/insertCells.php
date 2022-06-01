<?php

include_once "connection.php";

$cellsFile=fopen("Cell.txt","r");

while(!feof($cellsFile)){
    $cellId=explode(",",fgets($cellsFile))[0];
    $sectorId=explode(",",fgets($cellsFile))[1];
    $cellName=explode(",",fgets($cellsFile))[2];

    // echo $cellName . " " . $sectorId . " " . $cellId ."<br>";

    $insertQuery=mysqli_query($connection,"INSERT INTO cell (cellId,sectorId,cellName) VALUES ('$cellId','$sectorId','$cellName')");
    if($insertQuery){
        echo "cell with name '$cellName' inserted";
    }// else{
    //     echo "cell with name '$cellName' was not inserted";
    // }
}

fclose($cellsFile);

?>