<?php
require_once('Database.php');
session_start();

if(isset($_POST['submit'])){
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_new_password = $_POST['confirm_new_password'];

    $conn = dbConnect(); 

    $query = "SELECT * FROM data";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($current_password, $row['password'])) {
            if ($new_password === $confirm_new_password) {
                mysqli_query($conn, "UPDATE data SET password='$new_password'");
                header('location:../view/Login.php');
                exit();
            } else {
                echo "New passwords do not match!";
            }
        } else {
            echo "Current password is incorrect!";
        }
    } else {
        echo "User not found!";
    }

    mysqli_close($conn);
}
?>
