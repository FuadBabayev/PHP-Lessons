<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=Budget;charset=utf8", 'root', '');
    // echo "Succesfully Connected with Database";
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>