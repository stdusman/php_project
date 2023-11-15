<?php
     
     $n = $_POST['n'];
     $pre = $_POST['pre'];
     $num= $_POST['m'];
     

   
    while ($pre <= $num) {
        echo $n. " x ".$pre." = ".($n * $pre);
        echo "<br>";
        $pre++;
    }




?>