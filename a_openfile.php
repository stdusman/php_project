<?php

$fn = "dictionary1.txt";
$fm = "w";
$ff = fopen($fn,$fm) or die("ไม่สามารถสร้างได้");
$txt = "Usman\n";
fwrite($ff,$txt);
$txt = "Yalanae\n";
fwrite($ff,$txt);
$txt = "Information Technology\n";
fwrite($ff,$txt);
fclose($ff);



?>