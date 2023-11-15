<?php

       //if  1 codition => true
       // odd => 0 2 4 6 8
       // even => 1 3 5 7 9

       $num1 = 56814; 
       if($num1 % 2 == 0){
           echo "เลขคู่" ;
       }
       
       echo "<hr color='green'>" ;
       //if else
       $num2 = 451285745;
       if($num2 % 2 == 0){
        echo "เลขคู่" ;
       }else{
        echo "เลขคี่" ;
       }
    
       echo "<hr color='green'>" ; 

       //if elseif else
       $led = "red" ;
       if($led == "green"){
        echo "ไปได้" ;
       }elseif($led == "yellow") {
        echo "ชะลอ" ;
       }else{
        echo "หยุด" ;
       }
       
       echo "<hr color='green'>" ; 
         

       // คำนำหน้า (นาย/นาง/นางสาว/ด.ช/ด.ญ.)
       $prefix = "นางสาว" ;
       if($prefix == "นาง"){
         echo "ผู้หญิง";
       }elseif($prefix == "นาย"){
        echo "ผู้ชาย";
       }elseif($prefix == "นางสาว"){
        echo "นางสาว";
       }elseif($prefix == "ด.ช"){
        echo "เด็กชายชาย";
       }else{
        echo "ผู้หญิง";
       }

 
       echo "<hr color='green'>" ; 
       //switch
       switch ($prefix) {
        case 'นาย':
            echo "ผู้ชาย";
            break;
        
        case 'ด.ช':
                echo "เด็กชาย";
                break;
        case 'นางสาว':
                echo "ผู้ชาย";
                break;
        case 'นาง':
                echo "ผู้หญิง";
                break;
        default:
                echo "ผู้หญิง";
            break;
       }
?>