<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "book_db";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM books WHERE id=$id");
$book = $result->fetch_assoc(); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $conn->query("UPDATE books SET title='$title', author='$author' WHERE id=$id");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Edit Book</h1>
    <form method="POST">
        <label for="title">Title:</label>
        <input type="text" name="title" value="<?php echo $book['title']; ?>" required>
        <label for="author">Author:</label>
        <input type="text" name="author" value="<?php echo $book['author']; ?>" required>
        <button type="submit">Update Book</button>
    </form>
    <a href="index.php">Back to Book List</a>
</body>
</html>

<?php $conn->close(); ?>