<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form action="edit.php?id=<?php echo $row['id']; ?>" method="POST">
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>

<?php
$conn->close();
?>
<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form action="edit.php?id=<?php echo $row['id']; ?>" method="POST">
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>

<?php
$conn->close();
?>
