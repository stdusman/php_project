<?php


        $num1 = 1;

        // แสดงเลข 1 ถึง 5
        while($num1 <= 5){
            echo $num1."<br>";
            $num1++;
        }

        echo "<hr color='red'>";

        $num2 = 10;
        // แสดงเลข 10 ถึง 1
        while($num2 >= 1){
            echo $num2."<br>";
            $num2--;
        }

        echo "<hr color='red'>";

        $num3 = 10;
        // แสดงเลข 10 ถึง 100
        // ให้เพิ่มทีละ 5
        while($num3 <= 100){
            echo $num3."<br>";
            $num3 = $num3 + 5;
            // $num3 += 5
        }

        echo "<hr color='red'>";

        $num4 = 100;
        // แสดงเลข 0 ถึง 100
        // ให้ลดทีละ 10
        while($num4 >= 10){
            echo $num4."<br>";
            $num4 = $num4 - 10;
        }

        
        $m = 66;
        $pre = 1;
        $n = 66;
        while ($pre <= $n) {
            echo $m. " x ".$pre." = ".($m * $pre);
            echo "<br>";
            $pre++;
        }


?>