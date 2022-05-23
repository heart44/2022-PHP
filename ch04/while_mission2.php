<?php
    // 10이 나오면 while문 끝내고 끝 찍기 

    $r_val = rand(1, 10);
    print "@시작@ <br>";
    while($r_val !== 10) {
        $r_val = rand(1, 10);
        if($r_val !== 10) {
            print "r_val : $r_val <br>";
        }
    }
    print "@끝@ <br>";
?>