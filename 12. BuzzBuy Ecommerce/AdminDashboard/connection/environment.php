<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=Ecommerce;charset=utf8", 'root', '');
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>