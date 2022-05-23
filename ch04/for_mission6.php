<?php
    // 구구단 한번에 옆으로 찍기
    for($i=1; $i<10; $i++) {
        for($j=2; $j<10; $j++) {
            $result = $i * $j;
            echo "$j x $i = $result\t";
        }
        print "<br>";
    }
?>