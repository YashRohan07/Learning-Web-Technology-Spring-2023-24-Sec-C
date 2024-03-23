<?php
require_once('Database.php');
 
function login($username, $password){
    $con = dbConnect();
    $sql = "select * from data where username='{$username}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
 
    if($count == 1){
        return true;
    }else{
        return false;
    }
}
 
function getAll(){
    $con = dbConnect();
    $sql = "select * from data";
    $result = mysqli_query($con, $sql);
 
    $admins =[];
    while($row = mysqli_fetch_assoc($result)){
        array_push($data, $row);
    }
 
    return $data;
 
}
 
function getUserById($id){
 
}
 

 
?>