
 <?php

include_once "connection.php";

$districtsFile=fopen('District.txt', 'r');

while(!feof($districtsFile)){
    $districtName=explode(',', fgets($districtsFile))[2];
    $districtId=explode(',', fgets($districtsFile))[0];
    $provinceId=explode(',', fgets($districtsFile))[1];
    $insertQuery=mysqli_query($connection,"INSERT INTO district (districtId,provinceId,districtName) values('$districtId','$provinceId','$districtName')");
    if($insertQuery){
        echo "good!";
    }else{
        echo "bad!";
    }
}
fclose($districtsFile);

    ?>