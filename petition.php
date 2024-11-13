<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "petition_system";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data (using POST for a real form submission)
$name = $_POST['name'];
$student_id = $_POST['student_id'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$language = $_POST['language'];
$semester = $_POST['semester'];
$year = $_POST['year'];
$semester_number = $_POST['semester_number'];
$program_type = $_POST['program_type'];
$study_mode = $_POST['study_mode'];
$program_name = $_POST['program_name'];
$university_name = $_POST['university_name'];
$faculty = $_POST['faculty'];
$specialization = $_POST['specialization'];
$permission = isset($_POST['permission']) ? 1 : 0;
$resignation = isset($_POST['resignation']) ? 1 : 0;
$crossed_out = isset($_POST['crossed_out']) ? 1 : 0;
$semesters_passed = $_POST['semesters_passed'];
$receiver_signature = $_POST['receiver_signature'];
$student_signature = $_POST['student_signature'];
$dean_decision = $_POST['dean_decision'];
$dean_signature = $_POST['dean_signature'];

// Insert data into the database
$sql = "INSERT INTO petitions (name, student_id, email, phone, language, semester, year, semester_number, program_type, study_mode, program_name, university_name, faculty, specialization, permission, resignation, crossed_out, semesters_passed, receiver_signature, student_signature, dean_decision, dean_signature)
VALUES ('$name', '$student_id', '$email', '$phone', '$language', '$semester', '$year', '$semester_number', '$program_type', '$study_mode', '$program_name', '$university_name', '$faculty', '$specialization', $permission, $resignation, $crossed_out, $semesters_passed, '$receiver_signature', '$student_signature', '$dean_decision', '$dean_signature')";

if ($conn->query($sql) === TRUE) {
    echo "New petition submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
