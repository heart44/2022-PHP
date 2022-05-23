<?php
    // 1부터 val 변수에 있는 숫자까지 모두 더해주세요
    // 그리고 결과 값을 출력해 주세요 (while 문 사용)

    $val = rand(50, 100);
    $val_2 = rand(50, 100);
    print "val : $val <br>";

    $sum = 0;
    while($val_2 > 0) {
        $sum += $val_2;
        $val_2--;
    }
    print $sum . "<br>";

    // print "val : $val_2 <br>";

    // $sum_2 = 0;
    // for($i=1; $i<=$val; $i++) {
    //     $sum_2 += $i;
    // }
    // print $sum_2;
?>