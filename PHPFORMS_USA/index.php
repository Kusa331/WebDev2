<?php
include "conn.php";

function addUser($first_name, $last_name, $salary, $department) {
    // Use the connection from conn.php
    $conn = connection();

    // Correct query syntax
    $sql = "INSERT INTO employees (
                first_name, 
                last_name, 
                salary, 
                department
            ) VALUES (
                '$first_name', 
                '$last_name', 
                $salary, 
                '$department'
            )";

    // Execute the query and check if successful
    if ($conn->query($sql) === TRUE) {
        echo "New user added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post"> 
        <label for="fname">First Name:</label>
        <input type="text" name="fname" id="fname" placeholder="First name" required>
        <label for="lname">Last Name:</label>
        <input type="text" name="lname" id="lname" placeholder="Last name" required>
        <label for="salary">Salary:</label>
        <input type="number" name="salary" id="salary" placeholder="Salary" required>
        <label for="department">Department:</label>
        <select name="department" id="department" required>
            <option disabled selected>Select Dept.</option>
            <option value="it">InfoTech</option>
            <option value="hr">Human Resource</option>
            <option value="ed">Education</option>
            <option value="crim">Criminology</option>
        </select>
        <button type="submit" name="btn_submit">Submit</button>
    </form>

    <?php
    if (isset($_POST["btn_submit"])) {
        
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $salary = $_POST["salary"];
        $department = $_POST["department"];

        addUser($fname, $lname, $salary, $department);

        
      
    }
    ?>
</body>
</html>
