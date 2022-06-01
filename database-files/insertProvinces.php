
<?php

include_once "connection.php";

$provincesFile=fopen("Province.txt","r");

while(!feof($provincesFile)){
    $provinceName=explode(",",fgets($provincesFile))[1];
    $provinceId=explode(",",fgets($provincesFile))[0];

    $insertQuery=mysqli_query($connection,"INSERT INTO province (provinceId,provinceName) VALUES ('$provinceId','$provinceName')");
    if($insertQuery){
        echo "inserted successfully";

    }else{
        echo "failed";
    }
}

fclose($provincesFile);

?>