<?php

$fn = "dictionary1.txt";
$fm = "w";
$ff = fopen($fn,$fm) or die("ไม่ลบข้อมูลในไฟล์ได้ หรือ ไม่สามารถสร้างได้");
fclose($ff);



?>