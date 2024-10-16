<?php
Include 'includes/DbConnect.php';
$sql = "SELECT * FROM students";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>View Lecturers</title>
 <link rel="stylesheet" href="css/styles.css">
</head>
<body>
 <h1>Lecturers List</h1>
 <table border="1">
 <tr>
 <th>Lecturer ID</th>
 <th>FirstName</th>
 <th>LastName</th>
 <th>Department ID</th>
 </tr>
 <?php
 If ($result->num_rows > 0) {
 While($row = $result->fetch_assoc()) {
 Echo "<tr>
 <td>{$row['LecturerID']}</td>
 <td>{$row['FirstName']}</td>
 <td>{$row['LastName']}</td>
 <td>{$row['DepartmentID']}</td>
 </tr>";
 }
 } else {
 Echo "<tr><td colspan='5'>No lecturers found</td></tr>";
 }
 ?>
 </table>
</body>
</html>
<?php $conn->close(); ?>
