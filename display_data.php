<?php
   
  include 'config.php';
  
  $sql1 = "SHOW TABLES";
  $qry1 = mysqli_query($conn,$sql1);
//   $result1 = mysqli_num_rows($qry1); นับจำนวนข้อมูล
  $result1 = mysqli_fetch_array($qry1); //แสดงข้อมูล
  echo $result1[0];

  echo "<hr color='green'>";

  $sql2 = "SELECT * FROM account";
  $qry2 = mysqli_query($conn,$sql2);
  if (mysqli_num_rows($qry2)==0) {
      echo "ไม่มีข้อมูล";
  }else{
    while ( $result2 = mysqli_fetch_assoc($qry2)) {
         echo "Username:".$result2['uname'];
         echo "Password: ".$result2['passwd'];
         echo "Level: ".$result2['level'];
         echo "<hr color='green'>";
    }
  }

  $qry3 = mysqli_query($conn,$sql2);
  
?>
<html>
  <table>
    <tr>
        <th style="border: 1px solid green;">Username</th>
        <th style="border: 1px solid green;">Password</th>
        <th style="border: 1px solid green;">Level</th>
    </tr>
    <?php  while ( $result3 = mysqli_fetch_array($qry3)){ ?>
     <tr>
        <td style="border: 1px solid green;"><?php echo $result3['uname'];?></td>
        <td style="border: 1px solid green;"><?php echo $result3['passwd'];?></td>
        <td style="border: 1px solid green;"><?php echo $result3['level'];?></td>
    </tr>
    <?php } ?>
  </table>
   <?php mysqli_close($conn); ?>
</html>