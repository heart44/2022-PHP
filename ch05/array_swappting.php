<?php
    $arr = [10, 33, 12, 8, 1, 89];

    print_r($arr);
    print "<br>";

    $tmp = $arr[0];
    $arr[0] = $arr[1];
    $arr[1] = $tmp;

    print_r($arr);
    print "<br>";
?>