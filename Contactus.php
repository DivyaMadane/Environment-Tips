<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
       

        header {
            background-color: #32f10c;
            color:  rgb(167, 10, 10);
            text-align: center;
            padding: 1em;
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

        .container {
            max-width: 800px;
            margin: 0;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display:contents;
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

        iframe {
            width: 100%;
            height: 300px;
            border: none;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            color: #690a0a;
            font-weight: bold;
            font-size: 1em;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 15px;
            color: #333;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            background-color: #32f10c;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #28a90a;
        }
        .fa {  
        padding: 10px;  
        text-align: center;  
        margin: 5px 2px;  
        font-size: 10px;  
        width: 25px;  
        }  
        .fa-facebook {  
        background: #3B5998;  
        color: white;  
        }  
        .fa-instagram {  
        background: pink;  
        color: white;  
        }  
        .fa-twitter {  
        background: #55ACEE;  
        color: white;  
        }  
        footer {
            background-color: #4bf00ad8;
            color: white;
            text-align: center;
            padding: 1em;
            margin-top: 20px;
            border-radius: 5px;
        }

    </style>
</head>
<body>
<header>
        <h1 style="font-size: 2.5em; margin-bottom: 0; letter-spacing: 1px;">Contact Us</h1>
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
<fieldset>
    <div class="container">
        <h2>Contact Information</h2>
        <p>Email: Divya@gmail.com</p>
        <p>Phone: +91 1234567890</p>
        <p>Address: MIT ADT University, Loni Kalbhor, Pune-412201</p>

        <h2>Our Location</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7567.5715810612755!2d74.01940908838588!3d18.493359655223177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2e8015a3da997%3A0x6ea28cf1924e2860!2sMIT%20ADT%20UNIVERSITY%2C%20Loni%20Kalbhor%2C%20Maharashtra%20412201!5e0!3m2!1sen!2sin!4v1713252955607!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


        <h2>Connect with Us</h2>
        <p>Follow us on social media:</p>
        <a href="https://www.facebook.com/example" class="fa fa-facebook" target="_blank" rel="noopener noreferrer">Facebook</a>
        <a href="https://twitter.com/example" class="fa fa-twitter" target="_blank" rel="noopener noreferrer">Twitter</a>
        <a href="https://instagram.com/example" class="fa fa-instagram" target="_blank" rel="noopener noreferrer">Instagram</a>
        <h2>Contact Form</h2>
        <form action="process_contact_form.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Submit</button>
        </form>
        </fieldset>
    </div>
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
