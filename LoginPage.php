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
            margin-bottom: 20px;
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
            margin-top: 0px;
            margin-bottom: 20px;    
            background-color:#75d6c8;
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
            padding: 1em 0;
            width: 100%;
        }
    </style>
</head>
<body>
<header>
    <h1>Login Here</h1>
</header>
 
<div class="navbar">
        <a href="index.html">Home</a>
        <a href="shop.html">Shop</a>
        <a href="Contactus.html">Contact Us</a>
        <a href="services.html">Our Services</a>
        <a href="Registration.html">Register</a>
        <a href="LoginPage.html">Log In</a>
        <a href="cart.html">Cart<span class="cart-count"></a>
    </div>

<div class="container">
    <fieldset>
        <form id="loginForm" action="LoginPage.php" method="post" onsubmit="return validateLoginForm()">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required placeholder="Enter your Username">
            <span id="usernameError" style="color: red; display: none;">Username is required.</span>

            <label for="password">Password:</label>
            <div style="position: relative;">
                <input type="password" id="pass" name="password" required placeholder="Enter Password">
                <button type="button" id="show-pass">Show</button>
            </div>
            <span id="passwordError" style="color: red; display: none;">Password is required.</span> 
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <label for="remember_me">Remember Me:</label>
                <input type="checkbox" id="remember_me" name="remember_me">
            </div>

            <button type="submit">Login</button>
        </form>
        <br>
    </fieldset>

    <p>Don't have an account? <a href="Registration.php">Register here</a></p>
</div>

<footer>
    <p>&copy; 2024 Environmental Tips</p>
</footer>

<script>
    var pass = document.getElementById('pass');
    var showPass = document.getElementById('show-pass');

    showPass.addEventListener('click', function() {
        if (pass.type === 'password') {
            pass.type = 'text';
            showPass.textContent = 'Hide';
        } else {
            pass.type = 'password';
            showPass.textContent = 'Show';
        }
    });
    function togglePasswordVisibility() {
        var pass = document.getElementById('pass');
        var showPass = document.getElementById('show-pass');
        if (pass.type === 'password') {
            pass.type = 'text';
            showPass.textContent = 'Hide';
        } else {
            pass.type = 'password';
            showPass.textContent = 'Show';
        }
    }

    function validateLoginForm() {
        var username = document.getElementById('username').value;
        var password = document.getElementById('pass').value;
        var usernameError = document.getElementById('usernameError');
        var passwordError = document.getElementById('passwordError');
        var isValid = true;

        // Reset error messages
        usernameError.style.display = 'none';
        passwordError.style.display = 'none';

        // Validate username
        if (username.trim() === '') {
            usernameError.style.display = 'block';
            isValid = false;
        }

        // Validate password
        if (password.trim() === '') {
            passwordError.style.display = 'block';
            isValid = false;
        }

        return isValid;
    }
</script>

<script>
    let cart2 = [];
    const cartCount = document.querySelector('.cart-count');
    function addToCart(prodDetails) {
        if (!cart2.find(e => e.name === prodDetails.name)) {
            cart2.push(prodDetails);
            cartCount.textContent = (${cart2.length});
            console.log(cart2);
            localStorage.setItem('cart2', JSON.stringify(cart2));
        }
    }
    window.onload = function () {
        cart2 = [...JSON.parse(localStorage.getItem('cart2'))];
        cartCount.textContent = (${cart2.length});
    }
    
</script>
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
    </script>
</body>
</html>