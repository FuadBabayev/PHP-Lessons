<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops (For While ForEach)</title>
</head>
<body>

<?php
// ! For dongusu
for ($i = 0; $i < 10; $i++) {
    echo $i;
}
echo "<br>";
echo "<hr>";
?>

<?php
// Todo: Dongulerde (esasen while-de) datalari alarken 100lerle  html div teqinden istifade edeciyik 
// Todo: Html teqlerine muraciet etmek ucun <?php> teqini defelerle acib baglaya bilerik
for ($j = 0; $j < 5; $j++) {
    // echo $j;
    // echo "<br>";                 // * Yəni br teqini hem php icinde yaza bilerik
?>


<?php echo $j;               // * Yəni br teqini hem php icinde yaza bilerik
?> <br>
<?php 
   echo "<span>Hello $j </span><br>";
} ?>
<hr>


<?php 
// ? Yuxaridaki qaydalar uygun misal: Option yaradin icinde 99 value olsun ve reqemler artsin
?>
<select>
    <?php 
    for ($i=0; $i < 99; $i++) { 
        echo   "<option>value: $i</option>";
    }
    ?>
</select>

<!-- // * VE YA -->
<select>
<?php 
for ($i=1; $i < 101; $i++) { ?>
<option value="<?php echo $i ?>"><?php echo $i ?></option>
<?php
}
?>
</select><br><hr>

<!-- // ? Test tapsiriq [1-100 araliqindaki tek ve cut ededleri gostersin ve sayini desin] -->
<h3>Test Tapsiriqi</h3>
<p>1-100 araliqindaki tek ve cut ededleri gostersin ve sayini desin</p>
<?php 
$odd_numbers = 0;
$even_numbers = 0;
for ($i=0; $i <= 100; $i++) { 
    if($i % 2 == 0){
        echo "Even Number: ".$i."<br>";
        $even_numbers++;
    } else {
        echo "Odd Number: ".$i."<br>";
        $odd_numbers++;
    }
}
echo "Count of Even Numbers: ".$even_numbers."<br>";
echo "Count of Odd Numbers: ".$odd_numbers;

?>
<br><hr>

<?php
// ! While dongusu
// ! Asagidaki while dongusu Js-daki kimi sonsuz donguye girdiyi ucun kompu dondurur
// $while = 5;
// while ($while= 10) {
//     echo "It works infinitely";
// }
$while = 5;
while ($while < 10) {
    echo "It works infinitely $while <br>";
    $while++;
}
echo "<hr>";
?>


<?php
// ! For dongusu ile yazilisi
// ! Arrayin uzunluqunu tapmaq ucun count($array) hazir fuhnksiyasindan istifade olunur
// Todo: hazir funksiya yazdiqimiz ucun onu dirnaq icinde yazmaq olmaz
$sentence = "Hello Welcome";
$dizi = array("Apple", "Peach", "Orange", "Watermelon", "Grapes", "Mango", "Banana", "Pomegranade");
echo strlen($sentence)."<br>";                      // * string deyerlerin uzunluqunu strlen() funksiyasi ile olcurler 
echo count($dizi)."<br>";                           // * array deyerlerin uzunluqunu count() funksiyasi ile olcurler

// ? buna aid misal
for ($i=0; $i < count($dizi); $i++) { 
    echo $dizi[$i]."<br>";
}
echo "<hr>";
?>  

<?php
// ! ForEach dongusu  (JS-daki for of-a daha cox benzeyir)
// Todo: Funksiya default olaraq foreach ($variable as $key => $value) setini verir ama cox vaxt value lazim olmur
// Todo: $variable bizim evvelki yazdiqimiz array, $key hemen arrayi yeni deyere menimseden
// * Yuxaridaki misalin forEach-la qisa yazilisi
foreach ($dizi as $key) {
    echo $key."<br>";
}
?>  

</body>

</html>