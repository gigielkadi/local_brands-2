<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            background-color: rgba(249, 249, 249, 0.9);
            margin: 0;
            padding: 0;
            background-image: url('/Users/seifkhaled/Downloads/IMG_9430.JPG');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 100vh;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background: #fff;
        }

        h1 {
            font-family: 'Montserrat', Helvetica, Arial, sans-serif;
            font-size: 3em;
            text-align: center;
            margin: 20px 0;
        }

        /* Additional styles for the sign-up page */
        .signup-container {
            width: 300px;
            margin: 10px auto;
            padding: 40px;
            background: rgb(255, 255, 255);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgb(250, 250, 250);
        }

        .signup-container h2 {
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

        .signup-button {
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .signup-button:hover {
            background-color: #444;
        }

        .signup-container p {
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
<nav>
    <h1>Urban Vogue</h1>
</nav>
<div id="signupbox">
    <div class="signup-container">
        <h2>Create Your Account</h2>

        <!-- Sign-Up Form -->
        <form action="<?php htmlspecialchars( $_SERVER["PHP_SELF"])?>" method="POST">
            <!-- First Name Input -->
            <div class="form-group">
                <label for="Fname">First Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

          

            <!-- Email Input -->
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <!-- Password Input -->
            <div class="form-group">
                <label for="pass">Password:</label>
                <input type="password" id="pass" name="pass" required>
            </div>

            <!-- Confirm Password Input -->
            <div class="form-group">
                <label for="Rpass">Confirm Password:</label>
                <input type="password" id="Rpass" name="Rpass" required>
            </div>

            <!-- Sign-Up Button -->
            <button type="submit" class="signup-button" name="submit">Sign Up</button>
        </form>

        <!-- Login Link -->
        <p>Already have an account? <a href="login.php">Log in</a></p>
    </div>
</div>

<?php
include('./includes/connection.php');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}





if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $Rpass = $_POST["Rpass"];

    $hash = password_hash($pass, PASSWORD_DEFAULT);
    $errors = array();

    if (empty($name) ||  empty($email) || empty($pass) || empty($Rpass)) {
        array_push($errors, "Please fill all the fields");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Invalid email");
    }

    if (strlen($pass) < 8) {
        array_push($errors, "Password must be at least 8 characters");
    }

    if ($pass != $Rpass) {
        array_push($errors, "Passwords don't match");
    }

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $row_count = mysqli_num_rows($result);
    if ($row_count > 0) {
        array_push($errors, "Email already exists");
    }

    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    } else {
        $sql = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$hash')";
        $result = mysqli_query($conn, $sql);
        
        if (!$result) {
            echo "Error: " . mysqli_error($conn);
        }
        

        if ($result) {
            echo "<script>alert('you have registered succesfully')</script>";
        } else {
            echo "<script>alert('error happened while registering ')</script>";
        }
    }
}
?>
</body>
</html>
