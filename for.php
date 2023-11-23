<?php
    //จงแสดงโปรแกรม 1-10 for
   for($num1 = 1; $num1 <= 10; $num1++){
    echo $num1."<br>";
   }
    
   echo "<hr color='green'>";
    //จงแสดงโปรแกรม 100-10 for
    for($num2 = 100; $num2 >= 10; $num2-=10){
        echo $num2."<br>";
       } 
   
    
       echo "<hr color='green'>";
    
    $m = 66;
    $n = 12;  
    for($pre = 1;  $pre <= $n; $pre++ ){
        echo $m. " x ".$pre." = ".($m * $pre);
        echo "<br>"; 
    }

?>