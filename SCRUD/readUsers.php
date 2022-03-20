<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
table{
  margin:2em auto;
}
      table,tr,td,th{
        border:2px solid green;
        border-collapse:collapse;
        font-size:24px;
        padding:2px;

      }
      th{
      background-color:rgba(0,0,200,0.7);
      color:white;
      font-weight:lighter;
      font-size:24px;
      }
    </style>
</head>
<body>
  <?php
//   echo "this is readUser page";
include_once 'send.php';

$select=mysqli_query($connect, "SELECT * FROM mis_users");


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

while($row=mysqli_fetch_assoc($select)){
    echo "<tr>";
    echo "<td>".$row['user_id']."</td>";
    echo "<td>".$row['firstName']."</td>";
    echo "<td>".$row['lastName']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['gender']."</td>";
    echo "<td>".$row['telephone']."</td>";
    echo "<td>".$row['nationality']."</td>";
    echo "<td>".$row['username']."</td>";
    echo "<td><a href=useredit.php?user_id=".$row['user_id'].">update</a> </td>";
    echo "<td><a href=userdelete.php?user_id=".$row['user_id'].">delete</a> </td>";
    echo "</tr>";
}
echo "</table>"
?>
</body>
</html>