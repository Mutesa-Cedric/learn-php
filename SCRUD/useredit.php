<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
        }
        
        .container {
            width: 58%;
            margin: auto;
            margin-top: 1%;
        }
        
        form {
            padding: 30px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            border-radius: 20px
        }
        
        .header {
            text-align: center;
            font-size: 18px;
            margin-bottom: 20px;
            font-weight: 600;
        }
        
        .field {
            margin: auto;
            display: flex;
            justify-content: center;
            position: relative;
        }
        
        .field input,
        select {
            margin: auto;
            width: 80%;
            height: 30px;
            margin: 5px;
            outline: none;
            padding: 1px 5px;
        }
        
        .field input:focus {
            border: 2px solid rgb(74, 73, 73);
        }
        
        .field.gender label {
            position: absolute;
            left: 10%;
            margin-top: 10px;
        }
        
        .field.gender input {
            width: auto;
            margin-left: 10px;
        }
        
        .field.field.gender span {
            margin-top: 6px;
        }
        
        .field.submit {
            display: flex;
            justify-content: center;
        }
        
        input[type="submit"] {
            background: rgba(0, 0, 200, 0.6);
            color: white;
            cursor: pointer;
            border: none;
            transition: .3s ease-in;
        }
        
        input[type="submit"]:hover {
            background: #111;
        }
        table{
         margin:2em auto;
        }   
        table,tr,td,th{
        border:2px solid rgba(0,0,200,0.5);
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

$id=$_GET['user_id'];

$select=mysqli_query($connect, "SELECT * FROM mis_users WHERE user_id=$id ");

echo "<table>
<tr>
<caption>user with id $id </caption>
<th>Id</th>
<th>firstname</th>
<th>lastname</th>
<th>Email</th>
<th>Gender</th>
<th>Telephone</th>
<th>Nationality</th>
<th>username</th>
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
    echo "</tr>";
}
echo "</table>"
?>

    <div class="container">
        <form action="<?php echo "./update.php?user_id={$id}"?>" method="post">
            <div class="header">update a user</div>
            <div class="field fname">

                <input type="text" placeholder="Enter first name" name="fname">
            </div>
            <div class="field lname">

                <input type="text" placeholder="Enter Last name" name="lname">
            </div>
            <div class="field email">

                <input type="email" placeholder="Enter your email" name="email">
            </div>
            <div class="field tel">

                <input type="tel" placeholder="Enter your telephone number" name="tel">
            </div>
            <div class="field gender">
                <label>Gender</label>
                <input type="radio" name="gender" value="male">
                <span>Male</span>
                <input type="radio" name="gender" value="female">
                <span>Female</span>
            </div>
            <div class="field nation">

                <select name="nation" id="">
                    <option value="Rwanda">Rwanda</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Kenya">Kenya</option>
                </select>

            </div>
            <div class="field username">

                <input type="text" placeholder="Enter your username" name="username">
            </div>
            <div class="field username">

                <input type="password" placeholder="Enter your Password" name="password">
            </div>
            <div class="field username">
                <input type="password" placeholder="repeat password" name="c_password">
            </div>
            <div class="field submit">
                <input type="submit" value="Register">
            </div>
        </form>
    </div>
</body>
</html>