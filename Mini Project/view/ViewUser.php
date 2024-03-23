<?php
include 'Database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View User</title>
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
<h2>User Display</h2>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>User Type</th>
    <th>Actions</th>
  </tr>
  
<?php
$con = dbConnect(); 
$sql = "SELECT * FROM data"; 
$result = mysqli_query($con, $sql);  

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $usertype = $row['usertype'];

        echo '<tr>
            <th scope="row"> '.$id.' </th>
        
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$uertype.'</td>

            <td>
            <button><a href="UserUpdate.php?id=' . $id . '">Update</a></button>
            <button><a href="UserDelete.php?id=' . $id . '">Delete</a></button>
            </td>
        
            </tr>';
    }
} else {
    echo '<tr><td colspan="6">No users found</td></tr>';
}
?>  
</table>
</center>
</body>
</html>