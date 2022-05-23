<?php
    $arr = [10, 20, 30, 40, 50];
    $num = 10;
    plus_array($arr, $num);
    print_r($arr);

    function plus_array(&$arr, $n) {
        for($i=0; $i<count($arr); $i++) {
            $arr[$i] += $n;
        }
        // foreach($arr as $k => $v) {
        //     $arr[$k] = $v + $n;
        // }
    }

    // print "<br><br>";

    // $arr2 = [10, 20, 30, 40, 50];
    // add_array($arr2, 60);
    // print_r($arr2);
    // function add_array(&$arr, $n) {
    //     $arr[] = $n;
    // }
?>
