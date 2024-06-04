<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require "connect.php";
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $raiting = $_POST['raiting'];
    $review = $_POST['review'];
    $current_page = $_POST['current_page'];

    $sql = "INSERT INTO reviews (name, phone, review_text, raiting) VALUES (?, ?, ?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->execute([$name, $phone, $review, $raiting]);

    header("Location: $current_page");
    exit();
}
?>