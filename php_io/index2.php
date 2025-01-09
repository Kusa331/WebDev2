<?php

if (isset($_GET['btn_submit'])) {
   
    $name = htmlspecialchars($_GET['fname']);
    $address = htmlspecialchars($_GET['address']);
} else {
   
    header("Location: index2.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Information</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Submitted Information</h1>
    <hr>
    <p><strong>Name:</strong> <?php echo $name; ?></p>
    <p><strong>Address:</strong> <?php echo $address; ?></p>
    <a href="index.php">Go Back</a> 
</body>
</html>
