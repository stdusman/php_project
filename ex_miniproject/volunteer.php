
<?php
   include "config.php";
   session_start();

   $u = $_SESSION['uname'];

   $sql = "SELECT * FROM todo WHERE uname = '$u'"; 
   $qry = mysqli_query($conn,$sql);

   if(mysqli_num_rows($qry) == 0){
      echo "ไม่มีข้อมูล...<br><br><br>";
      echo " <a href='home.php' target='_parent'>";
      echo "<button style='background-color:green; width: 150px;height: 25px;color: white;'>";
      echo "เพิ่มข้อมูลจิตอาสา</button></a>";
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
   
<a href="add_volunteer.php" target="_parent">เพิ่มข้อมูลกิจกรรมจิตอาสา</a>
<table>
        <tr>
           <th style="border: 1px solid green;">กิจกรรม</th>
           <th style="border: 1px solid green;">สถานที่</th>
           <th style="border: 1px solid green;">จำนวนชั่วโมง</th>
           <th style="border: 1px solid green;">วันเดือนปี</th>
           <th style="border: 1px solid green;">ดำเนิน</th>
        </tr>
        <?php while($result = mysqli_fetch_array($qry) ){?>
        <tr>
           <td style="border: 1px solid green;"><?php echo $result['volunteer'];?></td>
           <td style="border: 1px solid green;"><?php echo $result['location'];?></td>
           <td style="border: 1px solid green;"><?php echo $result['hours'];?></td>
           <td style="border: 1px solid green;"><?php echo $result['event_date'];?></td>
           <td style="border: 1px solid green;">
           </td>
           <td>
             <form action="edit_volunteer.php" method="post">
             <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
             <button type="submit">แก้ไขข้อมูล</button>
             </form>
             <td>
             <form action="delete_volunteer.php" method="post">
             <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
             <button type="submit">ลบข้อมูล</button>
             </form>
           </td>
        </tr>
        <?php } ?>
  </table>
   <?php mysqli_close($conn); ?>
</body>
</html>