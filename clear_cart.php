<?php
session_start();

if (!isset($_SESSION['cartItems'])) {
    $_SESSION['cartItems'] = array();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Clear the cart
    $_SESSION['cartItems'] = array();

    // Respond with success message or updated cart data
    echo json_encode(['success' => true, 'message' => 'Cart cleared successfully']);
    exit;
}

// Respond with an error if the request is not valid
echo json_encode(['success' => false, 'message' => 'Invalid request']);
exit;
?>
