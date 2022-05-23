<?php
   $week = array("일", "월", "화", "수", "목", "금", "토");
   
//    $weekend = array($week[0], $week[1]);

   print $week[0] . "<br>";
   print $week[4] . "<br>";

   $week[3] = "Wed";
   print_r ($week) ."<br>";

   array_push($week, "랄랄");
   print count($week) . "<br>";

   
?>