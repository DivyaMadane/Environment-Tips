// Define products
const products = [
    { id: 1, name: "Eco-Friendly Water Bottle", price: 70 },
    { id: 2, name: "Reusable Cotton Grocery Bags (Set of 3)", price: 30 },
    { id: 3, name: "Sustainable Bamboo Cutlery Set (Set of 12)", price: 100 },
    { id: 4, name: "Bamboo Fiber Towel Set", price: 200 },
    { id: 5, name: "Recycled Notebook", price: 50 },
    { id: 6, name: "Compostable Dinnerware Set (Pack of 25)", price: 50 },
    { id: 7, name: "Reusable Silicone Food Storage Bags (Set of 4)", price: 20 },
    { id: 8, name: "Solar-Powered LED Lamp", price: 150 }
];

// Function to render products
function renderProducts() {
    const container = document.querySelector('.container');
    container.innerHTML = '';
    products.forEach(product => {
        const productHTML = `
        <div class="product">
            <h3>${product.name}</h3>
            <p class="price">Rs.${product.price}</p>
            <button class="buy-btn" onclick="addToCart(${product.id})">Add to Cart</button>
        </div>
        `;
        container.innerHTML += productHTML;
    });
}

// Function to add product to cart
function addToCart(productId) {
    const product = products.find(p => p.id === productId);
    if (product) {
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        cart.push(product);
        localStorage.setItem('cart', JSON.stringify(cart));
        updateCartCount();
    }
}

// Function to update cart count
function updateCartCount() {
    const cartCount = document.querySelector('.cart-count');
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cartCount.textContent = `(${cart.length})`;
}

// Function to render cart products
function renderCartProducts() {
    const cartProductsDiv = document.querySelector('.cart-products');
    cartProductsDiv.innerHTML = '';
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let totalPrice = 0;
    cart.forEach(product => {
        const productHTML = `
        <div class="cart-product">
            <h3>${product.name}</h3>
            <p class="price">Price: Rs.${product.price}</p>
            <button class="remove-btn" onclick="removeFromCart(${product.id})">Remove</button>
        </div>
        `;
        cartProductsDiv.innerHTML += productHTML;
        totalPrice += product.price;
    });
    const totalPriceHTML = `<p class="total-price">Total: Rs.${totalPrice}</p>`;
    cartProductsDiv.innerHTML += totalPriceHTML;
}

// Function to remove product from cart
function removeFromCart(productId) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart = cart.filter(product => product.id !== productId);
    localStorage.setItem('cart', JSON.stringify(cart));
    renderCartProducts();
    updateCartCount();
}

// Initialize
renderProducts();
updateCartCount();
if (window.location.pathname === '/cart.html') {
    renderCartProducts();
}
