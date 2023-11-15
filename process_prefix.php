<?php

    $prefix = $_POST['text'];
    
    // $prefix = "นาย" ;
    if($prefix == "นาง"){
      echo "ผู้หญิง";
    }elseif($prefix == "นาย"){
     echo "ผู้ชาย";
    }elseif($prefix == "นางสาว"){
     echo "นางสาว";
    }elseif($prefix == "ด.ช"){
     echo "เด็กชาย";
    }else{
     echo "เด็กหญิง";
    }
    


?>