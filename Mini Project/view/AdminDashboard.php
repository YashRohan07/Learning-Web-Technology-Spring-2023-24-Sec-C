<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <center>
        <?php
        session_start();

        if(isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            echo "<h1>Welcome, $username!</h1>";
            echo "<a href='../view/AdminProfile.php'><button>Profile</button></a>";
            echo "<a href='../view/ViewUser.php'><button>View User</button></a>";
            echo "<a href='../view/PassChange.php'><button>Change Password</button></a>";
            echo "<a href='../controller/Logout.php'><button>Logout</button></a>";
        } 
        else {
            header("Location: ../view/Login.php");
            exit();
        }
        ?>
       
    </center>
</body>
</html>
