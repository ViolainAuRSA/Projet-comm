<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'message' => 'User not logged in']);
    exit;
}

if (!isset($_SESSION['cart_count'])) {
    $_SESSION['cart_count'] = 0;
}

$_SESSION['cart_count']++;

header('Content-Type: application/json');
echo json_encode([
    'success' => true,
    'cart_count' => $_SESSION['cart_count']
]); 