<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css"> <!-- Linking the CSS file -->
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #333;
            color: white;
        }

        nav .brand h1 {
            margin: 0;
            font-size: 24px;
            color: white;
        }

        .user-actions {
            display: flex;
            gap: 20px;
        }

        .user-actions a {
            background-color: #555;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .user-actions a:hover {
            background-color: #777;
        }

        /* Department Section */
        .department-section {
            padding: 40px 20px;
            text-align: center;
            max-width: 800px;
            margin: 20px auto;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .department-section h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .department-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .department-box {
            width: 150px;
            height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #eee;
            border: 2px solid #ccc;
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }

        .department-box:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .department-box h3 {
            margin: 0;
            font-size: 16px;
            color: #333;
        }

        /* Search Section */
        .search-section {
            text-align: center;
            padding: 40px 20px;
        }

        .search-section h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .search-section form {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        .search-section input {
            padding: 10px;
            width: 300px;
            border: 2px solid #ccc;
            border-radius: 5px;
        }

        .search-section button {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .search-section button:hover {
            background-color: #555;
        }

        /* Footer Links Section */
        .footer-links {
            padding: 40px 20px;
            background-color: #333;
            color: white;
            text-align: center;
        }

        .footer-links h2 {
            margin-bottom: 20px;
        }

        .footer-links ul {
            list-style-type: disc;
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            padding-left: 0; /* Remove default padding */
        }

        .footer-links ul li {
            margin: 10px;
            flex: 1 1 calc(33.333% - 20px); /* Three items per row */
            text-align: left;
            color: #ffcc00;
        }

        .footer-links ul li a {
            color: #ffcc00;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        .footer-links ul li a:hover {
            color: white;
        }

        .footer-links p {
            color: white;
            margin-top: 20px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <div class="brand">
            <h1>Welcome to Our Store</h1>
        </div>
        <div class="user-actions">
            <a class="login-button" href="login.php">Login</a>
            <a class="signup-button" href="signup.php">Sign Up</a>
        </div>
    </nav>

    <!-- Department Section -->
    <div class="department-section">
        <h2>Shop By Category</h2>
        <div class="department-container">
            <a class="department-box" href="mens.php">
                <h3>Men</h3>
            </a>
            <a class="department-box" href="women.php">
                <h3>Women</h3>
            </a>
        </div>
    </div>

    <!-- Rewards Section -->
    <div class="rewards-section">
        <h2>Our Rewards Program</h2>
        <p>Join our rewards program to earn points and save more on your purchases!</p>
        <button onclick="location.href='signup.php'">Join Now</button>
    </div>

    <!-- Search Section -->
    <div class="search-section">
        <h2>Search Products</h2>
        <form method="GET" action="search_product.php">
            <input type="text" name="q" placeholder="Search for products" required>
            <button type="submit">Search</button>
        </form>
    </div>

    <!-- Footer Links Section -->
    <div class="footer-links">
        <h2>Important Information</h2>
        <ul>
            <li><a href="company_background.php" target="_blank">Company Background</a></li>
            <li><a href="business_policies.php" target="_blank">Business Policies</a></li>
            <li><a href="shipping_policy.php" target="_blank">Shipping Policy</a></li>
            <li><a href="return_policy.php" target="_blank">Return Policy</a></li>
            <li><a href="privacy_policy.php" target="_blank">Privacy Policy</a></li>
            <li><a href="security_statement.php" target="_blank">Security Statement</a></li>
        </ul>
        <p>&copy; 2024 Our Store. All Rights Reserved.</p>
    </div>
</body>
</html>
