<?php
session_start();

if (!isset($_SESSION['cartItems'])) {
    $_SESSION['cartItems'] = array();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $postData = json_decode(file_get_contents("php://input"), true);

    if (isset($postData['index'])) {
        $index = $postData['index'];

        // Remove the item from the cart
        array_splice($_SESSION['cartItems'], $index, 1);

        // Respond with success message or updated cart data
        echo json_encode(['success' => true, 'message' => 'Item removed successfully']);
        exit;
    }
}

// Respond with an error if the request is not valid
echo json_encode(['success' => false, 'message' => 'Invalid request']);
exit;
?>
