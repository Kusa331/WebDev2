<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day Buttons</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <h1>Click a Button to Display the Day</h1>
    <form action="" method="post">
        <button type="submit" name="day" value="Monday">Monday</button>
        <button type="submit" name="day" value="Tuesday">Tuesday</button>
        <button type="submit" name="day" value="Wednesday">Wednesday</button>
        <button type="submit" name="day" value="Thursday">Thursday</button>
        <button type="submit" name="day" value="Friday">Friday</button>
    </form>

    <div id="display">
        <?php
        if (isset($_POST['day'])) {
            $selectedDay = htmlspecialchars($_POST['day']);
            echo "You selected: $selectedDay";
        }
        ?>
    </div>
</body>
</html>
