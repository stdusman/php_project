<?php
$fn = $_POST['NameFile'];
$m = $_POST ['mode'];
$Text1 = $_POST['Text1'];
$Text2 = $_POST ['Text2'];
$Text3 = $_POST ['Text3'];



switch ($m) {
    case 'r':
        $ff = fopen($fn,$m) or die("ไม่สามารถสร้างได้");
        echo fread($ff,filesize($fn));
        break;
    case 'w':
        $ff = fopen($fn,$m) or die("ไม่สามารถสร้างได้");
        fwrite($ff,$Text1."\n");
        fwrite($ff,$Text2."\n");
        fwrite($ff,$Text3."\n");
        fclose($ff);
        header('location: work_filehanling.html');
        break;
        
   case 'a':
        $ff = fopen($fn,$m) or die("ไม่สามารถสร้างได้");
        fwrite($ff,$Text1."\n");
        fwrite($ff,$Text2."\n");
        fwrite($ff,$Text3);
        fclose($ff);
        header('location: work_filehanling.html');
        break;

}   

?>