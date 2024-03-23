<?php
    require_once('../model/model.php');

    // Get the values from the request
    $id = $_REQUEST['id'];
    $password = $_REQUEST['password'];
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $usertype = $_REQUEST['usertype'];

    // Check if any required field is empty
    if ($id == "" || $password == "" || $name == "" || $email == "" || $usertype == "") {
        echo "Please fill in all the required fields.";
    } else {
        // Create an array with the user data
        $user = [
            'id' => $id,
            'password' => $password,
            'name' => $name,
            'email' => $email,
            'usertype' => $usertype
        ];
       
        // Call the function to create the user
        $status = createUser($user);

        // Check if user creation was successful
        if ($status) {
            header('location: ../view/Login.php');
            exit(); 
        } else {
            echo "Database error. Please try again.";
        }
    }
?>
