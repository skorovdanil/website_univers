<?php 
    $host = 'localhost';
    $dbname = 'site_univers';
    $username = 'root';
    $password = '';
    try {
        $db = new PDO("mysql:host=$host;dbname=$dbname;", $username, $password);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
        die("Ошибка подключения.");
    }
                // $result = $db->prepare($sql);
            // $result->execute();
?>