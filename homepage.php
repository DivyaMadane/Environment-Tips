<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f5f3f3;
            color: #333333;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 400px;
        }

        header {
            background-color: #32f10c;
            color:  rgb(167, 10, 10);
            text-align: center;
            padding: 1em;
            margin-bottom: 10px;
            width:100%;
        }

        fieldset {
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            padding: 20px;
            align: canter;
            justify-content: center;
            box-sizing: border-box;
            margin-bottom: 20px;
        }
        .navbar {
            margin-top:0%;
            margin-bottom: 15px;
            background-color:#75d6c8;
            margin-top: 2.5px;
            padding: 0.5em;
            display: flex;
            justify-content: space-around;
            width: 100%;
        }

        .navbar a {
            text-decoration:solid;
            color: #520505ab;
            font-weight: bold;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            color: #555;
            display: block;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            background-color: #31aa01d8;
            color: #fff;
            padding: 8px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #31aa01;
        }

        footer {
            background-color: #4bf00a;
            color: white;
            text-align: center;
            padding: 0 0;
            width: 100%;
        }
    </style>
</head>
<body>
<header>
    <h1>Login Here</h1>
</header>
<div class="navbar">
    <a href="index.php">Home</a>
    <a href="Services.php">Shop</a>
    <a href="Contactus.php">Contact Us</a>
    <a href="Menu.php">Services</a>
    <a href="Registration.php">Register</a>
    <a href="LoginPage.php">Log In</a>
</div>

<div class="container">
    <fieldset>
        <form id="loginForm" action="login.php" method="post" onsubmit="return validateLoginForm()"> 
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required placeholder="Enter your Username">
            <span id="usernameError" style="color: red; display: none;">Username is required.</span>

            <label for="password">Password:</label>
            <input type="password" id="pass" name="password" required placeholder="Enter Password">
                
            <span id="passwordError" style="color: red; display: none;">Password is required.</span> 

            <div style="display: flex; justify-content: space-between; align-items: center;">
                <label for="remember_me">Remember Me:</label>
                <input type="checkbox" id="remember_me" name="remember_me">
            </div>

            <button type="submit">Login</button>
        </form>
        <br>
        <a href="restore_password.html">Forgot Password?</a>
        <p class="msg"></p>
    </fieldset>

    <p>Don't have an account? <a href="Registration.html">Register here</a></p>
</div>

<footer>
    <p>&copy; 2024 Environmental Tips</p>
</footer>
</body>
</html>










<?php
$servername = "localhost";
$username = "Divya";
$password = "Admin@12345678910";
$dbname = "tipssharedata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usr_tbl WHERE username='$username' AND pass='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful
        header("Location: index.php");
        exit();
    } else {
        echo "Invalid username or password";
    }
}
?> 