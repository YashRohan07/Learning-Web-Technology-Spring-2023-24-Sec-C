<?php
require_once('../model/Model.php'); 

$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$dob = $_REQUEST['dob'];
$gender = $_REQUEST['gender'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$confirm_password = $_REQUEST['confirm_password'];

if (empty($fname) || empty($lname) || empty($dob) || empty($gender) || empty($phone) || empty($email) || empty($password) || empty($confirm_password)) {
    echo "Please fill in all the required fields.";
} elseif ($password !== $confirm_password) {
    echo "Passwords do not match. Please try again.";
} else {
   
    $user = [
        'fname' => $fname,
        'lname' => $lname,
        'dob' => $dob,
        'gender' => $gender,
        'phone' => $phone,
        'email' => $email,
        'password' => $password
    ];
   
   
    $status = createUser($user);

    if ($status) {
        header('Location: Dashboard.php'); 
        exit(); 
    } else {
        echo "Database error. Please try again.";
    }
}
?>
