Document.getElementById('studentForm').addEventListener('submit', function(event) {
 const studentID = document.getElementById('studentID').value;
 If (studentID === '') {
 Alert('Student ID is required.');
 Event.preventDefault(); // Prevent form submission
 }
 // Add more validation as needed
});
