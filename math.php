<?php  

    echo pi();
    echo "<br>";   
    // echo 22/7;
 
    $r =4;
    $area = pi() * $r * $r;
    echo "<br>";
    echo $area;
    echo "<br>";
    
    $num = [1,2,4,56,8,25,3,1,44,88,55,33,22,44,58,77];
    echo min($num);
    echo "<br>";
    echo max($num);
    echo "<br>";

    echo abs(-99.99);
    echo "<br>";
    echo sqrt(232);
    echo "<br>";
    echo round(3.49);
    echo "<br>";
    echo rand(10000000,99999999);
    
?>