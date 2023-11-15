<?php

  $name = "Usman";
  $grade = "3.96";
  $score ="99";
  $fullname ="yalanae";
  $user ="admin";
  $sql ="SELECT * FROM std WHERE user ='$user'" ;
  $word ="I Love You";
  $search = "I ' am study at infomation Technology Deparment";


   //นับจำนวน String
   echo strlen($fullname)."<br>";
   echo str_word_count($word)."คำ <br>";
   //นับจำนวนคำ
   echo strrev($word)."<br>";
   echo strpos($search, "infomation")."<br>";
   echo str_replace("Love","Hate",$word)."<br>";
   echo strtoupper($word)."<br>";
   echo strtolower($word)."<br>";
  ?>