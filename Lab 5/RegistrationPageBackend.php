<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year']; 

    if (empty($name) || empty($email) || empty($username) || empty($password) || empty($confirm_password) || empty($gender) || empty($day) || empty($month) || empty($year)) {
        echo "All fields are required.";
    } elseif ($password !== $confirm_password) {
        echo "Password and Confirm Password do not match.";
    } else {
     
        echo "Registration Successful!<br>";
        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Username: $username<br>";
        echo "Gender: $gender<br>";
        echo "Date of Birth: $day/$month/$year<br>";
       
    }
}
?>
