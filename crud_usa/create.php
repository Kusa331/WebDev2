<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "book_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $conn->query("INSERT INTO books (title, author) VALUES ('$title', '$author')");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Add New Book</h1>
    <form method="POST">
        <label for="title">Title:</label>
        <input type="text" name="title" required>
        <label for="author">Author:</label>
        <input type="text" name="author" required>
        <button type="submit">Add Book</button>
    </form>
    <a href="index.php">Back to Book List</a>
</body>
</html>

<?php $conn->close(); ?>