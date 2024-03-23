<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>
    <center>
        <h2>Change Password</h2>
        <form method="POST" action="../controller/PasswordChanger.php">
            <table>
                <tr>
                    <td><b>Current Password:</b></td>
                    <td><input type="password" name="current_password" required></td>
                </tr>
                <tr>
                    <td><b>New Password:</b></td>
                    <td><input type="password" name="new_password" required></td>
                </tr>
                <tr>
                    <td><b>Retype New Password:</b></td>
                    <td><input type="password" name="confirm_new_password" required></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
