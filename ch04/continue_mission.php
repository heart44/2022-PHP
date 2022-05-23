<?php
    // for문 노터치, continue 활용해 홀수만 출력

    for($i=1; $i<=100; $i++) {
        if($i%2 == 0) {
            continue;
        }
        print $i . "<br>";
    }
?>