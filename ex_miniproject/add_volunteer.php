<?php

include "config.php";
session_start();

$u = $_SESSION['uname'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>เพิ่มข้อมูลกิจกรรมจิตอาสา</title>
    <style>
      .add input{
           display: block;
           margin-left: auto;
           margin-right: auto;
           width: 200px;
           height: 25px;
           padding-left: 20px;
           margin-top: 4.3px;
           border: 2.8px dashed #37A980;
        }
        .add button{
            display: block;
           margin-left: auto;
           margin-right: auto;
           width: 224px;
           height: 25px;
           border: 2.8px dashed #5A4C2D;
           background-color: #DBFF33;
           color: black;
           border-radius: 15px;
           margin-top: 10px;
           cursor: pointer; 
        }
        a{  
            display: block;
            background-color: #333;
            float: left;
            color: azure;
            padding: 14px 16px;
            text-decoration: none;
            text-align: center;
            font-size: 16px;
            margin-right: 15px;
            
        }
         a:hover{
            background-color: aliceblue;
            color: darkcyan;
        }
        h2{
            text-align: center;
            
        }
    </style>
</head>
<body>
    <h2>เพิ่มข้อมูลกิจกรรมจิตอาสา</h2>
    <form action="process_add_volunteer.php" method="post">
        <div class="add">
        <form action="process_add_volunteer.php" method="post"></form>
           <input type="text" placeholder="กิจกรรม" name="volunteer" >
           <input type="text" placeholder="สถานที่" name="location">
           <input type="number" placeholder="จำนวนชั่วโมง" name="hours">
           <input type="date" placeholder="วันเดือนปี" name="dayevent">
           <button type="submit">บันทึกข้อมูล</button>
    </div>
    </form>
    
        <a href="home.php">
           <button>กลับไปหน้า profile</button>
        </a>
    
</body>
</html>