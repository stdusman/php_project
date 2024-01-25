<?php
   
   include 'config.php';
   session_start();

   $u= $_POST['username'];
   $p= $_POST['password'];
    
   $sha_p = sha1($p);
   

   $sql = "SELECT * FROM account WHERE uname = '$u' AND passwd = '$sha_p' "; 
   //    echo $sql;
   $qry = mysqli_query($conn,$sql);
   $result = mysqli_fetch_array($qry);
   if (!$result) {
       echo "Username OR Password incorrected!!!";
       header("refresh:3; url = index.html");
   }else {
       if ($result['level']== "admin") {
          header("refresh:1; url = admin/index.php");
       }else {
          $_SESSION['uname'] = $result['uname'];
          header("refresh:1; url = home.php");
       }
    
   }
?>