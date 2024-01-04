<?php

   $folder_name = "files/";
   $file_name = $_FILES['upfile'] ['name'];
//    $new_file = date('Ymd'). $_FILES['upfile']['name'];
   //echo $file_name;
//    $base_name = $_FILES['upfile'] ['name'];
//    echo $bese_name;
   
   $base_name = $folder_name.basename( $_FILES['upfile'] ['name']);
//    echo $bese_name;
//    $ext_name = pathinfo($file_name,PATHINFO_EXTENSION);
//    $ext_name = pathinfo($bese_name,PATHINFO_EXTENSION);
   $ext_name = strtolower (pathinfo($base_name,PATHINFO_EXTENSION));
//    echo $ext_name;
   $file_image = getimagesize($_FILES['upfile']['tmp_name']);
//    if($file_image == true){
//     echo "เป็นไฟล์รูปภาพ";
//    }else{
//     echo "ไม่ใช่ไฟล์รูปภาพ";
//    }
   $file_dup = file_exists($base_name);
//    if ($file_dup == false) {
//        echo "ไม่มีไฟล์ซ้ำ";
//    }
   $file_size = $_FILES['upfile']['size'];

   if ($file_image == false) {
        echo "คุณไม่ได้ส่งภาพมา";
   }elseif($ext_name != "jpg" && $ext_name != "่jpeg"){
     echo "ไม่ได้ส่งภาพเป็น jpg";
   }elseif ($file_size > 400000) {
        echo "คุณส่งภาพใหญ่เกิน";
   }elseif ($file_dup) {
       echo "คุณส่งภาพซ้ำ";
   }
   
//  move_uploaded_file($_FILES['upfile']['tmp_name'],"file/".$file_name);
    move_uploaded_file($_FILES['upfile']['tmp_name'],$base_name);
    echo "ส่งรูปภาพเรียนร้อยแล้ว";
?>