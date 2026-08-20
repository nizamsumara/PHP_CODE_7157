<?php
include 'Lab13_00_db_connect.php';

$sql = "SELECT * FROM login";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Records</title>
</head>
<body>

<h2>Login Records</h2>

<table border="1" cellpadding="10" cellspacing="0">

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Password</th>
    <th>Phone No</th>
    <th>Action</th>
</tr>

<?php

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['ID']; ?></td>
<td><?php echo $row['Name']; ?></td>
<td><?php echo $row['Password']; ?></td>
<td><?php echo $row['Phone_no']; ?></td>

<td>

<a href="edit.php?id=<?php echo $row['ID']; ?>">Edit</a>

|

<a href="delete.php?id=<?php echo $row['ID']; ?>" onclick="return confirm('Delete this record?')">Delete</a>

</td>

</tr>

<?php
}
?>

</table>

</body>
</html>
