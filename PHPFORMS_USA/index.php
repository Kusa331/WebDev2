<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="get"> 
       <label for="fname">Student Name:</label>
        <input type="text" name="fname" id="fname" placeholder ="First name">
        <input type="text" name="lname" id="lname" placeholder ="Last name">
        <button type="submit" name="btn_submit">Submit</button>
    </form>


 <?php

  if (isset($_GET["btn_submit"])) {
  $fname = $_GET["fname"];  
  $lname = $_GET["lname"];

  echo "My name is $fname $lname";
  
}


 ?>
</body>
</html>