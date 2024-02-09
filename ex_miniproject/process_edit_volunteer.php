<?php

include "config.php";
session_start();

$id = $_POST['id'];
$vo = $_POST['vo'];
$lo = $_POST['lo'];
$ho = $_POST['ho'];
$ev = $_POST['ev'];

$sql = "UPDATE todo SET volunteer='$vo',location='$lo',hours='$ho',event_date='$ev' WHERE id = '$id'";
$qry = mysqli_query($conn,$sql);
// $result = mysqli_fetch_assoc($qry); 
   if(!$qry){
      echo "ไม่สามารถแก้ไขข้อมูลได้";
   }else{
    echo "แก้ไขข้ลเรียบร้อยแล้ว";
   }


?>