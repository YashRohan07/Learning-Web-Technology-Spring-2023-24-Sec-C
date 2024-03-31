<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
    
    <form method="get" action="RegistrationCheck.php" enctype="">
        
        <table border="1">
           
            <tr>
                <td>First Name:</td>
                <td><input type="text" id="fname" name="fname" required></td>
            </tr>

            <tr>
                <td>Last Name:</td>
                <td><input type="text" id="lname" name="fname" required></td>
            </tr>

            <tr>
                <td>Date of Birth:</td>
                <td><input type="date" id="dob" name="dob" required></td>
            </tr>

            <tr>
                <td>Gender:</td>
                <td>
                    <label for="gender_male"><input type="radio" id="gender_male" name="gender" value="male"> Male</label>
                    <label for="gender_female"><input type="radio" id="gender_female" name="gender" value="female"> Female</label>
                    <label for="gender_other"><input type="radio" id="gender_other" name="gender" value="other"> Other</label>
                </td>
            </tr>

            <tr>
                <td>Phone:</td>
                <td><input type="text" id="phone" name="phone" required></td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><input type="text" id="email" name="email" required></td>
            </tr>
            
            <tr>
                <td>Password:</td>
                <td><input type="password" id="password" name="password" required></td>
            </tr>

            <tr>
                <td>Confirm Password:</td>
                <td><input type="password" id="confirm_password" name="confirm_password" required></td> 
            </tr>
           
           
           
            <tr>
                <th></th>
                <td><input type="submit" value="Submit"> <input type="reset" value="Reset"></td>
            </tr>

        </table>
    </form>
</body>
</html>