<?php
    require "connect.php";

    $sql1 = "SELECT * FROM uslugi";
    $uslugi = $db->query($sql1)->fetchAll(PDO::FETCH_ASSOC);

    $sql2 = "SELECT * FROM subuslugi";
    $subuslugi = $db->query($sql2)->fetchAll(PDO::FETCH_ASSOC);
    
?>