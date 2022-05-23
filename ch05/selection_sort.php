<?php
    $arr = [10, 33, 12, 8, 1, 89, 11];
    $cnt = count($arr);

    for($i=0; $i<$cnt-1; $i++) {
        for($j=$i+1; $j<$cnt; $j++) {
            if($arr[$i] > $arr[$j]) {
                $tmp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $tmp;
            }
        }
    }
    print_r($arr);
    print "<br><br>";

    for($i=0; $i<$cnt-1; $i++) {
        $min = $i;
        for($j=$i+1; $j<$cnt; $j++) {
            if($arr[$min] > $arr[$j]) {
                $min = $j;
            }
        }
        $tmp = $arr[$min];
        $arr[$min] = $arr[$i];
        $arr[$i] = $tmp;
    }
    print_r($arr);
?>