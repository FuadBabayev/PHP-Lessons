<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If condtions Switch</title>
</head>

<body>
    <form action="" method="POST" name="condition">
        <label for="num"> 1-3 araliqinda eded daxil edin</label> <input type="number" id="num" name="digit">
    </form>

    <?php
    // ! If elseif else qaydalari yazmiram hamisi tamamile noqtebenoqte JS-daki ile eynidir
    // if(isset($_POST['condition'])){
        if ($_POST['digit'] == 3) {
            echo "You Win!";
        } else if ($_POST['digit'] == 2) {
            echo "You Draw";
        } else {
            echo "You Lose! ".$_POST['digit'];
        }
    // }
    echo "<br>";
    echo "<hr>";

    // ! Hemen seyi ternary-de yazaciq (uclu operator)
    echo $_POST["digit"] >= 3 ? "You win" : "You Lose";
    echo "<br>";
    echo "<hr>";

    // ! JavaScript-deki && || operatorlarida burada eynidir sadece yazilisi AND OR kimidir
    if ($_POST['digit'] > 10 and $_POST['digit'] < 100) {
        echo "You Win!";
    } else if ($_POST['digit'] < 10 or $_POST['digit'] > 5) {
        echo "You Draw";
    } else {
        echo "You Lose!";
    }
    echo "<br>";
    echo "<hr>";
    ?>


    <?php
    // ! switch buda tamamile eynidir
    $integer = 2;
    switch ($integer) {
        case '1':
            echo "Number is 1";
            break;
        case '2':
            echo "Number is 2";
            break;
        case '3':
            echo "Number is 3";
            break;
        default:
            echo "You cant find";
            break;
    }
    echo "<hr>";
    ?>
</body>

</html>