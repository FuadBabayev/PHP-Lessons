<?php
session_start();                                                    // $_SESSION[''] islemeyi ucun her zaman en basda yaz
require_once "../environment.php";

// ---------- CREATE ----------
if (isset($_POST['income_create'])) {                          // ! Eyni sehifede 100lerle form ola biler ve hensi neye aid olduqunu bildiririk sonda exit => dayansin
    $request = $db->prepare("INSERT INTO Income SET
    price=:price,
    category=:category,
    date=:date
");
    $creat = $request->execute([
        'price' => $_POST['price'],
        'category' => $_POST['category'],
        'date' => $_POST['date']
    ]);

    // ! Bu cur veziyyetler bezen elverisli olmur cunki DOMAIN hisse deyisir eger deyismeyini istemirsense $_SESSION[''] istifade et
    // if ($creat) {
    //     Header("Location: ../income-add.php?created=ok");
    //     exit;
    // } else {
    //     Header("Location: ../income-add.php?created=no");
    //     exit;
    // }

    if ($creat) {
        $_SESSION['incomeCreated'] = 'ok';
        Header("Location: ../income-add.php");
        exit;
    } else {
        $_SESSION['incomeCreated'] = 'no';
        Header("Location: ../income-add.php");
        exit;
    }
}
if (isset($_POST['expense_create'])) {                          // ! Eyni sehifede 100lerle form ola biler ve hensi neye aid olduqunu bildiririk sonda exit => dayansin
    $request = $db->prepare("INSERT INTO Expense SET
    price=:price,
    category=:category,
    date=:date
");
    $creat = $request->execute([
        'price' => $_POST['price'],
        'category' => $_POST['category'],
        'date' => $_POST['date']
    ]);
    if ($creat) {
        $_SESSION['expenseCreated'] = 'ok';
        Header("Location: ../expense-add.php");
        exit;
    } else {
        $_SESSION['expenseCreated'] = 'no';
        Header("Location: ../expense-add.php");
        exit;
    }
}
// ---------- CREATE ----------

?>