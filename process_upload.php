<?php

   $folder_name = "file_upload/";
   $base_name = $folder_name.basename( $_FILES['upfile'] ['name']);
   $ext_name = strtolower (pathinfo($base_name,PATHINFO_EXTENSION));
   $file_dup = file_exists($base_name);
   $file_size = $_FILES['upfile']['size'];

   if($file_size == false){
      echo "คุณไม่ได้แนบไฟล์";
   }elseif ($ext_name != "doc       x" && $ext_name != "xlsx") {
       echo "คุณไม่ได้ส่งไฟล์ docx/xlsx";
   }elseif($file_size > 1048576){
       echo "คุณส่งไฟล์ใหญ่เกิน 1MB";
   }elseif ($file_dup) {
       echo "คุณส่งไฟล์ซ้ำ";
   }else {
      move_uploaded_file($_FILES['upfile']['tmp_name'],$base_name);
      echo "ส่งไฟล์เรียบร้อยแล้ว";
   }
   
   
?>