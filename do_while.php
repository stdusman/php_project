<?php

    $num1 = 1; 

    do {
        echo $num1."<br>";
        $num1++;
    } while ($num1 <= 10) ;

    echo "<hr color='red'>";
    
    $num2 = 10;

    do { 
        echo $num2."<br>";
        $num2--;
    } while($num2 >= 1) ;

    echo "<hr color='red'>";
   
    $num3 = 10;

    do {
        echo $num3."<br>";
            $num3 = $num3 + 5;
    } while($num3 <= 100);

    echo "<hr color='red'>";
    
    $num4 = 100;

    do{
        echo $num4."<br>";
            $num4 = $num4 - 10;
    } while($num4 >= 10);

    echo "<hr color='red'>";

    $m = 66;
    $pre = 1;
    $n = 66;

    do{
        echo $m. " x ".$pre." = ".($m * $pre);
        echo "<br>";
        $pre++;
    } while ($pre <= $n);

?>