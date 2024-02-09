<?php
include "config.php";
session_start();
$id = $_POST['id'];

$sql ="SELECT * FROM todo WHERE id ='$id'";
$qry = mysqli_query($conn,$sql);
$result = mysqli_fetch_assoc($qry);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            a{
            background-color:#333;
            float: left;
            color: White;
            padding:14px 16px;
            text-decoration: none;
            text-align:center;
            font-size :16px;
            margin: right 15px;
           
        }
        a:hover{
            background-color:green;
            color: while;
        }
        table{
            display: block;
            margin: right ;

        }
        


    </style>
</head>
<body> 
    <h2>เเก้ไขข้อมูล</h2>
    <form action="process_edit_volunteer.php" method="post">
<table>
    <tr>
        <th style="border: 1px solid red;"><b>กิจกรมม</th>
        <td style="border: 1px solid red;">
          <input type="text" name="vo" value="<?php echo $result['volunteer']; ?>">
        </td>
   </tr>

    <tr>
        <th style="border: 1px solid red;"><b>สถานที่</th>
        <td style="border: 1px solid red;">
          <input type="text" name="lo" value="<?php echo $result['location']; ?>">
        </td>
    </tr>

    <tr>
        <th style="border: 1px solid red;"><b>จำนวนชั่วโมง</th>
        <td style="border: 1px solid red;">
          <input type="text" name="ho" value="<?php echo $result['hours']; ?>">
        </td>

    </tr>

    <tr>
        <th style="border: 1px solid red;"><b>วันเดือนปี</th>
        <td style="border: 1px solid red;">
          <input type="text" name="ev" value="<?php echo $result['event_data']; ?>">
        </td>
    </tr>

    <tr>
        <td colspan="2">
           <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
            <button type="submit">
                บันทึกข้อมูล
            </button>
        </td>
    </tr>
</table>
</form>
<?php mysqli_close($conn);?>
</body>
</html>