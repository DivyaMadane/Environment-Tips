<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Environment Tips Menu</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f5f3f3;
            color: #333333;
        }

        header {
            background-color: #32f10c;
            color:  rgb(167, 10, 10);
            text-align: center;
            padding: 1em;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #32f10c;
            border-bottom: 2px solid #32f10c;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        .tip-category {
            margin-bottom: 20px;
        }

        .tip-category h3 {
            color: #32f10c;
            margin-bottom: 10px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        footer {
            background-color: #4bf00ad8;
            color: white;
            text-align: center;
            padding: 1em;
            margin-top: 20px;
            border-radius: 5px;
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
    </style>
</head>

<body>
<header>
        <h1 style="font-size: 2.5em; margin-bottom: 0; letter-spacing: 2px;">Environment Tips Menu</h1>
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

    <div class="container">
        <div class="tip-category">
            <h2>Sustainable Living</h2>
            <p>Explore tips for adopting a sustainable lifestyle.</p>
            <ul>
                <li>Reduce, Reuse, Recycle</li>
                <li>Conserve Water</li>
                <li>Switch to Renewable Energy</li>
                <!-- Add more tips as needed -->
            </ul>
        </div>

        <div class="tip-category">
            <h2>Green Energy</h2>
            <p>Discover ways to incorporate green energy practices.</p>
            <ul>
                <li>Solar Power at Home</li>
                <li>Energy-Efficient Appliances</li>
                <li>Community Renewable Projects</li>
                <!-- Add more tips as needed -->
            </ul>
        </div>

        <div class="tip-category">
            <h2>Environmental Conservation</h2>
            <p>Learn about efforts to conserve and protect the environment.</p>
            <ul>
                <li>Wildlife Conservation</li>
                <li>Preserving Natural Habitats</li>
                <li>Supporting Conservation Organizations</li>
                <!-- Add more tips as needed -->
            </ul>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Environmental Tips</p>
    </footer>
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
</body>

</html>
