<!-- PHP burada da yazila biler asagida html-nin icindede yazila biler hec bir ferqi yoxdur -->
<?php echo "Hello WELCOME to PHP"?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>
</head>

<body>
<!-- PHP-de frontend -de olduqu kimi girilmir, sayt yerine localhost yazaraq sonra gedeceyimiz yeri / isaresinden sonra yaziriq -->
<!-- Yaradacaqimiz fayllari burada C:\AppServ\www yaradib adlandiraciq sonra RUN etmek ucun http://localhost/${fileName}.php --->
<!-- C:\AppServ\www\PHP Lessons fayl buradadir ona RUN etmek ucun http://localhost/PHP%20Lessons/1.%20PhpBasics.php yazaciq -->
<!-- XAMPP-da acmaq ucun C:\xampp\htdocs folderinin icnde istenilen yerde yaradib  http://localhost:8081/.... cagirmaq olar -->
<!-- Ama evvelce XAMPP-i run etmelisen -->

<?php 
// ! Echo-Print Writing on the Screen
echo "Fuad Babayev" ?>   
<?php print "Rauf Abbasli" ?>     
<!-- 1 defe echo(print) yazsaq ";" isaresini yazmasaqda olar -->

<?php echo "Murad Babayev";
echo "Mecid Abbasli"; ?> 
<?php echo "Rufet babayev"; echo "Mahmud Abbasli"; ?>    
<!-- 1-den cox echo(print) yazsa mutleq ";" isaresi mutleq qoyulmalidir yoxsa error verecek -->
<!-- Ve gorunduyu kimi PHP bunlarin hamisini default olaraq yan yana 1 setrde yazdi -->
<hr>


<?php echo "Comment Lines (Yorum satirlari)";
// ! Comment Lines (Yorum satirlari)
// Bu bir yorum satiridir
#  Bu bir yorum satiridir
/* Bu
        yorumlar
                satirlaridir
*/
?>
<hr>


<?php 
// ! Error Code Events Overview (xetalara umumi baxis):
// * 1 defe echo(print) olsa ";" yazilmaya biler, eger 1den cox echo(print) olsa ";" yazilmasa error olacaq
echo "Error Code Events Overview";
echo "Xetalara umumi baxis";
?>
<hr>


<?php 
// ! Combination Operator (birlesdirme operatoru):
// * 59ci (buradaki ilk setirde 2 echo yazdiqimiz ucun onlari bitisik sekilde ekrana yazdirdi)
// * 60ci (buradaki 2ci setrde ise bir echo icinde . vasitesile birlesdirib yazdiqimiz ucun 2ci echo yazmadiq ve onun icindeki text-e bosluq verdik)
echo "Combination Operator"; echo "birlesdirme operatoru";
echo "Combination Operator"." birlesdirme operatoru";
echo "Combination"." Operator"." birlesdirme"." operatoru";
?>
<hr>


<?php
// ! Variables and Variable Creation Rules (Deyiskenler JSdaki: let var const)
// Todo: PHP-da deyiskenler $ isaresi ile teyin olunur neyese menimsedilmelidir meselen: $firstName = "Fuad"
// * JavaScript-deki let nece isleyirse butun qanunlarda burada kecerlidir BUTUN QANUNLAR (simvollar olmaz "_ atldan xett olar", bosluq qoyula bilmez) 
// * string deyerler " " ve ya '' icerisinde, number deyerlerse ya dirnaq icinde yada dirnaqsiz yazilir
// * CamelCase qayadasina esasen yazilir, reqemlerle baslaya bilmez, ilk her kicik olsa daha yaxsidir 
$firstName = "Fuad";
$lastName = 'Babayev';
$age = 24;
// * ama bu yazdiqimiz deyerler ekran cixmiyacaq bunun ucun echodan istifade olunmalidir
// * Hetta let-de deyerimizi deyisdirdiyimiz kimi buradada deyeri deyismek olur
echo $firstName.$lastName.$age;
$age = 25;
echo $firstName.$lastName.$age;
?>
<hr>


<?php
// ! <br> Line Skip Go Down (<br> Satır Atlatma Aşağı İnme)
// Todo: breaklar 3 cur olur, I. echo "<br>"; II. echo "<br />" ve ya III. echo $firstName."<br>" ve istediyimiz qeder yan yana br yaza bilerik
echo $firstName;
echo "<br>";
echo $lastName;
echo "<br />";
echo $age;
echo "<br>";
echo "<br />";
echo "Hello <br> World";
echo "<br>";
echo "<br />";
echo $firstName."<br>".$lastName."<br />".$age
?>
<hr>


<?php
// ? Misallar (Pratik Değişkenler İle İlgili Örnek Uygulama)
// * buradaki butun qaydalar console.log-da nece idise eledir bosluq, birlesdirmek hamisi
$firstName = "Fuad";
$lastName = 'Babayev';
$phoneNumber = "+994 70 598 58 56";
echo "<h2>About Me</h2>";            // ! Ve en esas mutleq mesele eger <h1></h1> etiketini baglamasaz ondan sonra gelen butun elementleri h1-in icine salacaq
echo "Hello my fullName is: ".$firstName." ".$lastName;
echo "<br>";
echo "Contact me: ".$phoneNumber;
echo "<hr>";                        // * hr-ni burada vermek olar asagida html teq-i kimide vermek olar ama bu cur vermek daha yaxsidir
?>
<hr>


<?php
// ! Mathematical Operation Operators (Matematiksel İşlem Operatörleri)
// Todo: burada bir seyi bilmek lazimdirki JS-da log(3*4) yazsaydiq onu avtomatik hesablayardi 12 yazardi ama PHP-de onu echo "3*4" yazsaq netice olaraq 3*4 cixacaq
// Todo: bunun ucun biz neticeni bir deyiskene menimsedib onu ekran vermeliyik meselene $a=3*4 echo "$a" yazsaq netice 12 kimi gelecek
$number1 = 12;
$number2 = 4;
$total = $number1 + $number2;
$substraction = $number1 - $number2;
$multiply = $number1 * $number2;
$division = $number1 / $number2;

echo "Result: $number1 + $number2 = $total";                    // * Umumi hesabi 1 dirnaqin icinde de yazmaq olar 
echo "<br>";
echo "Toplama: ".$number1." + ".$number2." = ".$total;          // * Umumi hesabi coxlu dirnaqin icinde de yazmaq olar

echo "<br>";
echo "Sum: $number1 + $number2";                        // ! deyiskenler dirnaq icinde olanda hesablanma olmur string kimi mesaj kimi yazir
echo "<br>";
echo "Sum: ".$number1+$number2;                         // ! deyiskenler dirnaqdan kenarda olanda hesablanma aparilir
echo "<br>";
echo "Substraction: $number1 - $number2 = $substraction"; 
echo "<br>";
echo "Multiply: $number1 * $number2 = $multiply "; 
echo "<br>";
echo "Division: $number1 / $number2 = $division";
echo "<br>"; 
echo "3*4";                                             // * Bunu eger console.log(3*4) yazsaqdiq netice 12 olardi, ama PHP-de echo "3*4" netice olaracaq 3*4 gosterir
echo "<br>";
echo "$number1 * $number2";
echo "<hr>";
?>


<?php
// ! Assignment Operators (Atama operatorlari)
// Todo: Deyerleri sonran deyismekde olur uzerinde emeliyyatlar da ede bilirik
$number = 500;
echo "\$number $number degiskenin deyeri ".$number;
echo "<br>";

$number += 200;
// $number = $number + 200; yuxaridaki ile tamamile eyni seydir
echo "Yekun degiskenin deyeri: ".$number;
echo "<br>";

$number -= 100;
echo "Yekun degiskenin deyeri: ".$number;
echo "<br>";

$number *= 3;
echo "Yekun degiskenin deyeri: ".$number;
echo "<br>";

$number /= 90;
echo "Yekun degiskenin deyeri: ".$number;
echo "<br>";
echo "<hr>";
?>


<?php
// ! Increment and Decrement Operators (Artirma ve eksiltme operatorlari)
// Todo: Deyerleri sonran deyismekde olur uzerinde emeliyyatlar da ede bilirik artirib azaldada bilerik
$number3 = 10;
echo "Sonuncu netice: $number3";
echo "<br>";

$number3++;
// $number3 = $number3 + 1; yuxaridaki ile tamamile eyni seydir
echo "Sonuncu netice: $number3";
echo "<br>";

$number3--;
echo "Sonuncu netice: $number3";
echo "<br>";
echo "<hr>";
?>


<?php
// ! A Look at Ready-made Functions and a Practical Application (Hazir funksiyalara genel baxis)
// ! Funksiyalar direkt olaraq echo-nun icinde istifade oluna bilmir
// Todo: PHP-de 1000-lerle hazir funksiyalar var, ezbere bilmeye ehtiyac yoxdur  https://www.php.net/ saytinda butun hazir funksiyalar var
// Todo: rand(a, b) — Generate a random integer between a and b (her 2 teref daxildir)
echo rand(0, 10); echo "<br>";                                   // * PHP-de hazir funksiyadir 0 ile 10 arasi butun tam ededleri alir
echo "rand(0, 10)";                                              // * Funksiyalar direkt olaraq echo-nun icinde istifade oluna bilmideiyi ucun rand(0, 10) yazir
echo "<br>";
// ? buna aid misal
$randomNumbers = rand(0, 100);
if ($randomNumbers > 50){
    echo "You Win!: score = $randomNumbers";
} else {
    echo "You Lose!: score = $randomNumbers";
}
echo "<hr>";
?>


<?php
// ! Differences Between Single Quotes and Double Quotes (Tek Tırnak ve Çift Tırnak Arasında ki Farklar)
// Todo: Cut dirnaq icindeki deyiskenin deyerleri oxunabilir, tek dirnaqin icindeki deyerlerse oxunmur
// * Double quotes HTML-ni basa dusur Single Quotes text kimi anlayir   
$quotes = "Single Quotes and Double Quotes";
echo "$quotes";                                   // * cut dirnaqlar $quotes-in deyerini oxuya bildi, ve neticeni ekrana cixardi
echo "<br>";
echo '$quotes';                                   // * tek dirnaqlar $quotes-in deyerini oxuya bilmedi, ve neticeni ekrana cixarmadi
echo "<hr>";
?>


<?php
// ! Ignore, Escape Signs (Yoksayma ve kacis)
// Todo: qosa cut dirnaq qoyanda JS-da olduqu kimi PHP-dada tanimir beyni yanir onlardan qacmaq ucun \ istifade edecik
$ignore = "Escape";
echo "I use quotes $ignore for read"; echo "<br>";        // * Escape
echo 'I use quotes $ignore for read'; echo "<br>";        // * $ignore
echo "I use quotes '$ignore' for read"; echo "<br>";      // * 'Escape'
echo 'I use quotes "$ignore" for read'; echo "<br>";      // * "$ignore"
// ? Ilk olaraq hansi qoute ile baslayirsa sona qeder de onun qanunlarini goturur

// * bunlarin qarisi almaq ucun Ignore, Escape Signs (\) istifade olunacaq:
// * Escape Signs-den qosa cut dirnaqlardan qurtulmaq ucun yeniki error vermemesi ucun istifade olunur
// * Ignore-den deyiskeni oldurmek ucun istade olunur, yeni baxmayraqki cut dirnaq icindedir neticeye $ignore yazacaq (escape yazmayacaq)
echo "I \"use\" quotes \$ignore for read"; echo "<br>"; 
echo "<hr>";
?>


<?php
// ! Frequently Used Ready String Text Functions and Practical Applications (Hazir string funksiyalar)
// Todo: strtolower($metn)          butun herfleri lowercase (kicik herf) edir
// Todo: strtoupperr($metn)         butun herfleri uppercase (boyuk herf) edir
// Todo: ucwords($metn)             butun sozlerdeki ilk herfleri capitalize (boyuk herf) edir Upper Case Words
// Todo: ucfirst($metn)             mentinde ilk sozunun ilk herfini capitalize (boyuk herf) edir, qalan herflerde hec bir deyisiklik olmur
// Todo: strlen($metn)              mentindeki butun herf, reqem, bosluq, simvollarin uzunluqunu verdi (Eynile JavaScript-deki length property kimi)
// Todo: substr($metn, 5, 25)       parametr kimi 3 deyer alir, I. Metn, II. Hansi uzunluqdan baslasin, III. Hansi uzunluqda dayansin
$sentence = "hello, I am Fuad Babayev and currently I am learning PHP course on UDEMY";           
echo $sentence; echo "<br>";                             // * default variant
echo strtolower($sentence); echo "<br>";                 // * lowercase variant
echo strtoupper($sentence); echo "<br>";                 // * uppercase variant
echo ucwords($sentence); echo "<br>";                    // * capitalize variant
echo ucfirst($sentence); echo "<br>";                    // * ilk elementini capitalize variant
echo strlen($sentence); echo "<br>";                     // * metnin umumi uzunluqu
echo substr($sentence, 4, 17); echo "<br>";              // * metnin uzunluqunun 4-17 araliqindaki hisseni getirdi
echo "<br>";
echo "<br>";
// ? Davamini oxu misali
$paragraph = "Hello Udemy";
$article = "Altaïr Ibn-La'Ahad (Arabic: الطائر ابن لا أحد1165 – 1257) was a member of the Levantine Brotherhood of Assassins who served as their Mentor
from 1191 until his death in 1257. During his tenure as Mentor, through the knowledge of an Apple of Eden, Altaïr made several discoveries and inventions 
that greatly helped the Order's progression. His leadership saw to the spread of the Assassins' influence throughout Europe and Asia. Raised to be 
an Assassin from birth, Altaïr became a Master Assassin at age 25,[1] an accomplishment unheard of for one so young.[2] He failed to recover an 
Apple of Eden from Robert de Sablé in July 1191 and subsequently allowed the Templars to attack the town of Masyaf, headquarters of the Assassins. <br> <br>
For this, he was demoted to the rank of novice and sent on a quest for redemption. Tasked with the deaths of nine individuals who, unbeknownst to him, 
made up the ranks of the Templar Order in the Holy Land, Altaïr began a quest to change his ways and liberate the Kingdom from their corruption. 
During his quest, however, Altaïr learned of a plot far more sinister than he originally believed. In completing his mission, he also cleansed 
the Order of its treacherous leader Al Mualim. Altaïr thereafter became Mentor, taking the Assassins in a new, more secretive direction. <br> <br>
Altaïr Ibn-La'Ahad (Arabic: الطائر ابن لا أحد1165 – 1257) was a member of the Levantine Brotherhood of Assassins who served as their Mentor
from 1191 until his death in 1257. During his tenure as Mentor, through the knowledge of an Apple of Eden, Altaïr made several discoveries and inventions 
that greatly helped the Order's progression. His leadership saw to the spread of the Assassins' influence throughout Europe and Asia. Raised to be 
an Assassin from birth, Altaïr became a Master Assassin at age 25,[1] an accomplishment unheard of for one so young.[2] He failed to recover an 
Apple of Eden from Robert de Sablé in July 1191 and subsequently allowed the Templars to attack the town of Masyaf, headquarters of the Assassins. <br> <br>
For this, he was demoted to the rank of novice and sent on a quest for redemption. Tasked with the deaths of nine individuals who, unbeknownst to him, 
made up the ranks of the Templar Order in the Holy Land, Altaïr began a quest to change his ways and liberate the Kingdom from their corruption. 
During his quest, however, Altaïr learned of a plot far more sinister than he originally believed. In completing his mission, he also cleansed 
the Order of its treacherous leader Al Mualim. Altaïr thereafter became Mentor, taking the Assassins in a new, more secretive direction. <br> <br>
Altaïr Ibn-La'Ahad (Arabic: الطائر ابن لا أحد1165 – 1257) was a member of the Levantine Brotherhood of Assassins who served as their Mentor
from 1191 until his death in 1257. During his tenure as Mentor, through the knowledge of an Apple of Eden, Altaïr made several discoveries and inventions 
that greatly helped the Order's progression. His leadership saw to the spread of the Assassins' influence throughout Europe and Asia. Raised to be 
an Assassin from birth, Altaïr became a Master Assassin at age 25,[1] an accomplishment unheard of for one so young.[2] He failed to recover an 
Apple of Eden from Robert de Sablé in July 1191 and subsequently allowed the Templars to attack the town of Masyaf, headquarters of the Assassins. <br> <br>
For this, he was demoted to the rank of novice and sent on a quest for redemption. Tasked with the deaths of nine individuals who, unbeknownst to him, 
made up the ranks of the Templar Order in the Holy Land, Altaïr began a quest to change his ways and liberate the Kingdom from their corruption. 
During his quest, however, Altaïr learned of a plot far more sinister than he originally believed. In completing his mission, he also cleansed 
the Order of its treacherous leader Al Mualim. Altaïr thereafter became Mentor, taking the Assassins in a new, more secretive direction. <br> <br>
Altaïr Ibn-La'Ahad (Arabic: الطائر ابن لا أحد1165 – 1257) was a member of the Levantine Brotherhood of Assassins who served as their Mentor
from 1191 until his death in 1257. During his tenure as Mentor, through the knowledge of an Apple of Eden, Altaïr made several discoveries and inventions 
that greatly helped the Order's progression. His leadership saw to the spread of the Assassins' influence throughout Europe and Asia. Raised to be 
an Assassin from birth, Altaïr became a Master Assassin at age 25,[1] an accomplishment unheard of for one so young.[2] He failed to recover an 
Apple of Eden from Robert de Sablé in July 1191 and subsequently allowed the Templars to attack the town of Masyaf, headquarters of the Assassins. <br> <br>
For this, he was demoted to the rank of novice and sent on a quest for redemption. Tasked with the deaths of nine individuals who, unbeknownst to him, 
made up the ranks of the Templar Order in the Holy Land, Altaïr began a quest to change his ways and liberate the Kingdom from their corruption. 
During his quest, however, Altaïr learned of a plot far more sinister than he originally believed. In completing his mission, he also cleansed 
the Order of its treacherous leader Al Mualim. Altaïr thereafter became Mentor, taking the Assassins in a new, more secretive direction.";
echo "<h1>Altaïr Ibn-La'Ahad</h1>"; 
echo "<p> $paragraph </p>";
echo "<p>".$paragraph."</p>";
// ! echo "<p> substr($article, 0, 192) </p>";       yazilis sehv olduqu ucun islemir cunki echo cut dirnaq icinde funksiyalari tanimir
echo "<p>".substr($article, 0, 584)." ...</p>";       // * echo-nun icinde olduqu ucun birlesdirme operatoru ile ayirmaq lazimdirki oxusun
echo "<a href=\"#\">Davamini oxu</a>";
echo "<hr>";
?>
</body>
</html>