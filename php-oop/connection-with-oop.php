<?php

//you can connect to the db with the following code:

$connection=new mysqli("localhost","root","","admin_entities");

if($connection->connect_error){
    die("connection failed: ".$connection->connect_error);
}else{
    echo "connected successfully";
}

?>