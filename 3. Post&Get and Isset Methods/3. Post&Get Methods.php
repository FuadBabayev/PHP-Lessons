<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post&Get Methods</title>
</head>
<body>

<!-- // ! Bir sehifede 100lerle form yaza bilersen onlari qarisdirmamaq ucun name-de olduqu kimi her form-a yada buttonuna uniqe name vereceksen -->
<!-- // ! Yoxsa her zaman ekran acilanda bu mesaji goreceksen Warning: Undefined array key "firstName" in C:\xampp\htdocs\PHP Lessons\3. Post&Get Methods.php -->
<!-- // ! Bunun sebebi ondadir ki sehife acilanda kimi her birini oxuyur ve muxtelif inputlarda eyni nameler olur deye qarisdirir her birini-->
<!-- // ! QARSISINI ALMAQ UCUN HER BIR METHODUN QARSISINA if(isset($_POST['button_name'])){} yeniki bu deyisken olub olmamaqini (ve ya dolu olub olmadiqini) yoxlayir -->
<?php
// * ------------------------------ POST METODU ------------------------------
// ! Post&Get Methods
// Todo: Post&Get metodlarini biz form-lar vasitesile edirik
// Todo: Post&Get metodundan id&class vezine mutleq name isledirik, form-lar name-lerle taninir
// * Form-da olduqu ucun her submit edende sehife yenilenir ama datalar harasa gedir tuta bilmirik, onuncun POST metodundan istifade olunur
// Todo: $_POST["$name"]   metodu icine name deyerini alir ve hemen inputun valuesini gosterir
// ! POST metodu ile melumatlari gonderende domain (sayt yerinde) hec bir deyisiklik olmur (ve buna gorede sehifedeki valuelere deyisiklik ede bilmirik), gizli olur 
// * submit edende http://localhost/PHP%20Lessons/3.%20Post&Get%20Methods.php domain olduqu kimi qalir ve biz inputlarin valuelerine mudaxile ede bilmirik
// ! Buda sehifenin qorunarliqini, Post metodu deyerleri gizli gonderir ve Mutleq sekilde bura input daxilindeki name attributunu deyerini vermelisen
echo $_POST["firstName"];                   
echo "<br>";
echo $_POST["lastName"];
// if(isset($_POST["firstName"])){
//     echo $_POST["firstName"];                   
//     echo "<br>";
//     echo $_POST["lastName"];
// }
// ! Eger burdaki kimi yazsaydiq ilk sehife acilanda asagidaki errorla qarsilasmazdiq 
// Warning: Undefined array key "firstName" in C:\xampp\htdocs\PHP Lessons\3. Post&Get Methods.php


// * ------------------------------ GET METODU (IN SAME PAGE) ------------------------------
// Todo: Get metodunun yazilisi tamamile Post metodu ile eynidir sadece form-da ve echo-da GET yazilmalidir
// Todo: Elave olaraq GET metodunu form xaricinde her hansisa tag ile de gondermek sonra $_GET ile tutmaq olar
// ! GET metodu ile melumatlari gonderende domain (sayt yerinde) butun valueler gosterilir ve buna gorede istediyimiz valuelerde deyisiklikleri ede bilirik
// * submit edende http://localhost/PHP%20Lessons/3.%20Post&Get%20Methods.php?firstName=Fuad&lastName=Babayev bele gelir 
// * deyisiklik etmek istesek http://localhost/PHP%20Lessons/3.%20Post&Get%20Methods.php?firstName=Ali&lastName=Cabbar  yazaraq inputlarin valuelerini deyise bilerik
// ! Buda sehifenin qorunurluqunu azaldir, Get metodu deyerleri aciq gonderir
// echo $_GET["firstName"];
// echo "<br>";
// echo $_GET["lastName"];


// * ------------------------------ GET METODU (IN NEW PAGE) ------------------------------
// Todo: action attributu gondereceyi yeri teyin edir eger eyni sehifede qalacaqsa yazmasaqda olar
// datalar action vasitesile bu linke getdi http://localhost/PHP%20Lessons/3a.%20Datas%20of%20Post&Get.php?firstName=Fuad&lastName=Babayev
// echo $_GET["firstName"];
// echo "<br>";
// echo $_GET["lastName"];
// $welcome = "Fuad Babayev";
?>
<!-- // ! POST METODU ILE -->
<form action="" method="POST">                              
    <label for="ad">First Name: </label> <input type="text" name="firstName" id="ad" placeholder="Adiniz:"> &nbsp;&nbsp;&nbsp;
    <label for="soyad">Last Name: </label> <input type="text" name="lastName" id="soyad" placeholder="Soyadiniz:"> &nbsp;&nbsp;&nbsp;
    <input type="submit" value="Send">
</form>
<!-- // ! GET METODU ILE (IN SAME PAGE) -->
<!-- <form action="" method="GET">                              
    <label for="ad">First Name: </label> <input type="text" name="firstName" id="ad" placeholder="Adiniz:"> &nbsp;&nbsp;&nbsp;
    <label for="soyad">Last Name: </label> <input type="text" name="lastName" id="soyad" placeholder="Soyadiniz:"> &nbsp;&nbsp;&nbsp;
    <input type="submit" value="Send">
</form> -->
<!-- // ! GET METODU ILE (IN NEW PAGE) -->
<!-- <form action="3a. Datas of Post&Get.php" method="GET">                              
    <label for="ad3">First Name: </label> <input type="text" name="firstName" id="ad3" placeholder="Adiniz:"> &nbsp;&nbsp;&nbsp;
    <label for="soyad3">Last Name: </label> <input type="text" name="lastName" id="soyad3" placeholder="Soyadiniz:"> &nbsp;&nbsp;&nbsp;
    <input type="submit" value="Send">
</form>
<a href="3b. Datas of Post&Get.php?username=<?php echo $welcome ?>"><button>Send</button></a> -->
<hr>

<?php
// ! POST&GET METODU ILE ISLEYERKEN BUNU MUTLEQ ISTIFADE ETMEK LAZIMDIR
// ! EVEN or ODD integers
// Todo: Sehifeni acarken form olduquna gore ilk defeden default deyerleri gostere biler onun qarisini isset-le alacayiq
// * isset operatoru post&get metodu ile isleyir icinde parametr kimi name alir,Sehife acilanda yox Submit olunanda isledir 
// * if (isset($_POST["numbers"])){} quotesleri yeni ucan moterizeleri funksiyamizin bitis yerine yaziriq
if (isset($_POST["numbers"])){
if ($_POST['numbers']%2){                       // * if ($_POST['numbers']%2) bu odemekdirki sertin icin = 1;
    echo "ODD";
} else {
    echo "EVEN";
}
}
?>
<form action="" method="POST">
    <label for="integer">eded daxil edin</label> <input type="number" id="integer" name="numbers">
</form>
<br><hr>
   
</body>
</html>