<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhpMyAdmin</title>
</head>
<body>    

<?php
// ! Phpmyadmin Overview and Database Creation (Phpmyadmin Genel Bakış ve Veritabanı Oluşturma)
// Todo: Location http://localhost/ ->  phpMyAdmin Database Manager Version 4.9.1 -> 
// Todo: login: root password: Geophysics.2020
// ! Phpmyadmin Database Creation: http://localhost/phpMyAdmin/  New -> Database Name and utf8_turkish_ci -> create

// ! Creating a Table and Determining Data Types
// * INT: integer demekdir number deyer alir Length/Values adeten 11 olur (10 milyardliq demekdir 11 sifir ola biler)
// * VARCHAR: qisa string deyerler ucundir Length/Values adeten 50 olur (string deyerler alir Meselen: fuad19)
// * Varcharin uzunluqu eger 50den cox olsa onun sadece ilk 50 herfini goturur
// * TEXT: uzun string deyerler ucun istifade olunur Length/Values 2000 de qoya bilersen bolsuqda qoyub sonsuzluq ede bilersen
// * DATE: adetene zaman anlayislari ucun istifade olunur

// ! Autoincrement, Creating Primary Key and Adding Manual Records
// * ID hemise primary olmalidi deye: bilgilerim_id -> More: Primary -> Change -> A_I (Autoincrement) checked and Save (neticede bilgilerim_id goldkey oldu)
// * Bilgilerim_id ona gore primary etdik ki her kayit eklendigin bilgilerim_id avtomatik artacaq ve table kilitlenecek ve data daxil ede bilmiyecik 
// * Her kayit eklendiginde id artir meslene 1 2 3 4 eger biz misal ucun 2ci kayiti silsek tablede 1 3 4 kimi gosterecek
?>

<h1>DataBase PDO CRUD Operations</h1>
<form action="CRUD.php" method="POST">		
	<input type="text" name="data_firstname" placeholder="Firstname">
	<input type="text" name="data_lastname" placeholder="Lastname">
	<input type="email" name="data_email" placeholder="Email">
	<input type="number" name="data_age" placeholder="Age">
	<button type="submit" name="create">Formu Gönder</button>
</form>

<?php   
// ! array_key_exists() ekrana her girende domain hissede status olmuyanda ERROR vermesinin qarsisini alir
if(array_key_exists('status', $_GET)){
    if($_GET['status'] == "ok"){
        echo "Data Succesfully Added!";
    } elseif ($_GET['status'] == "deny"){
        echo "Something went Wrong!";
    }
}
?>
<hr>


    
</body>
</html>