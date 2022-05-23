<?php
    $arr = [10, 33, 12, 8, 1, 89, 11];
    $cnt = count($arr);

    for($i=0; $i<$cnt; $i++) {
        for($j=0; $j<$cnt-1; $j++) {
            if($arr[$j] > $arr[$j+1]) {
                $tmp = $arr[$j+1];
                $arr[$j+1] = $arr[$j];
                $arr[$j] = $tmp;
            }
        }
    }
    print_r($arr);
    print "<br><br>";

    for($i=$cnt-1; $i>0; $i--) {
        for($j=0; $j<$i; $j++) {
            if($arr[$j] < $arr[$j+1]) {
                $tmp = $arr[$j+1];
                $arr[$j+1] = $arr[$j];
                $arr[$j] = $tmp;
            }
        }
    }
    print_r($arr);
?>