<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>

<?php 
// ! SESSION
// ! Creating and Reading SESSION (Session oturum acma ve oxuma ucun istifade olunur)
// Todo: User datalar burada saxlanilir ve COOKIES-den daha guvenilirdi. 
// Todo: Sessions istifade eden zaman en birinci session_start() funksiyasi yazilmalidir
// * $_SESSION['fullName'] yazilis beledir bunu yazandan sonra bu sehifede cagira bilerik yada yeni sehifede de cagira bilerik
session_start();
$_SESSION['fullName'] = "Fuad Babayev";
$_SESSION['country'] = "Baku, Azerbaijan";
$_SESSION['age'] = "25 years old";
$_SESSION['gender'] = "Male gender";
$_SESSION['height'] = "175 cantimeter";
$_SESSION['weight'] = "72 kilogram";
$_SESSION['status'] = "In Military Service right now";

// ! Butun Session Storageni oxumaq ucun istifade olunur
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

echo $_SESSION['fullName']."<br>";
echo $_SESSION['country']."<br>";
echo $_SESSION['age']."<br>";
echo $_SESSION['gender']."<br>";
echo $_SESSION['height']."<br>";
echo $_SESSION['weight']."<br>";
?>
<hr>



<?php 
// ! COOKIE
// * Bu COOKIE-lerin etibarliliq mutdedi default olaraq ayarlardan kesi silene qederdir ama biz buna vaxt qoya bilerik
$fullname = "Rauf Abbasli Deleted";
setcookie("fullname", $fullname);

// Todo: Butun COOKIE oxumaq ucun istifade olunur
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

echo $_COOKIE["fullname"];
?>
<hr>

<?php 
// ! COOKIE vaxt qoyulmasi
// * COOKIE-lerin aktiv olma muddeti qoya bilerik ve hetta bu vaxti artirada bilerik
// TODO: Vaxt artirmalari
// strtotime("+30 seconds");                      30 saniye
// strtotime("+1 hours");                          1 saat
// strtotime("+1 day");                            1 gun
// strtotime("+1 week");                           1 hefte
$butovAd = "Rauf Abbasli";
$second = "secondssss";
$hour = "saat";
$day = "gun";
$week = "hefte";
setcookie("butovAd", $butovAd, time()+3600);                 // * 1 saat aktiv qalsin
setcookie("saniye", $second, strtotime("+3 seconds"));      // * 30 saniye aktiv qalsin
setcookie("saat", $hour,strtotime("+1 hours"));              // * 1 saat aktiv qalsin
setcookie("gun", $day, strtotime("+1 day"));                 // * 1 gun aktiv qalsin
setcookie("hefte", $week, strtotime("+1 week"));             // * 1 hefte aktiv qalsin

?>

<hr>
</body>
</html>