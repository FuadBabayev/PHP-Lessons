<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
<?php
// ! Arrays (Diziler)
// Todo: array() hazir funksiyadir JS-daki arrayla eynidir sadece () icinde yazilir qalan her sey tamamile eynidir ve bunu cut dirnaq icinde cagira bilmiyecik
// Todo: echo and print => Output a string ve buna gorede ekrana arrayi cixara bilmir cunki string deyerler alir
// Todo: Normalda JS-da biz arrayin icindeki elementleri tek tek almaq ucun donguye salirdiq (for, forEach ve s) 
// Todo: print_r() hazir funksiyadir array() funksiyasinin icindeki elementleri oxumaq ucun istifade olunur, disadvantage is that index-le birge gelir
$dizi = array("28 Mall", "Ehmedli", "Yasamal", 20, 50);
// echo $dizi; echo "$dizi"; print $dizi; print "$dizi"; echo "<br>";               // ! Netice olaraq sadece Warning ve Array sozu qaytaracaq
print_r($dizi); echo "<br><br>";   // * array() funksiyasinin icindeki elementleri oxumaq ucun istifade olunur ama indexle bir geldiyi ucun oxunarliliq azalir

// * eger echo yada printle cixarmaq isteyirikse arrayin icindeki bir elementi indexi ile cagiraraq gostere bilerik
echo $dizi[0]; echo "<br>";
echo "$dizi[1]"; echo "<br>";
echo $dizi[2]; echo "<br>";
print "$dizi[3]"; echo "<br>";
print $dizi[4]; echo "<br>";

// * echo "<pre>"; ...  echo "</pre>"; oxunarliqi artirmaq ucun pre-nin arasinda yazilir ve bu arraylara aiddir
echo "<pre>";
print_r($dizi);
echo "</pre>";
echo "<hr>";
?>

<?php
// ! Extracted Functions Used in TV Series and Practical Usage Examples (Dizilerde Kullanılan Hazır Fonksiyonlar ve Pratik Kullanım Örnekleri)
// Todo: sort()              array icindeki butun elementleri kicikden boyuye siralayir (reqemler ve herfler)  arrayi MUTATE edirler (JS-deki kimi) 
// Todo: rsort()             array icindeki butun elementleri boyukden kiciye siralayir (reqemler ve herfler)
// Todo: in_array()          array icindeki axtardiqimiz elementin olub olmadiqini gosterir, varsa 1 qaytarir yoxdursa hecne qaytarmir (includes in JS)
// Todo: implode()           array icindeki butun elementleri arasini doldurub birlesdirir (JS-daki join metodu ile eyni funksiyani dasiyir)
// Todo: explode()           array icindeki butun elementleri deyisekene gore ayirir (JS-daki split metodu ile eyni funksiyani dasiyir)
$dizi2 = array(12, 5, 78, 32, 2, 6, 10, 43, 0, 3, 7);
$dizi3 = array("f", "u", "m", "e", "l", "z", "w", "a");
echo "<pre>";   
print_r($dizi2);                                                // * array nece verilibse elede cixarir
print_r($dizi3);  
echo "</pre>";  

sort($dizi2);                                                   // * sort metodu array-i kicikden boyuye siralayir
sort($dizi3);
echo "<pre>";  
print_r($dizi2);
print_r($dizi3);
echo "</pre>"; 

echo "<pre>";  
rsort($dizi2);                                                  // * sort metodu array-i boyukden kiciye siralayir
rsort($dizi3);
print_r($dizi2);
print_r($dizi3);
echo "</pre>"; 

echo in_array(5, $dizi2); echo "<br>";             // * $dizi2 arrayinin icinde 5 elementi olduquna gore netice olaraq 1 qaytarir
echo in_array("b", $dizi3); echo "<br>";           // * $dizi3 arrayinin icinde b elementi olduquna gore netice olaraq hecne cixmir

echo implode("-", $dizi3); echo "<br>";            // * arasina istesek bosluq simvol herf reqem qoya bilerik

$string = "My name is Fuad Babayev";
$arrayString = explode(" ", $string);
echo "<pre>"; 
print_r($arrayString);                             // * string deyeri array-a cevirir ve onu ekranda cixartmaq ucun print_r ve pre-den istifade olunur
echo "</pre>"; 
echo "<hr>";
?>


<?php
// ! A Practical Example with Date Time Zone Settings and Explode Function (Date Time Zone Ayarları ve Explode Fonksiyonuyla Pratik Bir Örnek)
// Todo: asagidakilar hazir funksiyalardir (ama default olaraq basqa olkeni gosterir bunun ucun biz oz erazimi qeyd etmeliyik)
date_default_timezone_set("Asia/Baku");
echo $today = date("d-m-y h:i:s"); echo "<br>";                      // 11-07-24 11:38:45
echo $today = date("F j, Y, g:i a"); echo "<br>";                    // March 10, 2001, 5:16 pm
echo $today = date("m.d.y"); echo "<br>";                            // 03.10.01
echo $today = date("j, n, Y"); echo "<br>";                          // 10, 3, 2001
echo $today = date("Ymd"); echo "<br>";                              // 20010310
echo $today = date('h-i-s, j-m-y, it is w Day'); echo "<br>";        // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
echo $today = date('\i\t \i\s \t\h\e jS \d\a\y.'); echo "<br>";      // it is the 10th day.
echo $today = date("D M j G:i:s T Y"); echo "<br>";                  // Sat Mar 10 17:16:18 MST 2001
echo $today = date('H:m:s \m \i\s\ \m\o\n\t\h');echo "<br>";         // 17:03:18 m is month
echo $today = date("H:i:s"); echo "<br>";                            // 17:16:18
echo $today = date("Y-m-d H:i:s"); echo "<br>";                      // 2001-03-10 17:16:18 (the MySQL DATETIME format)
?>




</body>
</html>