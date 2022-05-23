<?php
    // print_sum(1, 2);
    // print_sum(1, 2, 3);
    // print_sum(1, 2, 3, 4);

    function print_sum() {
        print "func_num_args() : " . func_num_args() . "<br>";
        print "func_get_arg(0) : " . func_get_arg(0) . "<br>";
        print "func_get_arg(1) : " . func_get_arg(1) . "<br>";
        print_r(func_get_args());
        print "<br>------------<br>";
    }

    function sum() {
        print "count : " . count(func_get_args()) . "<br>";
        $sum = 0;
        foreach(func_get_args() as $val) {
            $sum += $val;
        }
        return $sum;
    }

    print "sum : " . sum(1, 2) . "<br>";
    print "썸 : " . sum(1, 2, 3, 4, 5, 6, 7) . "<br>";

?>