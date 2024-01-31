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
      

    </style>
</head>
<body>
    <div class="add">
        <form action="process_add_volunteer.php" method="post"></form>
           <input type="text" name="volunteer">
           <input type="text" name="location">
           <input type="number" name="hours">
           <input type="date" name="dayevent">
           <button type="submit">บันทึกข้อมูล</button>
    </div>
    <a href="home.php">
        <button>กลับไปหน้า profile</button>
    </a>
</body>
</html>