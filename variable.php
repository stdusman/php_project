 <?php

   $nuber;
   $firsname;
   $test =99+1;
   echo $test."<br>";

   $_test ="99+1";
   echo $_test."<br>";

   $x =10;
   $y ="10";
   echo $x + $y ;
   echo "<br>";
   $name_1;
   $test_;
   $student = "Usman";

   echo $student;
   echo "<br>";
   echo "My Name is" .$student. "<br>";
   echo "My Name is, $student <br>";
   echo "Hello, $student <br>";

   $z =10; 
   function num(){
    static $x =50;
    $z =20;
    echo $z;
   }

   echo $z;
   echo "<br>";
   num();

   $std = "Student";
   echo "You are $std <br>";
   echo 'you are $std <br>';
   echo( "You are $std <br>");

   print "You are $std <br>";
   print'you are $std <br>';
   print( "You are $std <br>");
 ?>  