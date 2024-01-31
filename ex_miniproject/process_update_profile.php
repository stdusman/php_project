<?php
   
   include 'config.php';
   session_start();

   $fn = $_POST['fullname'];
   $dn = $_POST['depname'];
   $gpa = $_POST['gpa'];
   

   $u = $_SESSION['uname'];
   //uploadfile
   $file =$_FILES['avatar']['name'];
   $folder_name = "images/";
   $new_file = $u."_".$file;
   $base_name = $folder_name.$new_file;
   $ext_name = strtolower(pathinfo($base_name,PATHINFO_EXTENSION));
   $file_image = getimagesize($_FILES['avatar']['tmp_name']);
   $file_size = $_FILES['avatar']['size'];
   if($file_image == false){
    echo "คุณไม่ได้ส่งรูปภาพ";
 }elseif ($ext_name != "jpg" && $ext_name != "jpeg" && $ext_name != "png") {
     echo "คุณไม่ได้ส่งรูปภาพนามสกุล jpg /jpeg/";
 }elseif($file_size > 300000){
     echo "คุณส่งรูปภาพใหญ่เกิน 300KB";
 }else{
   move_uploaded_file($_FILES['avatar']['tmp_name'],$base_name);  
   $sql1 = "UPDATE profile SET fullname = '$fn', depname = '$dn',gpa = '$gpa',photo = '$new_file' WHERE uname = '$u'"; 
   $qry1 = mysqli_query($conn,$sql1);
   if (!$qry1) {
       echo "ปรับปรุงข้อมูลไม่สำเร็จ";
       header("refresh:3; url = signup.html");
   }else {
        echo "ปรับปรุงข้อมูลสำเร็จ";
        header("refresh:3; url = home.php");
      }  
   

 }




 




?>