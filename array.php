<?php

     $student = array("Usman","Weera","Peera","Meera");
     
     echo $student[0]."".$student[1]."".$student[2]."".$student[3];
     echo"<br>";
     echo count($student);
     
     //Indexarray
     echo "<hr color='green'>";
     
    $grade = array(1.11,2.22,3.33,4.00,1.23,2.34,3.45);
    $num = count($grade);

     for ($x = 0;$x < $num;$x++) { 
        echo "เกรด : ".$grade[$x]."<br>";
     }
    
     echo "<hr color='green'>";
     
     foreach($grade as $a => $y){
       echo "เกรด". $a.":".$y ."<br>";
     }
    
     //Associative array
     echo "<hr color='green'>";

     $fruits = array(
        "Apple"=>"35",
        "Banana"=>"40",
        "Grape"=>"80",
        "Strawberry"=>"3000", 
        "Papaya"=>"50",
        "Durian"=>"5000",
        "Orange"=>"40"
     );

     foreach($fruits as $fr => $vl){
        echo "ผลไม้". $fr."ราคา".$vl." บาท/กิโลกรัม<br>";
     }

     //Multidimensional array
     echo "<hr color='green'>";

     $std =array(
        array("101","Usman","IT",3.50),
        array("102","Kampol","BC",2.50),
        array("103","Sulkiplee","AC",3.75),
        array("104","Furkon","MC",2.15),
        array("104","Abdulhafis","FT",3.99)
     );

     echo $std[2][1]."<br>";
     echo "นาย".$std[3][1]. "เกรด".$std[3][3]."<br>";
     
     $c = count($std);
     for ($a = 0;$a < $c;$a++) { 
        echo "ผลการเรียน ปวส.1(2566)";
       for ($b = 0; $b < 4 ; $b++) {
           echo "<li>";
           echo $std[$a][$b];
           
       }
       echo "</li>";
       echo "<hr color='green'>";
     }

     // Sorting Arrays
      //sort() - sort arrays in ascending order
      sort($grade);
      foreach ($grade as $a => $y) {
        echo "เกรด".":".$y ."<br>";
      }
      echo "<hr color='green'>";


      //rsort() - sort arrays in descending order
      rsort($grade);
      foreach ($grade as $a => $y) {
        echo "เกรด".":".$y ."<br>";
      }
      echo "<hr color='green'>";

      //asort() - sort associative arrays in ascending order, according to the value
      asort($fruits);
      foreach($fruits as $fr => $vl){
        echo "ผลไม้". $fr."ราคา".$vl." บาท/กิโลกรัม<br>";
     }
     echo "<hr color='green'>";


     //ksort() - sort associative arrays in ascending order, according to the key
     ksort($fruits);
      foreach($fruits as $fr => $vl){
        echo "ผลไม้". $fr."ราคา".$vl." บาท/กิโลกรัม<br>";
     }
     echo "<hr color='green'>"; 

     //arsort() - sort associative arrays in descending order, according to the value
     arsort($fruits);
     foreach($fruits as $fr => $vl){
        echo "ผลไม้". $fr."ราคา".$vl." บาท/กิโลกรัม<br>";
     }
     echo "<hr color='green'>"; 

     //krsort() - sort associative arrays in descending order, according to the key
     krsort($fruits);
     foreach($fruits as $fr => $vl){
        echo "ผลไม้". $fr."ราคา".$vl." บาท/กิโลกรัม<br>";
     }
     echo "<hr color='green'>"; 


?>   
