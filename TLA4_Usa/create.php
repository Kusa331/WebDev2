<?php
require_once 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $course = $_POST['course'];
    $year_enrolled = $_POST['year_enrolled'];
    $birthday = $_POST['birthday'];

    $sql = "INSERT INTO students (first_name, last_name, course, year_enrolled, birthday) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $first_name, $last_name, $course, $year_enrolled, $birthday);
    
    if ($stmt->execute()) {
        header("Location: read.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Add New Student</h2>
        <form method="post" action="">
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="last_name" placeholder="Last Name" required>
            <input type="text" name="course" placeholder="Course">
            <input type="number" name="year_enrolled" placeholder="Year Enrolled">
            <input type="date" name="birthday" placeholder="Birthday">
            <button type="submit">Add Student</button>
        </form>
        <a href="read.php">View Students</a>
    </div>
</body>
</html>