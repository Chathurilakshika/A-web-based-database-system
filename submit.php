<?php
Include 'includes/db_connect.php';
// Check which form is submitted and handle data insertion
If ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
 // Adding a Student
 If (isset($_POST['studentID'])) {
 $studentID = $_POST['studentID'];
 $firstName = $_POST['firstName'];
 $lastName = $_POST['lastName'];
 $address = $_POST['address'];
 $diplomaID = $_POST['diploma'];
 $sql = "INSERT INTO students (StudentID, FirstName, LastName, Address, 
DiplomaID) VALUES ('$studentID', '$firstName', '$lastName', '$address', '$diplomaID')";
 
 If ($conn->query($sql) === TRUE) {
 Echo "New student added successfully.";
 } else {
 Echo "Error: " . $sql . "<br>" . $conn->error;
 }
 }
}
$conn->close();
?>
