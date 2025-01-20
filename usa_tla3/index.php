<?php
include "conn.php";

function addUser($first_name, $last_name, $course, $year_enrolled, $birthday) {
  
    $conn = connection();


    $sql = "INSERT INTO students (
                first_name, 
                last_name, 
                course, 
                year_enrolled, 
                birthday
            ) VALUES (
                '$first_name', 
                '$last_name', 
                '$course', 
                $year_enrolled, 
                '$birthday'
            )";

   
    if ($conn->query($sql) === TRUE) {
        echo "New student added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

 
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Add New Student</h1>
    <form action="" method="post"> 
        <label for="fname">First Name:</label>
        <input type="text" name="fname" id="fname" placeholder="First name" required>
        
        <label for="lname">Last Name:</label>
        <input type="text" name="lname" id="lname" placeholder="Last name" required>
        
        <label for="course">Course:</label>
        <input type="text" name="course" id="course" placeholder="Course" required>
        
        <label for="year_enrolled">Year Enrolled:</label>
        <input type="number" name="year_enrolled" id="year_enrolled" placeholder="Year Enrolled" required>
        
        <label for="birthday">Birthday:</label>
        <input type="date" name="birthday" id="birthday" required>
        
        <button type="submit" name="btn_submit">Submit</button>
    </form>

    <?php
    if (isset($_POST["btn_submit"])) {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $course = $_POST["course"];
        $year_enrolled = $_POST["year_enrolled"];
        $birthday = $_POST["birthday"];

       
        addUser($fname, $lname, $course, $year_enrolled, $birthday);
    }
    ?>
</body>
</html>
