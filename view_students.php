<?php
Include 'includes/db_connect.php';
$sql = "SELECT * FROM students";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>View Students</title>
 <link rel="stylesheet" href="css/styles.css">
</head>
<body>
 <h1>Students List</h1>
 <table border="1">
 <tr>
 <th>Student ID</th>
 <th>First Name</th>
 <th>Last Name</th>
 <th>Address</th>
 <th>Diploma</th>
 </tr>
 <?php
 If ($result->num_rows > 0) {
 While($row = $result->fetch_assoc()) {
 Echo "<tr>
 <td>{$row['StudentID']}</td>
 <td>{$row['FirstName']}</td>
 <td>{$row['LastName']}</td>
 <td>{$row['Address']}</td>
 <td>{$row['DiplomaID']}</td>
 </tr>";
 }
 } else {
 Echo "<tr><td colspan='5'>No students found</td></tr>";
 }
 ?>
 </table>
</body>
</html>
<?php $conn->close(); ?>
