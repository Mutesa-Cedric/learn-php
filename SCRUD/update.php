<?php

    include_once 'send.php';

    $id=$_GET['user_id'];
    $firstName=$_POST['fname'];
    $lastName=$_POST['lname'];
    $email=$_POST['email'];
    $telephone=$_POST['tel'];
    $gender=$_POST['gender'];
    $nationality=$_POST['nation'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $cpassword=$_POST['c_password'];

    // if(empty($firstName)||empty($lastName)||empty($email)||empty($telephone)||empty($gender)||empty($nationality)||empty( $username)||empty($password)||empty($cpassword)){
    //     echo "all fields are required!";
    // }
    // else{
        if($password==$cpassword){
            $hashedPass=hash("md5",$password);
            $updateQuery=mysqli_query(
                $connect,"UPDATE mis_users SET firstname='$firstName',lastname='$lastName',telephone='$telephone',gender='$gender',nationality='$nationality',username='$username',email='$email',password='$password' WHERE user_id=$id"
            );
            if($updateQuery){
    
                echo "<h2>user with id=$id</h2>";
    
                echo "<a href=\"readUsers.php\">view users</a>";
            }
            else{
                echo "<h2>user upadate failed!</h2>";
    
            }
        }
    else{
                echo "<h2>password does not match!</h2>";
        
        }



?>