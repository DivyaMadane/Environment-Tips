<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
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
        footer {
            background-color: #4bf00ad8;
            color: white;
            text-align: center;
            padding: 0.5em;
            width: 100%;
            margin-top: auto;
        }
        .cart-products {
            margin: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
        }
        .cart-products h2 {
            margin-bottom: 5px;
            font-size: 1.2em;
        }
        .cart-products h5 {
            margin: 0;
        }
        .cart-products button {
            background-color: #ff0000;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
            margin-top: 5px;
        }
        .cart-products button:hover {
            background-color: #cc0000;
        }
        .cart-price {
            margin: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
        }
        .cart-price h2 {
            margin-bottom: 5px;
            font-size: 1.2em;
        }
        .cart-price h5 {
            margin: 0;
        }
    </style>
</head>

<body>
<header>
    <h1 style="font-size: 2.5em; margin-bottom: 0; letter-spacing: 1px;">Shopping Cart</h1>
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
<h2 class="cart-products">Cart Products From Local Storage</h2>
<div class="cart-products"></div>
<div class="cart-price"></div>

<script>
    let cart2 = [];
    const cartCount = document.querySelector('.cart-count');
    const cartProducts = document.querySelector('.cart-products');
    const cartPrice = document.querySelector('.cart-price');

    function renderCart() {
        cartProducts.innerHTML = '';
        cartPrice.innerHTML = '';

        let totalPrice = 0;

        cart2.forEach((product, index) => {
            const productDiv = document.createElement('div');
            productDiv.classList.add('cart-products');
            const productName = document.createElement('h2');
            productName.textContent = product.name;
            const productPrice = document.createElement('h5');
            productPrice.textContent = 'Price = ' + product.price;
            const deleteButton = document.createElement('button');
            deleteButton.textContent = 'Delete';
            deleteButton.addEventListener('click', () => {
                deleteProduct(index);
            });
            productDiv.appendChild(productName);
            productDiv.appendChild(productPrice);
            productDiv.appendChild(deleteButton);
            cartProducts.appendChild(productDiv);

            totalPrice += product.price;
        });

        const priceDetailsDiv = document.createElement('div');
        priceDetailsDiv.classList.add('cart-price');
        const priceDetailsTitle = document.createElement('h2');
        priceDetailsTitle.textContent = 'Price Details:';
        const totalAmount = document.createElement('h5');
        totalAmount.textContent = 'Total Cart Amount: ' + totalPrice;
        priceDetailsDiv.appendChild(priceDetailsTitle);
        priceDetailsDiv.appendChild(totalAmount);
        cartPrice.appendChild(priceDetailsDiv);

        cartCount.textContent = `(${cart2.length})`;
    }

    function deleteProduct(index) {
        cart2.splice(index, 1);
        localStorage.setItem('cart2', JSON.stringify(cart2));
        renderCart();
    }

    window.onload = function () {
        cart2 = JSON.parse(localStorage.getItem('cart2')) || [];
        renderCart();
    }
</script>
<footer>
    <p>&copy; 2024 Environmental Tips</p>
</footer>
</body>

</html>
