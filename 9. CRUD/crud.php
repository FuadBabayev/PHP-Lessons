<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creat Read Update Delete</title>
</head>

<body>
    <!-----------------------  CONNECTING WITH DATABASE ----------------------->
    <?php
    try {
        $database = new PDO("mysql:host=localhost;dbname=phplessons;charset=utf8", "root", "");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    ?>
    <!----------------------  CONNECTING WITH DATABASE ----------------------->




    <!-----------------------  UPDATE ----------------------->
    <?php
    if (isset($_GET['id'])) {
        $find = $database->prepare("SELECT * FROM Cars WHERE id=:yenile");
        $find->execute(
            [
                "yenile" => $_GET['id']
            ]
        );
        $locate = $find->fetch(PDO::FETCH_ASSOC);
    }
    if (isset($_POST['update'])) {
        $edit = $database->prepare("UPDATE Cars SET
        brand=:marka,
        model=:model,
        price=:qiymet,
        year=:il
        -- WHERE id={$_GET['id']}               //! Domain yerinden alinan id
        WHERE id={$_POST['id']}              /* //! Input type=hidden alinan id */
    ");
        $update = $edit->execute(
            [
                "marka" => $_POST['brand'],
                "model" => $_POST['model'],
                "qiymet" => $_POST['price'],
                "il" => $_POST['year'],
            ]
        );
        if ($update) {
            echo "Updated";
            Header("Location: crud.php");
            exit;
        } else {
            echo "Not Updated";
            Header("Location: crud.php");
            exit;
        }
    }
    ?>
    <!-----------------------  UPDATE ----------------------->



    <!-----------------------  DELETE ----------------------->
    <?php
    if (isset($_GET['delete'])) {
        $find = $database->prepare("DELETE FROM Cars WHERE id=:sil");
        $delete = $find->execute([
            'sil' => $_GET['delete']
        ]);
        if ($delete) {
            echo "Deleted";
            Header("Location: crud.php");
            exit;
        } else {
            echo "Not Deleted";
            Header("Location: crud.php");
            exit;
        }
    }
    ?>
    <!-----------------------  DELETE ----------------------->

    <div class="container" style="width: 70%; margin: 0 auto; text-align: center;">
        <h1>Create Read Update Delete Form</h1>
        <form method="POST">
            <input type="text" placeholder="Brand" required="" name="brand" value="<?php if (isset($_GET['id'])) echo $locate['brand'] ?>">
            <input type="text" placeholder="Model" required="" name="model" value="<?php if (isset($_GET['id'])) echo $locate['model'] ?>">
            <input type="number" placeholder="Price" required="" name="price" value="<?php if (isset($_GET['id'])) echo $locate['price'] ?>">
            <input type="number" placeholder="Year" required="" name="year" value="<?php if (isset($_GET['id'])) echo $locate['year'] ?>">
            <input type="hidden" name="id" value="<?php if (isset($_GET['id'])) echo $locate['id'] ?>">
            <button type="submit" name="create">Create</button>
            <button type="submit" name="update">Update</button>
        </form>
        <hr>




        <!----------------------  CREATE ----------------------->
        <?php
            if (isset($_GET['status'])) {
                if ($_GET['status'] == 'ok') {
                    echo "Succesfully Created";
                } else {
                    echo "Error while Creating";
                }
            }
            if (isset($_POST['create'])) {
                $save = $database->prepare("INSERT INTO Cars SET
            brand=:marka,
            model=:model,
            price=:qiymet,
            year=:il
        ");
                $create = $save->execute(
                    [
                        "marka" => $_POST['brand'],
                        "model" => $_POST['model'],
                        "qiymet" => $_POST['price'],
                        "il" => $_POST['year'],
                    ]
                );
                if ($create) {
                    echo "Created";
                    Header("Location: crud.php");
                    exit;
                } else {
                    echo "Not Created";
                    Header("Location: crud.php");
                    exit;
                }
            }
            ?>
        <!-----------------------  CREATE ----------------------->








        <!-----------------------  READ ----------------------->
        <table border="1" cellspacing="0" cellpadding="5" width="100%">
            <tr>
                <th style="width: 6%">№</th>
                <th style="width: 12%">ID</th>
                <th style="width: 19%">Brand</th>
                <th style="width: 19%">Model</th>
                <th style="width: 18%">Price</th>
                <th style="width: 12%">Year</th>
                <th style="width: 14%">Actions</th>
            </tr>
            <?php
            $request = $database->prepare("SELECT * FROM Cars");
            $request->execute();
            $count = 0;
            while ($read = $request->fetch(PDO::FETCH_ASSOC)) {
                $count++; ?>
            <tr>
                <td><?php echo $count ?></td>
                <td><?php echo $read['id'] ?></td>
                <td><?php echo $read['brand'] ?></td>
                <td><?php echo $read['model'] ?></td>
                <td><?php echo $read['price'] ?></td>
                <td><?php echo $read['year'] ?></td>
                <td>
                    <a href="?id=<?php echo $read['id'] ?>"><button>Update</button></a>
                    <a href="?delete=<?php echo $read['id'] ?>"><button>Delete</button></a>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
        <!-----------------------  READ ----------------------->

    </div>

</body>

</html>