
<?php
   include "config.php";
   session_start();

   $u = $_SESSION['uname'];

   $sql = "SELECT * FROM profile WHERE uname = '$u'"; 
   $qry = mysqli_query($conn,$sql);

   if(mysqli_num_rows($qry) == 0){
    echo "ไม่มีข้อมูล";
    exit;
 }
   $result = mysqli_fetch_array($qry); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         a{
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
    </style>
</head>
<body>
<a href="update_profile.php" target="_blank">ปรับปรุงข้อมูลประวัติส่วนตัว</a>
<img src="images/<?php echo $result['photo'];?>" alt="profile">
<table>
        <tr>
            <th style="border: 1px solid green;">ชื่อ - สกุล</th>
            <td style="border: 1px solid green;"><?php echo $result['fullname'];?></td>
        </tr>
        
        <tr>
            <th style="border: 1px solid green;">สาขาวิชา</th>
            <td style="border: 1px solid green;"><?php echo $result['depname'];?></td>
        </tr>

        <tr>
            <th style="border: 1px solid green;">เกรดเฉลี่ย</th>
            <td style="border: 1px solid green;"><?php echo $result['gpa'];?></td>
        </tr>
  </table>
   <?php mysqli_close($conn); ?>
</body>
</html>