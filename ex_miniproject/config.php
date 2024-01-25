<?php
    
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "phpdata";

//    $conn = mysqli_connect("localhost","root","","phpdata");
    $conn = mysqli_connect($server,$user,$pass,$db);
    if(!$conn){
        echo "Not Connected";
    }

?>
