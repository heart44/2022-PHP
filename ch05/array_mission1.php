<?php
   $score_arr = array(100, 90, 33, 87, 65);
   $sum = 0;
   $avg = 0;
   $cnt = count($score_arr);

   for($i=0; $i<$cnt; $i++) {
      $sum += $score_arr[$i];
   }
   $avg = $sum / $cnt;

   print "합 : ${sum}, 평균 : ${avg}"
?>