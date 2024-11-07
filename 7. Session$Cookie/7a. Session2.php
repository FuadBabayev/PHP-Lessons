<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session 2</title>
</head>
<body>
<?php
// ! burdada bir qayda kimi ilk once session_start() funksiyasi yazilmalidir HER SEYDEN EVVEL
// Todo: Sonra gonderdiyinmiz datalari burada tutub echo ile ekrana cixara bilerik
// * bu datalari gormek ucun esas sehifeni refresh etmek lazimdir
session_start();

// ! Her hansisa data silinenede ekrana error vermemesi ucun evvelceden bele etmek daha yaxsi olar
echo "<pre>";
print_r($_COOKIE);
print_r($_SESSION);
echo "</pre>";
echo in_array("secondssss", $_COOKIE)."<br>";
echo in_array("25 years old", $_SESSION)."<br>";


echo $_SESSION['fullName']."<br>";
echo $_SESSION['country']."<br>";
if(in_array("25 years old", $_SESSION)) echo $_SESSION['age']."<br>";   // ! Olmuyanda ERROR vermesin deye
echo $_SESSION['gender']."<br>";
echo $_SESSION['height']."<br>";
echo $_SESSION['weight']."<br><br><hr>";

echo $_COOKIE["butovAd"]."<br>"; 
if(in_array("saniye", $_COOKIE)) echo $_COOKIE["saniye"]." 10 saniye sonra yoxa cixacam <br>";
echo $_COOKIE["saat"]."<br>"; 
echo $_COOKIE["gun"]."<br>"; 
echo $_COOKIE["hefte"]."<br><hr>";
?>


<?php
// ! Using SESSION Deletion and Unset Function
// Todo: Session silme 2 cur olur, Specific silme yada umumi silme
// Todo: Specific sessionu silmek ucun unset($_SESSION['']) yazilir, Visibility = visible kimi ozunu aparir
// Todo: Butun sessionlari silmek ucun session_destroy() istifade olunur
unset($_SESSION['age']);
// session_destroy();

// ! COOKIE leri ise silmek ucun eyni deyiskeni yeniden adlandirib vaxti ve adini deyismek lazimdir ad bos qalacaq vaxt menfi olacaqki bitmis olsun
setcookie("fullname", "", strtotime("-1days"));
if(in_array("Rauf Abbasli Deleted", $_COOKIE)) echo $_COOKIE["fullname"];
?> 
    
</body>
</html>