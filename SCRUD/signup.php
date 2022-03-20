<?php
    include_once 'send.php';

    $firstName=$_POST["fname"];
    $lastName=$_POST["fname"];
    $email=$_POST["email"];
    $telephone=$_POST["tel"];
    $gender=$_POST["gender"];
    $nationality = $_POST['nation'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['c_password'];
if(empty($firstName)||empty($lastName)||empty($email)||empty($telephone)||empty($gender)||empty($nationality)||empty( $username)||empty($password)||empty($cpassword)){
    echo "all fields are required!";
}
else{
    if($password==$cpassword){
        $hashedPass=hash("md5",$password);
        $insertQuery=mysqli_query(
            $connect,"INSERT INTO mis_users(firstName,lastName,telephone,gender,nationality,username,email,password) VALUES('$firstName','$lastName','$telephone','$gender','$nationality','$username','$email','$hashedPass')"
        );
        if($insertQuery){

            echo "<h2>user registration successful!</h2>";

            echo "<a href=\"readUsers.php\">read users</a>";
        }
        else{
            echo "<h2>user registration failed!</h2>";

        }
    }
    else{
        echo "<h2>password does not match!</h2>";
    
    }
}

?>