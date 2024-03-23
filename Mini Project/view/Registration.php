<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        table {
            border-collapse: collapse;
            border: 1px solid #ddd;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 5px;
        }
    </style>
</head>
<body>
    <center>
    <h2>Registration</h2> 
    <form method="get" action="../controller/RegistrationCheck.php" enctype="">
        <table border="1">
            <tr>
                <td>Id:</td>
                <td><input type="text" id="text" name="id" required></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" id="password" name="password" required></td>
            </tr>
            <tr>
                <td>Confirm Password:</td>
                <td><input type="password" id="confirm_password" name="confirm_password" required></td> <!-- Use different name for confirm password field -->
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" id="Name" name="Name" required></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" id="email" name="email" required></td>
            </tr>

            <tr>
                <td>User Type [User/Admin]</td>
                <td>
                    <select name="usertype" id="usertype" required>
                        <option value="">Select User Type</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </td>
            </tr>

            <tr>
                <th></th>
                <td>
                    <input type="submit" value="Register">
                    <a href="../view/Login.php"><button type="button">Login</button></a>
                </td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>
