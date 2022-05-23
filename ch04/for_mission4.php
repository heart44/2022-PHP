<?php
    // 배운거 활용해서 [1, 2, 3, 4, 5, 6, 7] 출력
    $num = 8;
    echo "[";
    for($i=1; $i<$num; $i++) {
        echo $i;
        if($i < $num-1) {
            echo ", ";
        }
    }
    echo "]";

    print "<br>";

    echo "[";
    for($i=1; $i<$num; $i++) {
        if($i > 1) {
            echo ", ";
        }
        echo $i;
    }
    echo "]";
?>