<?php
     
   session_start();
   session_unset();
   session_destroy();

   echo "<h2>คุณได้ออกจากระบบแล้ว</h2>";
   echo "<h3>รอสักครู่.....</h3>";
   header("refresh:3; url = index.html");


?>