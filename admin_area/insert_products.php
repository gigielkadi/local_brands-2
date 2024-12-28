<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include database connection file
include('../includes/connection.php');

// Check if the form is submitted
if (isset($_POST['insert_product'])) {
    // Debugging message
    echo "<script>alert('Form submitted!');</script>";

    // Retrieve form data
    $product_title = $_POST['product_title'];
    $product_description = $_POST['product_description'];
    $product_price = $_POST['product_price'];
    $product_category = $_POST['product_category'];
    $product_section = $_POST['product_section'];

    // Accessing image data
    $product_image1 = $_FILES['product_image1']['name'];
    $temp_image1 = $_FILES['product_image1']['tmp_name'];

    // Validate input data
    if (empty($product_title) || empty($product_description) || empty($product_price) ||
        empty($product_category) || empty($product_section) || empty($product_image1)) {
        echo "<script>alert('Please fill all fields');</script>";
        exit();
    }

    // Directory to upload image
    $upload_dir = "./images/";
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true); // Create directory if not exists
    }

    // Move uploaded image to the images folder
    if (!move_uploaded_file($temp_image1, $upload_dir . $product_image1)) {
        echo "<script>alert('Image upload failed: Check folder permissions or file path');</script>";
        exit();
    } else {
        echo "<script>alert('Image uploaded successfully');</script>";
    }

    // Insert query
    $insert_products = "INSERT INTO `products`
                        (product_title, product_description, product_image1, product_price, category_id, section_id)
                        VALUES ('$product_title', '$product_description', '$product_image1', '$product_price', '$product_category', '$product_section')";

    // Execute query and handle the result
    $result_query = mysqli_query($conn, $insert_products);

    if ($result_query) {
        echo "<script>alert('Product inserted successfully');</script>";
    } else {
        echo "<script>alert('Product insertion failed: " . mysqli_error($conn) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-light mt-3 w-50 m-auto">
    <div class="container">
        <h1 class="text-center">Insert Products</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <!-- Product Title -->
            <div class="form-outline mb-4">
                <label for="product_title" class="form-label">Product Title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter product title" required>
            </div>

            <!-- Product Description -->
            <div class="form-outline mb-4">
                <label for="product_description" class="form-label">Product Description</label>
                <input type="text" name="product_description" id="product_description" class="form-control" placeholder="Enter product description" required>
            </div>

            <!-- Product Price -->
            <div class="form-outline mb-4">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter product price" required>
            </div>

            <!-- Categories -->
            <div class="form-outline mb-4">
                <label for="product_category" class="form-label">Category</label>
                <select name="product_category" id="product_category" class="form-select" required>
                    <option value="">Select a category</option>
                    <?php
                    // Fetch categories dynamically from the database
                    $select_query = "SELECT * FROM `categories`";
                    $result_query = mysqli_query($conn, $select_query);
                    while ($row = mysqli_fetch_assoc($result_query)) {
                        echo "<option value='{$row['category_id']}'>{$row['category_title']}</option>";
                    }
                    ?>
                </select>
            </div>

            <!-- Sections -->
            <div class="form-outline mb-4">
                <label for="product_section" class="form-label">Section</label>
                <select name="product_section" id="product_section" class="form-select" required>
                    <option value="">Select a section</option>
                    <?php
                    // Fetch sections dynamically from the database
                    $select_query = "SELECT * FROM `sections`";
                    $result_query = mysqli_query($conn, $select_query);
                    while ($row = mysqli_fetch_assoc($result_query)) {
                        echo "<option value='{$row['section_id']}'>{$row['section_title']}</option>";
                    }
                    ?>
                </select>
            </div>

            <!-- Product Image -->
            <div class="form-outline mb-4">
                <label for="product_image1" class="form-label">Product Image</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" required>
            </div>

            <!-- Submit Button -->
            <div class="form-outline mb-4">
                <input type="submit" name="insert_product" value="Insert Product" class="btn btn-info">
            </div>
        </form>
    </div>
</body>
</html>
