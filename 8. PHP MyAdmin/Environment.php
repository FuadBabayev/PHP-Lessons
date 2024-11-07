<?php
// ! Default yazilisi beledir
try {
    // * dbname: table name in phpmyadmin
    $database = new PDO("mysql:host=localhost;dbname=phplessons;charset=utf8", "root");
    echo "DataBase Conneted Successfully!<br>";
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>