<?php

  include 'config.php';
  session_start();
  
  $u = $_SESSION['uname'];

  $sql = "SELECT * FROM profile WHERE uname = '$u'"; 
  $qry = mysqli_query($conn,$sql);
  $result = mysqli_fetch_array($qry);

  //ส่วนของนักศึกษา
  
  include "menu.php";

?>