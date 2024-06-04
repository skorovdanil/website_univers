<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require "connect.php";
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $usluga = $_POST['usluga'];
    $message = $_POST['message'];
    $current_page = $_POST['current_page'];

    $sql = "INSERT INTO appointment (name, phone, id_uslugi, message) VALUES (?, ?, ?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->execute([$name, $phone, $usluga, $message]);

    header("Location: $current_page");
    exit();
}
?>