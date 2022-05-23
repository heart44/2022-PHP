<?php
    // 구구단 찍기
    $dan = rand(2, 9);
    for($i = 1; $i <= 9; $i++) {
        $result = $dan * $i;
        echo "$dan x $i = $result <br>";
        // echo "$dan x $i = ", ($dan*$i), "<br>";
    }
?>