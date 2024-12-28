<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Women's Wear</title>
  <link rel="stylesheet" href="style.css">
  <style>

    body {
  font-family: "Times New Roman", Times, serif;
  margin: 0;
  padding: 0;
  background-color: rgba(0, 0, 0, 0.9); 
  background-image: url('file:///Users/gigielkadi/downloads/womanwallp.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  position: relative;
  height: 100vh;
    }


    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px;
      background: #fff;
    }

    nav button, .login-button, .signup-button {
      background-color: #fff; /* Ensure background is white */
      color: #333; /* Text color is dark */
      border: 2px solid transparent;
      padding: 10px 20px;
      margin: 0 5px;
      cursor: pointer;
      font-weight: bold;
      transition: all 0.3s ease;
      font-size: 16px;
    }

    nav button a, .login-button a, .signup-button a {
      text-decoration: none;
      color: #333;
      display: block;
    }

      /* Hover effect for buttons */
      nav button:hover, .login-button:hover, .signup-button:hover {
      background-color: #333; 
      color: #fff; 
      border-radius: 10px; 
      transform: translateY(-5px); 
      box-shadow: 0 10px 20px rgba(0,0,0,0.2); 
    }
    
    nav button a:hover, .login-button a:hover, .signup-button a:hover {
      color: #fff; 
    }

h1 {
    font-family: 'Montserrat', Helvetica, Arial, sans-serif;
      font-size: 3em; 
      text-align: center;
      margin: 20px 0;
}
 h1 a {
      text-decoration: none; 
      color: black; 
    }

   

    .clothes {
      display: flex;
      margin-right: auto;
    }

    .clothes-button {
      background: none;
      border: none;
      padding: 10px;
      margin: 0 5px;
      color: #333;
      cursor: pointer;
      font-weight: bold;
    }

    .products {
      display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px;
  background-color: rgba(0, 0, 0, 0.5);
  padding: 20px;
  color: #fff;
}

.product-card {
  border-radius: 8px;
  margin: 10px;
  width: calc(33% - 20px); /* Adjusted width */
  box-sizing: border-box;
  text-align: center;
  background-color: rgba(18, 13, 13, 0.8);
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  
}

@media (max-width: 768px) {
  .product-card {
    width: 100%;
  }
}

@media (max-width: 480px) {
  .product-card {
    width: 100%; /* 1 card per row on small screens */
  }
}

.product-image {
  width: 100%;
  height: 65%; 
  object-fit: cover;
  max-width: 117%;
  height: 70%;
  border-radius: 1px;
  display: flex;
 
}
.product-card:hover .product-image {
      transform: scale(1.03);
    }
    .product-card:hover {
      transform: translateY(-3px);
    }
    
      .product-card video {
    width: 100%;
  height: 70%; 
  object-fit: cover;
  max-width: 110%;
  
  border-radius: 1px;
  display: flex;
}
    


.product-title {
  font-size: 16px;
  margin: 10px 0;
  color: #f3ecec;
}


.view-button {
  background-color: black;
  color: #fff;
  border: none;
  padding: 8px 12px;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.view-button:hover {
  background-color: #0056b3;
}

.add-to-cart-button {
      background: linear-gradient(135deg, #000000, #a9a9a9);
      color: white;
      border: none;
      padding: 0.5rem 1.2rem;
      border-radius: 20px;
      cursor: pointer;
      transition: background 0.3s ease, transform 0.3s ease;
    }

    .add-to-cart-button:hover {
      background: linear-gradient(135deg, #333333, #cfcfcf);
      transform: translateY(-2px);
    }


    .cart-icon {
      display: inline-block;
      width: 24px;
      height: 24px;
      background-size: cover;
      cursor: pointer;
    }

    .cart-count {
      display: inline-block;
      background-color: #007BFF;
      color: #fff;
      border-radius: 10px;
      padding: 2px 6px;
      font-size: 0.75em;
      vertical-align: top;
      margin-left: 4px;
    }

    
    .cart-total {
      text-align: right;
      margin-top: 20px;
      font-size: 1.25em;
      font-weight: bold;
    }

    .checkout-button {
      background-color: #28a745;
      color: #fff;
      border: none;
      padding: 10px 15px;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
      margin-top: 10px;
      display: block; 
      width: 100%;
      text-align: center;
    }
    .shopping-cart {
      margin-top: 20px;
      text-align: center;
    }


    .shopping-cart {
      margin-top: 20px;
      text-align: center;
    }

     /* Modal styles */
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-content {
      background-color: #fefefe;
      margin: 15% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
    }

    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }

   
  </style>


</head>
<body>
<nav>
  <div>
    <button><a href="women.php">Women</a></button>
    <button><a href="mens.php">Men</a></button>
    
    <br>
  
      
    </div>
  </div>
  <div class="brand">
    <h1><a href="home.php">Urban Vogue</a></h1>
  </div>
  <div class="user-actions">
    <button class="login-button"><a href="login.php">login</a></button>
    <button class="signup-button"><a href="signup.php">Sign Up</a></button>
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="searchInput">
<button class="btn btn-outline-success" id="searchButton">Search</button>


    <!-- Shopping Cart Icon -->
    <span class="cart-icon" onclick="openCartModal()">&#128722;<span class="cart-count" id="cartCount">0</span></span>
  </div>
</nav>
<div id="cartModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeCartModal()">&times;</span>
            <h2>Your Shopping Cart</h2>
            <div id="cartItems"></div>
            <div class="cart-total" id="cartTotal">Total: $0.00</div>
            <button class="checkout-button" onclick="checkout()">Checkout</button>
        </div>
    </div>
 
    <script>
    // Initialize cartItems array
    var cartItems = [];

    // Function to open the cart modal
    function openCartModal() {
        updateCartUI();
        document.getElementById('cartModal').style.display = 'block';
    }

    // Function to close the cart modal
    function closeCartModal() {
        document.getElementById('cartModal').style.display = 'none';
    }

    // Function to add an item to the cart
    function addToCart(productTitle, productPrice) {
        var newItem = { title: productTitle, price: productPrice };
        cartItems.push(newItem);
        updateCartUI();
    }

    // Function to remove an item from the cart
    function removeFromCart(index) {
        cartItems.splice(index, 1);
        updateCartUI();
    }

    // Function to clear the cart
    function clearCart() {
        cartItems = [];
        updateCartUI();
    }

    // Function to update the cart UI
    function updateCartUI() {
        var cartItemsContainer = document.getElementById('cartItems');
        var cartTotalElement = document.getElementById('cartTotal');
        cartItemsContainer.innerHTML = '';

        var total = 0;
        for (var i = 0; i < cartItems.length; i++) {
            var item = cartItems[i];
            cartItemsContainer.innerHTML += `<div>${item.title} - $${item.price.toFixed(2)} <button onclick="removeFromCart(${i})">Remove</button></div>`;
            total += item.price;
        }

        cartTotalElement.textContent = `Total: $${total.toFixed(2)}`;
        document.getElementById('cartCount').textContent = cartItems.length;
    }

    // Function to simulate checkout (you can replace this with your actual checkout logic)
    function checkout() {
        alert('Checkout function called. Implement your checkout logic here.');
    }
</script> 


<script>
    // Function to handle search
    function performSearch() {
        // Get the search query
        var searchQuery = document.getElementById("searchInput").value;

        // Redirect to the search.php page with the search query
        window.location.href = "search_product.php?q=" + encodeURIComponent(searchQuery);
    }

    // Attach the performSearch function to the search button click event
    document.getElementById("searchButton").addEventListener("click", performSearch);
</script>






<?php
session_start();

include('./includes/connection.php');



if (isset($_GET['tops'])) {
    // Code for displaying Tops products
    global $conn;
    $select_tops = "SELECT * FROM `products` WHERE category_id = 25";
    $result_tops = mysqli_query($conn, $select_tops);

    displayProducts($result_tops);

} elseif (isset($_GET['denim'])) {
    // Code for displaying denim products
    global $conn;
    $select_bottoms = "SELECT * FROM `products` WHERE category_id = 26";
    $result_bottoms = mysqli_query($conn, $select_bottoms);

    displayProducts($result_bottoms);

} elseif (isset($_GET['hoodies'])) {
    // Code for displaying hoodies products
    global $conn;
    $select_hoodies = "SELECT * FROM `products` WHERE category_id = 27";
    $result_hoodies = mysqli_query($conn, $select_hoodies);

    displayProducts($result_hoodies);

} else {
    // Default behavior if no specific button is clicked
    echo "Invalid request";
}

// Function to display products
function displayProducts($result) {
    $counter = 0; // Initialize the counter

    while ($row = mysqli_fetch_assoc($result)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_image1 = $row['product_image1'];
        $product_price = $row['product_price'];
        $category_id = $row['category_id'];
        $section_id = $row['section_id'];

        // Check if it's the start of a new row
        if ($counter % 3 == 0) {
            echo "<div class='products'>"; // Opening the products container
        }

        echo "<div class='product-card' id='product$product_id'>"; // Opening the product card
        echo "<img class='product-image' src='./admin_area/images/$product_image1' alt='Product $product_id'>";
        echo "<div class='product-title'>$product_title</div>";
        echo "<div class='product-title'>$product_description</div>";
        echo "<div class='product-price'>$product_price</div>";
        echo "<button class='add-to-cart-button' onclick='addToCart(\"$product_title\", $product_price)'>Add to Cart</button>";
        echo "</div>"; // Closing the product card

        // Check if it's the end of a row
        if ($counter % 3 == 2) {
            echo "</div>"; // Closing the row container
        }

        $counter++; // Increment the counter
    }

    // Check if the last row needs to be closed
    if ($counter % 3 != 0) {
        echo "</div>"; // Closing the last row container
    }
}
?>



