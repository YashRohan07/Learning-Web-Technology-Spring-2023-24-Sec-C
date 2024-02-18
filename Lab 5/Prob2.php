<html>
<style>
    fieldset{
        width: 350px;
    }
    label1{
        color:green;
    }
    label2{
        color:red;
    }

 </style>
<body>
    <form action="" method="">
		<fieldset>
            <legend><b>CHANGE PASSWORD</b></legend>
            <table>
                <tr>
                    <td>
                    <label for="currpass">Current Password :</label>
                    </td>
                    <td>
                    <input type="password" id="currpass" name="currpass"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                    <label1 for="newpass">New Password :</label>
                    </td>
                    <td>
                    <input type="password" id="newpass" name="newpass"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                    <label2 for="retypepass">Retype New Password :</label>
                    </td>
                    <td>
                    <input type="password" id="retypepass
                    " name="retypepass"><br>
                    </td>
                </tr>
            </table>
            <hr>

        </br>
        <input type="submit" name="submitpass" value="Submit">
        </fieldset>
        
    </form>
</body>
</html>

