<?php
    // 구구단 한번에 찍기
    for($i=2; $i<10; $i++) {
        if($i > 2) {
            print "-------------- <br>";
        }
        for($j=1; $j<10; $j++) {
            $result = $i * $j;
            echo "$i x $j = $result <br>";
        }
    }
?>