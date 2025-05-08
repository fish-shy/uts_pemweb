<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if (isset($_POST['add_to_cart']) && isset($_POST['product_id'])) {
    $productId = $_POST['product_id'];
    $productName = $_POST['product_name'];
    $productPrice = $_POST['product_price'];

    if ($productName && $productPrice !== false) {
        if (isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId]['quantity']++;
        } else {
            $_SESSION['cart'][$productId] = array(
                'name' => $productName,
                'price' => $productPrice,
                'quantity' => 1
            );
        }
    }
}

if (isset($_GET['remove_item']) && isset($_GET['product_id'])) {
    $productIdToRemove = $_GET['product_id'];
    if (isset($_SESSION['cart'][$productIdToRemove])) {
        unset($_SESSION['cart'][$productIdToRemove]);
    }
}

if (isset($_GET['action']) && $_GET['action'] == 'clear_cart') {
    $_SESSION['cart'] = array();
}

$redirectTo = $_SERVER['HTTP_REFERER'] ?? '../pages/products.php';
header("Location: " . $redirectTo);
exit();
?>
