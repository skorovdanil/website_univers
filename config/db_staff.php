<?php
    require "connect.php";

    $sql = "SELECT * FROM staff";
    $staffs = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>