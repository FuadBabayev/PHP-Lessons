<?php
session_start();
session_destroy();
Header("Location: index.php");
// * Yuxarida gorduyun Sessionlarin her ikisini yazmaq mutleqdir istifade cixis etdikde diger sehifelerdende avtomatik cixis etmek ucundur
?>