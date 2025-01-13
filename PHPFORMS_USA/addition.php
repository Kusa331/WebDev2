<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addition Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="get"> 
        <input type="number" name="number1" placeholder="Enter first number">
        <input type="number" name="number2" placeholder="Enter second number">
        <button type="submit" name="btn_submit">Submit</button>
    </form>

    <?php
    if (isset($_GET["btn_submit"])) {
        $number1 = $_GET["number1"];
        $number2 = $_GET["number2"];
        $sum = $number1 + $number2;
        echo "<p>$number1 + $number2 = $sum</p>";
    }
    ?>
</body>
</html>
