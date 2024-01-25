<?php
   session_start();
   $u = $_SESSION['uname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูลประวัติส่วนตัว</title>
    <style>
        .logo{
            width: 100px;
            margin: 0 auto;
            align-items: center;
            display: block;
            filter: drop-shadow(10px 8px 6px #ff0055);
        }
        .sigin,input{
           display: block;
           margin-left: auto;
           margin-right: auto;
           width: 200px;
           height: 25px;
           padding-left: 20px;
           margin-top: 4.3px;
           border: 2.8px dashed slateblue;
        }
        .sigin,button[type=submit]{
            display: block;
           margin-left: auto;
           margin-right: auto;
           width: 224px;
           height: 25px;
           border: 2.8px dashed palevioletred;
           background-color: rgb(234, 255, 0);
           color: black;
           border-radius: 15px;
           margin-top: 10px;
           cursor: pointer; 
        }
        /* .sigin ,select{
            display: block;
           margin-left: auto;
           margin-right: auto;
           width: 224px;
           height: 25px;
           border: 2.8px dashed whitesmoke;
           background-color: yellowgreen;
           color: black;
           border-radius: 15px;
           margin-top: 10px;
           cursor: pointer; 
        } */
        .content{
          border: 1.5px solid gainsboro;
          width: 350px;
          display: block;
          margin-left: auto;
          margin-right: auto;
          margin-top: 45px;
          background-color: #cccccc ;
          border-radius: 10% 15%;
          height: 350px;
        }
    </style>
</head>
<body>
    <div class="content">
    <img src="images/user.png" alt="user logo" class="logo">
    <h2 style="text-align: center;">เพิ่มข้อมูล/แก้ไขประวัติส่วนตัว</h2>
    <form action="process_update_profile.php" method="post" enctype="multipart/form-data">
    <div class="signin">
         <input type="text" name="fullname" placeholder="ชื่อ - สกุล">
         <input type="text" name="depname" placeholder="สาขาวิชา">
         <input type="text" name="gpa" placeholder="เกรดเแลี่ย">
         <input type="file" name="avatar" >
         <button type="submit">เพิ่มข้อมูล/แก้ไข</button>
    </div>
    </form>
    </div>
</body>
</html>