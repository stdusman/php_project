<?php
   
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $sign = $_GET['sign'];

   function calculator($num1,$num2,$sign){
       switch ($sign) {
        case 'plus':
        echo "<body style='font-size:30px; text-align: center;margin-top 150px; '>";
        echo $num1."+".$num2 ."=". ($num1 + $num2);
            break;

        case 'minas':
           echo "<body style='font-size:30px; text-align: center;margin-top 150px; '>";
           echo $num1."-".$num2 ."=".($num1 - $num2);
            break;

        case 'multiply':
            echo "<body style='font-size:30px; text-align: center;margin-top 150px; '>";
            echo $num1."x".$num2 ."=".($num1 * $num2);
             break;
      
        default:
            echo "<body style='font-size:30px; text-align: center;margin-top 150px; '>";
            echo $num1."÷".$num2 ."=".($num1 / $num2);
            break;
       }
   }



   calculator($num1,$num2,$sign);






?>