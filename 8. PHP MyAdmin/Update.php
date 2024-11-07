<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhpMyAdmin Update</title>
</head>

<body>
    <?php
    require_once "Environment.php";

    $look_by_id = $database->prepare("SELECT * from mydata WHERE data_id=:id");
    $look_by_id->execute(
        [
            'id' => $_GET['data_id']                       // ! React-daki useParams() id-ye gore elementi tapib inputlari doldurur
        ]
    );
    $select = $look_by_id->fetch(PDO::FETCH_ASSOC) ?>

    <h1>Update Data</h1>
    <form action="CRUD.php" method="POST">
        <input type="text" name="data_firstname" value="<?php echo $select['data_firstname'] ?>">
        <input type="text" name="data_lastname" value="<?php echo $select['data_lastname'] ?>">
        <input type="email" name="data_email" value="<?php echo $select['data_email'] ?>">
        <input type="number" name="data_age" value="<?php echo $select['data_age'] ?>">
        <input type="hidden" name="data_id" value="<?php echo $select['data_id'] ?>">
        <button type="submit" name="update">Formu Yenile</button>
    </form>


</body>

</html>