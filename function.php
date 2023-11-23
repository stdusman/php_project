<?php

     function notifyName(){
        echo "Usman Yalanae";
     }
    
     notifyName();

     echo "<hr color='green'>";

     function factorial($num){
        $x = $num -1;
        while ($x > 1) {
            echo $num *= $x;
            echo "<br>";
            $x--;
        }
     }
    factorial(10);

    echo "<hr color='green'>";
    
    function loveMessage($love){
        echo $love;
    }
    loveMessage("ไปทานข้าวกันไหม?");
    
    echo "<hr color='green'>";
    
    function sum($x,$y){
        echo $x + $y;
    }
    sum(10,11);
?>