
<?php

include_once "connection.php";

$selectQuerry=mysqli_query($connection, "SELECT * FROM province");

$provinceFile=fopen("Province.txt","w");

while($province=mysqli_fetch_assoc($selectQuerry)){
    $provinceId=$province["provinceId"];
    $provinceName=$province["provinceName"];
    fwrite($provinceFile,$provinceId.",".$provinceName."\n");
}

fclose($provinceFile);

?>

