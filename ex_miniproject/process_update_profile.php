<?php
   
   include 'config.php';
   session_start();

   $fn = $_POST['fullname'];
   $dn = $_POST['depname'];
   $gpa = $_POST['gpa'];
   

   $u = $_SESSION['uname'];
   //uploadfile
   $folder_name = "imges/";
   $new_file = $u."_".$FILES['avatar']['name'];
   $base_name = $folder_name.$new_file ;
   $ext_name = strtolower (pathinfo($base_name,PATHINFO_EXTENSION));
   $file_imge = getimagesize($_FILES['avatar']['name']);
   $file_size = $_FILES['avatar']['size'];
   if($file_size == false){
    echo "คุณไม่ได้ส่งรูป";
 }elseif ($ext_name != "jpg " && $ext_name != "jpeg" && $ext_name != "png") {
     echo "คุณไม่ได้ส่งรูป jpg /jpeg/png";
 }elseif($file_size > 200000){
     echo "คุณส่งไฟล์ใหญ่เกิน 200KB";
 }else{
     
   $sql1 = "UPDATE profile SET fullname = '$fn', depname = '$dn',gpa = '$gpa',photo = '$new_file' WHERE uname = '$u'"; 
   $qry1 = mysqli_query($conn,$sql1);
   if (!$qry1) {
       echo "เพิ่มข้อมูลไม่สำเร็จ";
       header("refresh:3; url = signup.html");
   }else {
        echo "เพิ่มข้อมูลสำเร็จ";
        header("refresh:3; url = home.php");
      }  
   

 }




 




?>