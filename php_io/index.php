<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="index2.php" method="get"> 
        <h1>Enrollment Form</h1>
        <hr>
        <label for="fname">Student Name:</label>
        <input type="text" name="fname" id="fname" required>
        <br>
        <label for="address">Living Address:</label>
        <input type="text" name="address" id="address" required>
        <br>
        <button type="submit" name="btn_submit">Submit</button>
    </form>
</body>
</html>
