<?php

//this is where the connection to the database is established

$database="admin_entities";
$host="localhost";
$password="";
$user="root";

$connection=mysqli_connect($host,$user,$password,$database);
if($connection){
    echo "connection established successfully!";
}else{
    echo " connection failed! ";
}

?>