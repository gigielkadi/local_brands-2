<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Urban Vogue</title>
    <style>
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background: #fff;
        }

        #text {
            margin-left: auto;
            margin-right: auto;
        }

        h1 {
            font-family: 'Montserrat', Helvetica, Arial, sans-serif;
            font-size: 3em; 
            text-align: center;
            margin: 20px 0;
        }

        body {
            font-family: "Times New Roman", Times, serif;
            background-color: rgba(0, 0, 0, 0.9); 
            margin: 0;
            padding: 0;
            background-image: url('admin_area/images/IMG_9430.JPG');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 100vh;
        }

        .login-container {
            width: 300px;
            margin: 20px auto;
            padding: 110px;
            background: rgb(255, 255, 255);
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .login-container h2 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .login-button {
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-button:hover {
            background-color: #444;
        }

        .login-container p {
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
<?php
include('./includes/connection.php');

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $pass = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn,$sql);
    $user = mysqli_fetch_assoc($result);

    if($user){
        if(password_verify($pass,$user["password"])){
            session_start();
            $_SESSION["user"] = "yes";
            $allowedEmail = 'mohamedtahafouda@gmail.com';
            if($email==$allowedEmail){
                header("location: admin_area/index.php");
            }
            else{

           header ("location: home.php"); 
           die();
        }
        }
        else{
            echo "<script>alert('wrong password')</script>";
        }
    }
    else{
        echo "<script>alert('email not found')</script>";
    }


}
    

   /* // Specify the allowed email
    $allowedEmail = 'mohamedtahafouda@gmail.com';

    // Check if the entered email matches the allowed email
    if ($email == $allowedEmail) {
        $sql = "SELECT * FROM users WHERE email = '$allowedEmail'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);

        if ($user) {
            if (password_verify($pass, $user["password"])) {
                session_start();
                $_SESSION["user"] = "yes";
                header("location: admin_area/index.php");
                exit();
            } else {
                echo "<div class='alert alert-danger'>Wrong password</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Email not found</div>";
        }
    } else {
        header("location: home.php");
        
    }
}*/
?>

    <nav>
        <div id="text">
            <h1>Urban Vogue</h1>
        </div>
    </nav>
    <div class="login-container">
        <h2>Login to Your Account</h2>
        <form method="post" id="loginForm">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-button" name="login">Login</button>
        </form>
        <p>Don't have an account? <a href="signup.php">Sign up</a></p>
    </div>

   
</body>
</html>