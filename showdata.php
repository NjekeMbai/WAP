<?php
include_once 'connect.php';
$result = mysqli_query($link,"SELECT * FROM user_details");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Free the Data</title>
 <link rel="stylesheet" type="text/css" href="showdata.css">
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <h2>User Data</h2>

  <table class="fl-table">
  <thead>
  <tr>
    <th>First Name</th>
    <th>Second Name</th>
    <th>Email</th>
    <th>Date of Birth</th>
    <th>Gender</th>
    <th>Username</th>
  </tr>
</thead>  
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["First_name"]; ?></td>
    <td><?php echo $row["Second_name"]; ?></td>
    <td><?php echo $row["Email_address"]; ?></td>
    <td><?php echo $row["Date_of_birth"]; ?></td>
    <td><?php echo $row["Gender"]; ?></td>
    <td><?php echo $row["username"];?></td>
    
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>