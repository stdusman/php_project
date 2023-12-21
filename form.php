<?php
    
error_reporting(0);

    echo $_POST['user'];
    echo $_POST['pass'];

    echo "<hr color='green'>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Data</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="">Name</label>
        <input type="text" name="user">
        <label for="">Password</label>
        <input type="password" name="pass" id="">
        <input type="submit" value="Ok">
    </form>

   
</body>
</html>