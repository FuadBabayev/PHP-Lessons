<?php
require_once "Environment.php";
// ! React ve ya JS-deki import demekdir. Yazmasaq eger $database deyiskenini tanimiyacaq

echo "<hr><h2 style=\"background-color: red;\">CREAT READ UPDATE DELETE OPERATIONS</h2>";
// ---------------------------------- CREATE ---------------------------------- 
echo "<h4 style=\"background-color: deepskyblue;\">CREAT</h4>";
if (isset($_POST['create'])) {
    // ! Variable yaradib Enviromentdeki $database variablesini cagirib yaratdiqimiz MyData tablesine INSERT edirik
    // Todo: Security baximindan calis her zaman asagidaki kimi yaz
    // * data_firstname=:data_firstname, birincisi phpmyadmin-deki table columnlaridir ikincisi ise istenilen ola biler 
    // * sadece olaraq ikinci qoyduqun adi execute(array()) icindeki '' da yazmalisanki qarismasinlar
    $create = $database->prepare("INSERT into mydata set
    data_firstname=:data_firstname,
    data_lastname=:data_lastname,
    data_email=:data_email,
    data_age=:data_age
    ");

    $insert = $create->execute(
        array(
            'data_firstname' => $_POST['data_firstname'],
            'data_lastname' => $_POST['data_lastname'],
            'data_email' => $_POST['data_email'],
            'data_age' => $_POST['data_age']
        )
    );

    // Todo: insert-in neticesi ugulu olsa geriye 1, ugursuz olsa hecne gondermiyecek
    if ($insert) {
        echo "Data Inserted Succesfully";
        // Header("Location: PhpMyAdmin.php?status=ok");                // ! React Navigation yeniki avtomatik olaraq bizi bu sehifeye yonlendirsin
        exit;                                                           // ! Header sonunda exit (JS-daki break, return) yazki Headeri skip etmesin duzgun yere getsin
    } else {
        echo "Something went wrong while Inserting";
        // Header("Location: PhpMyAdmin.php?status=deny");
        exit;
    }
}













// ---------------------------------- READ ---------------------------------- 
echo "<h4 style=\"background-color: green;\">READ</h4>";
// ! Oyrenmek ucun bura yazmisam ama eslinde GET metodu form olan sehifede yazilir adeten cunki datalari eyni sehifde gormek lazim olacaq
// * SELECT * Universal Selector kimidir butun datalarini getirecek mydata tablesini
$get = $database->prepare("SELECT * from mydata");
$get->execute();
$read = $get->fetch(PDO::FETCH_ASSOC);                    // ! fetch daha cox While ile istifade edecik cunki tek tek cekmelidir, fetchAll ise hamsini cekir
echo "<pre>";                                             // ! Loop ve ya WHERE istifade etmediymiz ucun ilk datani getirdi            
print_r($read);
echo "</pre><br>";

// * Ve yaxud donguye salmaqla
echo $read['data_id'] . "<br>";
echo $read['data_firstname'] . "<br>";
echo $read['data_lastname'] . "<br>";
echo $read['data_email'] . "<br>";
echo $read['data_age'] . "<br>";
echo $read['data_time'] . "<br>";

// ! While ile isleyende ise butun datalari getirebilir
echo "<h5 style=\"background-color: gray;\">WHILE</h5>";
while ($read = $get->fetch(PDO::FETCH_ASSOC)) {
    echo $read['data_firstname'] . "<br>";
}

// ! Where select islemi
echo "<h5 style=\"background-color: gray;\">WHERE</h5>";
// * burada data_firstname=:myname yeniki birinci hisse tablede olan ikin ise istenilen ola biler yeterki execute-de eyni olsunlar
$look_by_name = $database->prepare("SELECT * from mydata WHERE data_firstname=:myname OR data_age=:myage");
$look_by_name->execute(
    [
        'myname' => "Ayhan",                                                          // Tablede data_firstname === "Ayhan" olan butun datalar
        'myage' => 25                                                                 // Tablede data_age === 25 olan butun datalar
    ]
);
while ($look = $look_by_name->fetch(PDO::FETCH_ASSOC)) {
    echo $look['data_firstname'] . "<br>";
}
?>

<!-- // ! Fill data to Table -->
<h5 style="background-color: gray;">TABLE</h5>
<table border="1" cellpadding="5" cellspacing="0" style="width: 50%; text-align: center;">
    <tr>
        <th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Age</th>
    </tr>
    <?php
    $look_by_email = $database->prepare("SELECT * from mydata WHERE data_email=:mail");
    $look_by_email->execute([
        "mail" => "enamazov@mail.ru",
    ]);
    while ($table = $look_by_email->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?php echo $table['data_id'] ?></td>
            <td><?php echo $table['data_firstname'] ?></td>
            <td><?php echo $table['data_lastname'] ?></td>
            <td><?php echo $table['data_email'] ?></td>
            <td><?php echo $table['data_age'] ?></td>
        </tr>
    <?php } ?>
</table>

















<!------------------------------------ UPDATE and DELETE ------------------------------------>
<h4 style="background-color: red;">UPDATE and DELETE</h4>
<table border="1" cellpadding="5" cellspacing="0" style="width: 50%; text-align: center;">
    <tr>
        <th>№</th>
        <th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Age</th>
        <th>Paramaters</th>
    </tr>
    <?php
    $look_all = $database->prepare("SELECT * from mydata");
    $look_all->execute();
    $count = 0;
    while ($table = $look_all->fetch(PDO::FETCH_ASSOC)) {
        $count++; ?>
        <tr>
            <td><?php echo $count ?></td>
            <td><?php echo $table['data_id'] ?></td>
            <td><?php echo $table['data_firstname'] ?></td>
            <td><?php echo $table['data_lastname'] ?></td>
            <td><?php echo $table['data_email'] ?></td>
            <td><?php echo $table['data_age'] ?></td>
            <td>
                <a href="Update.php?data_id=<?php echo $table['data_id'] ?>"><button>Update</button></a>
                <a href="?data_id=<?php echo $table['data_id'] ?>&delete=ok"><button>Delete</button></a>
            </td>
        </tr>
    <?php } ?>
</table>

<?php
// ---------- UPDATE ---------
if (isset($_POST['update'])) {
    $update = $database->prepare("UPDATE mydata set
    data_firstname=:data_firstname,
    data_lastname=:data_lastname,
    data_email=:data_email,
    data_age=:data_age
    where data_id={$_POST['data_id']}
    ");

    $changed = $update->execute(
        [
            'data_firstname' => $_POST['data_firstname'],
            'data_lastname' => $_POST['data_lastname'],
            'data_email' => $_POST['data_email'],
            'data_age' => $_POST['data_age'],
        ]
    );

    // if ($changed) {
    //     echo "Data Updated Succesfully";
    //     Header("Location: PhpMyAdmin.php");
    //     exit;
    // } else {
    //     echo "Something went wrong while Inserting";
    //     Header("Location: PhpMyAdmin.php");
    //     exit;
    // }
}


// ---------- DELETE ---------
if(isset($_GET['delete'])){
    if ($_GET['delete'] == "ok") {
        $delete = $database->prepare("DELETE from mydata WHERE data_id=:id");
        $check = $delete-> execute([
            'id' => $_GET['data_id']
        ]);
        
        // if ($check) {
        //     echo "Data DELETED Succesfully";
        //     Header("Location: PhpMyAdmin.php");
        //     exit;
        // } else {
        //     echo "Something went wrong while Inserting";
        //     Header("Location: PhpMyAdmin.php");
        //     exit;
        // }
    }
}

?>