<?php

    echo "this is userdelete page!";

    $id=$_GET['user_id'];

    include_once 'send.php';

    $deleteQuery=mysqli_query($connect,"DELETE FROM mis_users WHERE user_id=$id");

    if($deleteQuery){

        echo "user deleted successfully!";
        echo "<a href=\"readUser.php>readUsers</a>";
    }else{
        echo "failed to update!";
    }

?>