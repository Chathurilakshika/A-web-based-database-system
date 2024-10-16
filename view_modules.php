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
 <title>View Modules</title>
 <link rel="stylesheet" href="css/styles.css">
</head>
<body>
 <h1>Modules List</h1>
 <table border="1">
 <tr>
 <th>Module code</th>
 <th>Title</th>
 <th>Module Coordinator ID</th>
 </tr>
 <?php
 If ($result->num_rows > 0) {
 While($row = $result->fetch_assoc()) {
 Echo "<tr>
 <td>{$row['ModuleCode']}</td>
 <td>{$row['Title']}</td>
 <td>{$row['ModuleCoordinatorID']}</td>
 </tr>";
 }
 } else {
 Echo "<tr><td colspan='5'>No modules found</td></tr>";
 }
 ?>
 </table>
</body>
</html>
<?php $conn->close(); ?>
