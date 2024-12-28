<?php
session_start();

// Get the raw POST data
$data = file_get_contents("php://input");

// Decode the JSON data
$newItem = json_decode($data);

// Add the item to the session cartItems
if (!isset($_SESSION['cartItems'])) {
    $_SESSION['cartItems'] = [];
}

array_push($_SESSION['cartItems'], $newItem);

// Send a response (you can customize this)
echo json_encode(['message' => 'Item added to cart successfully']);
?>
