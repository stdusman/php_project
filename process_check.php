<?php

    $num = $_POST['num'];
    
    if($num % 2 == 0){
        echo "<h2 style='color: wheat; margin: 100px;'> เลขคู่ </h2>"  ;
       }else{
        echo  "<h2 style='color: green; margin: 100px;'> เลขคี่ </h2>" ;
       }
    


?>