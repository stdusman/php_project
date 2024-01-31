<?php
    
    include "config.php";
    session_start();

    

   $ve = $_POST['volunteer'];
   $lo = $_POST['location'];
   $ho = $_POST['hours'];
   $da = $_POST['dayevent'];
   $un = $_SESSION['uname'];
   
   

   $sql1 = "INSERT INTO tudo VALUES  (0,'$ve','$lo','$ho','$da','$un')"; 
   $qry1 = mysqli_query($conn,$sql1);
   if (!$qry1) {
       echo "ไม่สามารถเพิ่มข้อมูลได้";
       header("refresh:3; url = home.php");
   }else { 
   
        echo "เพิ่มข้อมูลเรียบร้อยแล้ว";
        header("refresh:3; url = home.php");
   }



?>