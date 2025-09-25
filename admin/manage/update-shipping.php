<?php
session_start();
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['shipping_cost'])) {
    $shipping_cost = floatval($_POST['shipping_cost']);

    // Update session variables
    $_SESSION['cart_shipping'] = $shipping_cost;

    // Recalculate grand total
    $subtotal = isset($_SESSION['cart_total']) ? $_SESSION['cart_total'] : 0;
    $discount = isset($_SESSION['cart_discount']) ? $_SESSION['cart_discount'] : 0;
    $_SESSION['cart_grand_total'] = $subtotal - $discount + $shipping_cost;

    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid request']);
}
?>
