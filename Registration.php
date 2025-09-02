<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
         header {
            background-color: #32f10c;
            color:  rgb(167, 10, 10);
            text-align: center;
            padding: 1em;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f5f3f3;
            color: #333333;
            display: flex;
            align: items 1px;;
            justify-content: center;
            flex-direction: column;
            min-height: 100vh;
        }
        form {
            max-width: 400px;
            width: 100%;
            text-align: center;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 0 auto; 
        }

        label {
            margin-bottom: 8px;
            color: #555;
            display: block;
            font-weight: bold;
        }
        .navbar {
            background-color:#75d6c8;
            margin-top: 20px;
            margin-bottom: 20px;
            padding: 0.5em;
            display: flex;
            justify-content: space-around;
        }

        .navbar a {
            text-decoration:solid;
            color: #520505ab;
            font-weight: bold;
        }
        .box{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            background-color: #32f10c;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #28a90a;
        }

        .password-toggle button {
            border: none;
            background: none;
            padding: 20;
            background:#f5f3f3;
            cursor: pointer;
            font-size: 14px;
            color: #777;
        }
        footer {
            background-color: #4bf00ad8;
            color: white;
            text-align: center;
            padding: 0.5em;
            width: 100%;
            margin-top: auto;
        }
    </style>
</head>
<body>
    <header>
        <h1 style="font-size: 2.5em; margin-bottom: 0; letter-spacing: 2px;">Registration Page</h1>
    </header>
    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="shop.php">Shop</a>
        <a href="Contactus.php">Contact Us</a>
        <a href="services.php">Our Services</a>
        <a href="Registration.php">Register</a>
        <a href="LoginPage.php">Log In</a>
        <a href="cart.php">Cart<span class="cart-count"></a>
    </div>


    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $username=test_input($_POST['username']);
        $email = test_input($_POST['email']);
        $pass = test_input($_POST['pass']);
        $country=test_input($_POST['country']);
        $gender = test_input($_POST['gender']);


        //Database Connection code
        $servername = "localhost";
        $user_name = "Divya";
        $password = "Admin@12345678910";
        $dbname = "tipsdata";

        // Create connection
        $conn = new mysqli($servername, $user_name, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " .$conn->connect_error);
        }
        echo "Connected successfully";
          
        // column names values (php variables)
        $sql = "INSERT INTO usr_tbl (username, email, pass, country, gender) VALUES ('".$username."', '".$email."', '".$pass."', '".$country."', '".$gender."')";
        

        if ($conn->query($sql) === TRUE) {
            echo "<br>New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
}

function test_input($data) {
    $data = trim($data); //removes blank spaces
    $data = stripslashes($data); //
    $data = htmlspecialchars($data); //
    return $data;
}
?>

<fieldset class="box">
    <form action="Registration.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required placeholder="Enter Your Name">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required placeholder="Enter your Email ID">

        <label for="password">Password:</label>
        <div class="password-toggle">
            <input type="password" id="password" name="pass" required placeholder="Enter Password" autocomplete="new-password">
            <button type="button" id="toggle-password">Show Password</button>
        </div>

        <label for="country">Country:</label>
        <input type="text" id="country" name="country" required placeholder="Country Name">

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="select" disabled selected>Select your gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>

        <label for="newsletter">Subscribe to Newsletter:</label>
        <input type="checkbox" id="newsletter" name="newsletter" value="subscribe">Yes, I want to receive the newsletter

        <br><br>
        <button type="submit">Register</button>
    </form>
</fieldset>

<script>
    //Username - onUserInput()
    var username = document.getElementById('username');
    var validUsername = false;
    username.addEventListener('input', onUsernameInput);

    function onUsernameInput(event) {
        validUsername = event.target.value.length > 5;
        username.style.borderColor = validUsername ? 'green': 'red';
    }

    //Password - onPassInput()
    var pass = document.getElementById('password');
    var validPass = false;
    pass.addEventListener('input', onPassInput);

    function onPassInput(event) {
        validPass = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/.test(event.target.value);
        pass.style.borderColor = validPass ? 'green': 'red';
    }

    // Toggle Password
    var passwordInput = document.getElementById('password');
    var toggleButton = document.getElementById('toggle-password');

    toggleButton.addEventListener('click', function() {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text'; // Show password
            toggleButton.textContent = 'Hide Password';
        } else {
            passwordInput.type = 'password'; // Hide password
            toggleButton.textContent = 'Show Password';
        }
    });
</script>
<script>
        let cart2 = [];
        const cartCount = document.querySelector('.cart-count');
        function addToCart(prodDetails) {
            if (!cart2.find(e => e.name === prodDetails.name)) {
                cart2.push(prodDetails);
                cartCount.textContent = `(${cart2.length})`;
                console.log(cart2);
                localStorage.setItem('cart2', JSON.stringify(cart2));
            }
        }
        window.onload = function () {
            cart2 = [...JSON.parse(localStorage.getItem('cart2'))];
            cartCount.textContent = `(${cart2.length})`;
        }
    </script>
<footer>
    <p>&copy; 2024 Environmental Tips</p>
</footer>
</body>
</html>
