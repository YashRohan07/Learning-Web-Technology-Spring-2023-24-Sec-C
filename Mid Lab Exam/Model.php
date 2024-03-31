<?php
require_once('Database.php');

function login($email, $password){
    $con = dbConnect();
    $sql = "SELECT * FROM Info WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if($count == 1){
        return true;
    }else{
        return false;
    }
}

function getAllUser(){
    $con = dbConnect();
    $sql = "SELECT * FROM Info";
    $result = mysqli_query($con, $sql);

    $Info =[];
    while($row = mysqli_fetch_assoc($result)){
        array_push($Info, $row);
    }

    return $Info;
}


function createUser($user){
    $con = dbConnect();

    $fname = $user['fname'];
    $lname = $user['lname'];
    $dob = $user['dob'];
    $gender = $user['gender'];
    $phone = $user['phone'];
    $email = $user['email'];
    $password = $user['password'];
    $confirm_password = $user['confirm_password'];
    
    $sql = "INSERT INTO Info (fname, lname, dob, gender, phone, email, password) VALUES ('$fname', '$lname', '$dob','$gender','$phone','$email', '$password')";
    
    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}


?>
