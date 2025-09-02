<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Environmental Products</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f5f3f3;
            color: #333333;
            justify-content:center;
        }

        header {
            background-color: #32f10c;
            color:  rgb(167, 10, 10);
            text-align: center;
            padding: 1em;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .product {
            margin: 20px;
            margin left:20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            text-align: center;
            overflow: hidden;
            position: relative;
            display: inline-block;
            transition: transform 0.3s ease-in-out;
            width: calc(33.33% - 40px); /* Adjust the width as needed */
            box-sizing: border-box;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .product:hover {
            transform: scale(1.05);
        }

        .product img {
            max-width: 100%;
            height: auto;
            border-radius: 10px 10px 0 0;
            margin-bottom: 10px;
        }

        .product h3 {
            color: #32f10c;
            margin-bottom: 10px;
            font-size: 1.5em;
        }

        .product p {
            margin-bottom: 10px;
            color: #555;
        }

        .price {
            color: #32f10c;
            font-weight: bold;
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .buy-btn {
            background-color: #32f10c;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .buy-btn:hover {
            background-color: #28a90a;
        }

        .product_cart {
            display: inline-block;
            margin-left:60px;
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
            padding: 1em;
            margin-top: 20px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <header>
        <h1 style="font-size: 2.5em; margin-bottom: 0; letter-spacing: 2px;">Environmental Products</h1>
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

    <div class="product_cart">
        <div class="container">
            <!-- Product 1 -->
            <div class="product">
                <img src="product1.jpg" alt="Product 1" width="200" height="200">
                <h3>Eco-Friendly Water Bottle</h3>
                <p>Stay hydrated with our reusable and eco-friendly water bottle made from sustainable materials.</p>
                <p class="price">Rs.70</p>
                <button class="buy-btn" onclick="addToCart({name:'Eco-Friendly Water Bottle',price:70})">Add to Cart</button>
            </div>

            <!-- Product 2 -->
            <div class="product">
                <img src="product5.jpg" alt="Product 5" width="200" height="200">
                <h3>Reusable Cotton Grocery Bags</h3>
                <p>Go green with our reusable cotton grocery bags. Durable and perfect for reducing single-use plastic.</p>
                <p class="price">Rs.30 (Set of 3)</p>
                <button class="buy-btn" onclick="addToCart({name:'Reusable Cotton Grocery Bags',price:30})">Add to Cart</button>
            </div>

            <!-- Product 3 -->
            <div class="product">
                <img src="product8.jpg" alt="Product 8" width="300" height="150">
                <h3>Sustainable Bamboo Cutlery Set</h3>
                <p>Ditch single-use plastic utensils with our sustainable bamboo cutlery set, perfect for on-the-go meals.</p>
                <p class="price">Rs.100 (Set of 12)</p>
                <button class="buy-btn" onclick="addToCart({name:'Sustainable Bamboo Cutlery Set',price:100})">Add to Cart</button>
            </div>

            <!-- Product 4 -->
            <div class="product">
                <img src="product4.jpg" alt="Product 4" width="200" height="200">
                <h3>Bamboo Fiber Towel Set</h3>
                <p>Wrap yourself in luxury with our bamboo fiber towel set. Soft, absorbent, and eco-friendly.</p>
                <p class="price">Rs.200</p>
                <button class="buy-btn" onclick="addToCart({name:'Bamboo Fiber Towel Set',price:200})">Add to Cart</button>
            </div>

            <!-- Product 5 -->
            <div class="product">
                <img src="product2.jpg" alt="Product 2" width="200" height="200">
                <h3>Recycled Notebook</h3>
                <p>Take notes responsibly with our recycled paper notebook, perfect for eco-conscious students and professionals.</p>
                <p class="price">Rs.50</p>
                <button class="buy-btn" onclick="addToCart({name:'Recycled Notebook',price:50})">Add to Cart</button>
            </div>

            <!-- Product 6 -->
            <div class="product">
                <img src="product6.jpg" alt="Product 6" width="200" height="200">
                <h3>Compostable Dinnerware Set</h3>
                <p>Host eco-friendly gatherings with our compostable dinnerware set made from plant-based materials.</p>
                <p class="price">Rs.50 (Pack of 25)</p>
                <button class="buy-btn" onclick="addToCart({name:'Compostable Dinnerware Set',price:50})">Add to Cart</button>
            </div>

            <!-- Product 7 -->
            <div class="product">
                <img src="product7.jpg" alt="Product 7" width="200" height="200">
                <h3>Reusable Silicone Food Storage Bags</h3>
                <p>Keep your food fresh and the environment happy with our reusable silicone food storage bags.</p>
                <p class="price">Rs.20 (Set of 4)</p>
                <button class="buy-btn" onclick="addToCart({name:'Reusable Silicone Food Storage Bags',price:20})">Add to Cart</button>
            </div>

            <!-- Product 8 -->
            <div class="product">
                <img src="product3.jpg" alt="Product 3" width="150" height="70">
                <h3>Solar-Powered LED Lamp</h3>
                <p>Light up your space with our solar-powered LED lamp, harnessing the power of the sun for sustainable lighting.</p>
                <p class="price">Rs.150</p>
                <button class="buy-btn" onclick="addToCart({name:'Solar-Powered LED Lamp',price:150})">Add to Cart</button>
            </div>
        </div>
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
            displayCartProducts(); // Call the function to display cart products
        }
    }

    function displayCartProducts() {
        const cartProducts = document.querySelector('.cart-products');
        cartProducts.innerHTML = ''; // Clear previous contents

        cart2.forEach((el, index) => {
            const p = document.createElement('div');
            p.classList.add('cart-product');
            const img = document.createElement('img');
            img.src = el.image; // Set the image source
            img.alt = el.name; // Set the alt text for accessibility
            img.width = 100; // Set the image width (adjust as needed)
            img.height = 100; // Set the image height (adjust as needed)
            p.appendChild(img);

            const details = document.createElement('div');
            const pn = document.createElement('h3');
            pn.textContent = el.name;
            const pp = document.createElement('p');
            pp.textContent = "Price = " + el.price;
            const deleteButton = document.createElement('button');
            deleteButton.textContent = 'Delete';
            deleteButton.addEventListener('click', () => {
                deleteProduct(index);
                p.remove();
            });

            details.appendChild(pn);
            details.appendChild(pp);
            details.appendChild(deleteButton);
            p.appendChild(details);
            cartProducts.appendChild(p);
        });
    }

    function deleteProduct(index) {
        cart2.splice(index, 1);
        localStorage.setItem('cart2', JSON.stringify(cart2));
        cartCount.textContent = `(${cart2.length})`;
        displayCartProducts(); // Update the displayed cart products after deletion
    }

    window.onload = function () {
        cart2 = [...JSON.parse(localStorage.getItem('cart2'))] || [];
        cartCount.textContent = `(${cart2.length})`;
        displayCartProducts(); // Display cart products on page load
    }
</script>


    <footer>
        <p>&copy; 2024 Environmental Tips</p>
    </footer>
</body>

</html>
