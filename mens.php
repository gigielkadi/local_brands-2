<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>mens Wear</title>
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


<script>
    // Function to handle search
    function performSearch() {
        // Get the search query
        var searchQuery = document.getElementById("searchInput").value;

        // Redirect to the search.php page with the search query
        window.location.href = "search_product2.php?q=" + encodeURIComponent(searchQuery);
    }

    // Attach the performSearch function to the search button click event
    document.getElementById("searchButton").addEventListener("click", performSearch);
</script>

  <!-- Product 1 -->
  <div class="products">
    <div class="product-card" id="product1">
      <img class="product-image" src="admin_area/images/2b8b0017cc0a523f4ccc4f84150941c5-7994019800_2_1_0.jpg" alt="Product 1">
      <div class="product-title">shirts</div>
      <button class="view-button" id="viewTopsButton" name="viewTopsButton"><a href="mensdisplay.php?shirts">view</a></button>
    </div>
    <div class="product-card" id="product4">
      <img class="product-image" src="admin_area/images/3676500409_2_1_8.jpg" alt="Product 4">
      <div class="product-title">bottoms</div>
      <button class="view-button" id="viewDenimButton" name="viewDenimButton"><a href="mensdisplay.php?bottoms">view</a></button>

    </div>
    <div class="product-card" id="product5">
      <video autoplay muted loop >
          <source src="admin_area/images/7688525406_6_1_1.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      <div class="product-title">Hoodies</div>
      <button class="view-button" id="viewHoodiesButton" name="viewHoodiesButton"><a href="mensdisplay.php?hoodies">view</a></button>
    </div>
   
   
</div>
<div id="cartModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeCartModal()">&times;</span>
    <h2>Shopping Cart</h2>
    <div id="cartItems"></div>
    <div class="cart-total" id="cartTotal">Total: $0.00</div>
    <button class="checkout-button" onclick="checkout()">Checkout</button>
    <button class="clear-cart-button" onclick="clearCart()">Clear Cart</button>
  </div>
</div>




</body>
</html>

