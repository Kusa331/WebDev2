<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
$conn = new mysqli('localhost', 'root', '', 'sleek_crud');

// Add record
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("INSERT INTO records (name, email) VALUES ('$name', '$email')");
}

// Delete record
if (isset($_GET['delete']) && $_SESSION['role'] == 'admin') {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM records WHERE id=$id");
}

$records = $conn->query("SELECT * FROM records");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            max-width: 1000px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1, h3 {
            text-align: center;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"], input[type="email"] {
            width: calc(50% - 10px);
            padding: 10px;
            margin: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }
        table th {
            background-color: #f0f0f0;
        }
        .logout {
            display: inline-block;
            float: right;
            padding: 10px;
            color: white;
            background: #e74c3c;
            text-decoration: none;
            border-radius: 4px;
        }
        .delete {
            color: red;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome, <?= $_SESSION['username'] ?>!</h1>
        <h3>Role: <?= $_SESSION['role'] ?></h3>
        <a href="logout.php" class="logout">Logout</a>

        <?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'user') { ?>
        <form method="POST">
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <button type="submit">Add Record</button>
        </form>
        <?php } ?>

        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
            <?php while ($row = $records->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td>
                        <?php if ($_SESSION['role'] == 'admin') { ?>
                            <a href="dashboard.php?delete=<?= $row['id'] ?>" class="delete">Delete</a>
                        <?php } else { ?>
                            View Only
                        <?php } ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
