<?php








if(isset($_GET('btn_submit'))){
    $name = $_GET ['fname'];
    $address = $_GET ['address'];
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action=""method="get">
        <h1>Enrollment Form </h1>
        <hr>
        <label for ="fname">Student Name:</label>
        <input type="text" name="fname" id="fname">
        <br>
        <label for ="lname">Living Address:</label>
        <input type="text" name="address" id="address">
        <br>
        <button type="submit" name="btn_submit">Submit</button>
    </form>
    
    
    
</body>
</html>