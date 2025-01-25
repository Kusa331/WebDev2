<?php
require_once 'db_connection.php';

$id = $_GET['id'];
$sql = "SELECT * FROM students WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$student = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $course = $_POST['course'];
    $year_enrolled = $_POST['year_enrolled'];
    $birthday = $_POST['birthday'];

    $sql = "UPDATE students SET first_name = ?, last_name = ?, course = ?, year_enrolled = ?, birthday = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $first_name, $last_name, $course, $year_enrolled, $birthday, $id);
    
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
    <title>Update Student</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Update Student</h2>
        <form method="post" action="">
            <input type="text" name="first_name" value="<?php echo $student['first_name']; ?>" required>
            <input type="text" name="last_name" value="<?php echo $student['last_name']; ?>" required>
            <input type="text" name="course" value="<?php echo $student['course']; ?>">
            <input type="number" name="year_enrolled" value="<?php echo $student['year_enrolled']; ?>">
            <input type="date" name="birthday" value="<?php echo $student['birthday']; ?>">
            <button type="submit">Update Student</button>
        </form>
        <a href="read.php">Cancel</a>
    </div>
</body>
</html>