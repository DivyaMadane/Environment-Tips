<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>
<body>
    <h1>Forgot Password</h1>
    <form action="forgot_password.php" method="post">
        <label for="email">Enter your email:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Reset Password</button>
    </form>
</body>
</html>
<?php
    // Database connection
    $servername = "localhost";
    $user_name = "Divya";
    $password = "Admin@12345678910";
    $dbname = "tipssharedata";
    $conn = new mysqli($servername, $user_name, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];

        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $newPassword = generateRandomPassword();
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            $updateSql = "UPDATE users SET password = '$hashedPassword' WHERE email = '$email'";
            if ($conn->query($updateSql) === TRUE) {
                $subject = "Password Reset";
                $message = "Your new password is: $newPassword";
                mail($email, $subject, $message);
                echo "Your password has been reset. Please check your email for the new password.";
            } else {
                echo "Error updating password: " . $conn->error;
            }
        } else {
            echo "Email not found. Please enter a valid email address.";
        }
    }

    // Function to generate a random password
    function generateRandomPassword($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $password = '';
        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $password;
    }

    $conn->close();
?>





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