<?php
include('./includes/connection.php');

function getproducts(){
    global $conn;
    

    $select_query="select * from `products`";
    $result_query=mysqli_query($conn,$select_query);
    echo "<div class='products'>";

    while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_image1 = $row['product_image1'];
        $product_price = $row['product_price'];
    
        echo "<div class='product-card' id='product$product_id'>
                <img class='product-image' src='./admin_area/images/$product_image1' alt='Product $product_id'>
                <div class='product-title'>$product_title</div>
                <div class='product-price'>$product_price</div>
                <button class='add-to-cart-button' onclick=\"addToCart('$product_title', $product_price)\">Add to Cart</button>
              </div>";
    }
    
    echo "</div>";
    
}
?>
<style>
    .products-container {
        display: flex;
        justify-content: space-around; /* Adjust as needed: space-around, space-between, etc. */
        flex-wrap: wrap; /* Allows items to wrap to the next line */
        margin: 20px; /* Optional margin for spacing */
    }

    .product-card {
        text-align: center;
        margin: 10px; /* Optional margin for spacing between cards */
    }

    .product-image {
        width: 100px; /* Adjust image width as needed */
        height: 100px; /* Adjust image height as needed */
        object-fit: cover; /* Maintain aspect ratio while covering the container */
    }
</style>

<?php


function get_categories(){
    global $conn;
    $select_categories = "select * from `categories`";
    $result_categories = mysqli_query($conn, $select_categories);

    echo '<div class="products-container">';

    while ($row_data = mysqli_fetch_assoc($result_categories)) {
        $category_title = $row_data['category_title'];
        $category_id = $row_data['category_id'];

        echo "<div class='product-card' id='product$category_id'>
                <img class='product-image' src='./admin_area/images/3590502501_2_15_8.jpg' alt='category $category_id'>
                <div class='product-title'>$category_title</div>
              </div>";
    }

    echo '</div>';
}
?>
  <style>

body {
font-family: "Times New Roman", Times, serif;
margin: 0;
padding: 0;
background-color: rgba(0, 0, 0, 0.9); 
background-image: url('/Users/gigielkadi/Desktop/web programming/shirts/newesponsive_1.jpg');
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
justify-content: flex-start; /* Adjusted from space-between */
margin: 20px;
background-color: rgba(0, 0, 0, 0.5);
padding: 20px;
color: #fff;
}

.product-card {
border-radius: 8px;
margin: 10px; /* Consistent margin */
width: calc(33.33% - 20px); /* Consistent width */
box-sizing: border-box;
text-align: center;
background-color: rgba(18, 13, 13, 0.8);
box-shadow: 1px 5px 9px rgba(0, 0, 0, 0.3);
}

/* Responsive adjustments */
@media (max-width: 768px) {
.product-card {
width: calc(50% - 20px); /* 2 cards per row */
}
}

@media (max-width: 480px) {
.product-card {
width: calc(100% - 20px); /* 1 card per row */
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
<?php
include('./includes/connection.php');
function search_product(){
  global $conn;
    
  // condition to cehck if set or not

  if(isset($_GET['search_data_product'])){
      

  $search_data_value=$_GET['search_data'];
  
  
  $search_query="select * from `products` where product_keyword like '%$search_data_value%'";
  $result_query=mysqli_query($conn,$search_query);

  $number_forma_rows=mysqli_num_rows($result_query);

  if($number_forma_rows==0){
      echo"<h2 class='text-center text-danger'>no items like that</h2>";

  }

}
$counter = 0; // Initialize the counter

while ($row = mysqli_fetch_assoc($result_tops)) {
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
    echo "<img class='product-image' src='./admin_area/images/tops_women/$product_image1' alt='Product $product_id'>";
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


