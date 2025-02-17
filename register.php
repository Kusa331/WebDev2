<?php
require "conn.php";

function createUser($first_name, $last_name, $username, $password, $confirm_password){
    $conn = connection();
    $password = password_hash ($password,PASSWORD_DEFAULT)
    $sql = "
    INSERT INTO" users_t ('first_name','last_name','password')
    VALUES
    ('$first_name,',' $last_name,',' $username',' $password');

    if($conn -> query($sql)){
        header ("location:login.php");
        exit;
    
    }else{
        die ("Earror signing up" . $conn -> error);
    }
    }

if(isset($POST["btn_signup"])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $comfirmpassword = $_POST['confirm_password'];

    //Check if password and confirm password is the same
    if($password == $confirm_password){
        createUser(
            $first_name,
            $last_name,
            $username,
            $password,
            $confirm_password
        ); // ignore error
    }else{
        echo '<p class="alert alert-danger">
        Password and Confirm Password do not match
        </p>';
    }


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div style="height: 100vh;">
        <div class="row h-100 m-0">
            <div class="card w-25 mx-auto my-auto p-0">
            <div class="card-header text-success text-center">
            <h1 class="card-title h3 mb-0">Create Your Account</h1> 
        </div>
        <div class="card-body">
            <form action="" method="post">  
                <div class="mb-3">
                    <label for="first-name" class="form-label small fw-bold">First Name</label>
                    <input type="text" name="first_name" id="first-name" maxlength="50" class="form-control" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="first-name" class="form-label small fw-bold">Last Name</label>
                    <input type="text" name="last_name" id="last-name" maxlength="50" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label small fw-bold">Username</label>
                    <input type="text" name="username" id="username" maxlength="15" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label small fw-bold">Password</label>
                    <input type="password" name="password" id="password" maxlength="50" class="form-control" required>
                </div>
                <div class="mb-5">
                    <label for="confirm-password" class="form-label small fw-bold">Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm-password" maxlength="50" class="form-control" required>
                </div>
                <button type="submit" name="btn_signup" class="btn btn-success w-100">Sign Up</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>