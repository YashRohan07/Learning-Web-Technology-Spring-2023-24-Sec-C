<?php
session_start();
require_once('../model/Model.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == "" || $password == "") {
        echo "Please enter both email and password!";
    } else {
        $user = getUserById($id); 
        if ($user['password'] == $password) {
            $_SESSION['flag'] = true;
         
            header('location: ../view/Dashboard.php');
            exit();
        } else {
            echo "Invalid user!";
        }
    }
} else {
    // Redirect to the login page if accessed directly
    header('location: Login.php');
    exit();
}
?>
