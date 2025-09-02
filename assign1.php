<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
</head>
<body>
    <h1>Welcome to the Index Page</h1>
    <p>This is the index page. You are now logged in.</p>

    <script>
        // Retrieve login details from local storage
        var username = localStorage.getItem("username");
        var password = localStorage.getItem("password");

        // Display login details
        if (username && password) {
            document.write("<p>You are logged in as: " + username + "</p>");
        } else {
            document.write("<p>No login details found.</p>");
        }
    </script>
</body>
</html>
