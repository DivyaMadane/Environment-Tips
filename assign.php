<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Display</title>
</head>
<body>
    <h1>Form Data Display</h1>
    
    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Display form data
        echo "<p>Username: $username</p>";
        echo "<p>Password: $password</p>";
    } else {
        // Display message if form is not submitted
        echo "<p>No form data submitted.</p>";
    }
    ?>
</body>
</html>
