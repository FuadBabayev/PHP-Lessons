<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
<?php 
// ! Functions (Void Functions)
function show() {
    echo "Hello Function";
}
show();
?>
<hr>


<?php 
// ! Functionda sum(4, 7) eger bu deyerlerden 1i eksik olsa idi error verecekdi ve ondan sonra gelecen hec bir funksiya islemeycekdi
function sum($num1, $num2){
    echo '$num1+$num2'."<br>"; 
    echo "$num1+$num2"."<br>"; 
    echo $num1+$num2."<br>"; 
}
sum(4, 7)
?>
<hr>


<?php 
// ! Return
function total($number1, $number2){
    return $number1 + $number2;
}
echo total(9, 8);
?>
<hr>


<?php 
// ! Global
// Todo: Deyerleri function daxilinde global etmesek functionlar yenede deyer qaytaracaq ama sehv deyer diqqetli ol!
$number4 = 81;                                // * burada $number4 global scopededir, funksiyanin icinde deyil deye tanimir onu
function qlobal($number3){
    global $number4;                          // * artiq global etdiyimiz ucun funksiya onu taniyacaq  
    return $number3 + $number4;
}
echo qlobal(9);
?>
<hr>


<?php 
// ! Default Value in Functions (Fonksiyonlarda Varsayılan Değer)   
// Todo: validation($firstName, $lastName) deyer eksik olanda funksiya islemeycek
// Todo: $lastName="Babayev" eger lastName-ye deyer verilmese avtomatik ozu doldurcaq ve error vermiyecek
function validation($firstName="Ad daxil edin", $lastName="Soyad daxil edin"){
return $firstName." ".$lastName;
}
echo validation("Fuad", "Babayev")."<br>";
echo validation("Fuad")."<br>";
?>
<hr>


<?php 
// ! Self-Repeating Recursive Function (Kendini cagiran rekursiv fonksiyonlar)   
$integer = 1;
function factorial($number5){
    global $integer;
    if ($number5 > 1){
        $integer = $integer * $number5;
        $number5--;
        factorial($number5);                            // * recursive functions
    }
    return $integer;
}
echo factorial(10);
?>
<hr>


<?php 
// ! function_exists("functionName") funksiyanin varliqi haqqinda melumat verir   
// Todo: default olaraq eger hemin funksiya varsa 1, yoxdursa cavab qaytarmayacaq
function exist($number6){
    return $number6;
}
echo exist(15)."<br>";                                  
echo function_exists("exist")."<br>";           // * exist funksiyasi olduqu ucun 1 qaytardi
echo function_exists("exists")."<br>";          // * exists funksiyasi sehv yazildiqi ucun yeni olmadiqi ucun bosluq yazildi
?>
<hr>


<?php 
// ! List All Functions  get_defined_functions();
// Todo: Hem Php-de hemde sehifden olan butun funksiyalari Array halinda qaytarir
print_r(get_defined_functions())."<br>";

echo "<pre>";
print_r(get_defined_functions());
echo "</pre>";
?>
<hr>

</body>
</html>