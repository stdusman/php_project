<?php

// กำหนดคำสั่งพื้นหลัง <body style='background-color: green;'>
 $day = date ('l');
//  $day ="wedn" ;
 switch ($day) {
    case 'Monday':
        echo "<body style='background-color: yellow;'>";
        break;
    case 'Thesday':
        echo "<body style='background-color: pink;'>";
        break;
    case 'Wednesday':
         echo "<body style='background-color: green;'>";
         break;
    case 'Thursday':
         echo "<body style='background-color: orange;'>";
         break;
            
    case 'Friday':
          echo "<body style='background-color: blue;'>";
          break;
    case 'Saturday':
          echo "<body style='background-color: violet;'>";
          break;  
   
    
    default:
         echo "<body style='background-color: red;'>";
        break;
  }



?>