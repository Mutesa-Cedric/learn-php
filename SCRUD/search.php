<?php

    include_once 'send.php';

    $userName=$_POST['username'];

    $selectQuery=mysqli_query($connect,"SELECT * FROM mis_users WHERE username  LIKE '%$userName%'");

    if($selectQuery){
        echo "<h2>showing results for search \" ${userName}\" </h2>";
        echo "succesful!";
        echo "<table>
        <tr>
        <th>Id</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Telephone</th>
        <th>Nationality</th>
        <th>username</th>
        <th>update</th>
        <th>delete</th>
        </tr>
        ";
        // if(user_id==0){
        //     echo "no user found!";
        // }

while($row=mysqli_fetch_assoc($selectQuery)){
    echo "<tr>";
    echo "<td>".$row['user_id']."</td>";
    echo "<td>".$row['firstName']."</td>";
    echo "<td>".$row['lastName']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['gender']."</td>";
    echo "<td>".$row['telephone']."</td>";
    echo "<td>".$row['nationality']."</td>";
    echo "<td>".$row['username']."</td>";
    echo "<td> <a href=useredit.php?user_id=".$row['user_id'].">update</a> </td>";
    echo "<td> <a href=userdelete.php?user_id=".$row['user_id'].">delete</a> </td>";
    echo "</tr>";
}
echo "</table>";
    
}
else{
    echo "selecting failed" . $connect->error;
}

?>