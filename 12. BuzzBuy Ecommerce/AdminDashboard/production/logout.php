<?php
session_start();
session_destroy();
Header("Location: login.php?status=forbidden");
// * Yuxarida gorduyun Sessionlarin her ikisini yazmaq mutleqdir istifade cixis etdikde diger sehifelerdende avtomatik cixis etmek ucundur
?>