<?php

    $server="localhost";
    $username="root";
    $password="mypassword";
    $db="database name";

    $connect=mysqli_connect($server,$username,$password,$db);

    if(!$connect){

        echo mysqli_connect_error();
    }
    else{
        echo "database connection established!";
    }

?>