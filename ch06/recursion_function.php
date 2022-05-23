<?php
    $num = 4;
    $result = factorial($num);
    print "${num}! = $result <br>";

    function factorial($num) {
        $fac = 1;
        for($i=$num; $i>0; $i--) {
            $fac *= $i;
        }
        return $fac;

        // for($i=1; $i<=$num; $i++) {
        //     $fac *= $i;
        // }
    }

    function factorial_rec($num) {
        if($num == 1) {
            return 1;
        }
        return $num * factorial_rec($num-1);
    }

    print "${num}! = " . factorial_rec($num) . "<br>"; 

    $num2 = my_abs(-4);
    print "my_abs(-4) : " . $num2 . "<br>";

    function my_abs($val) {
        // if($val < 0) {
        //     return -$val;
        // }
        // return $val;
        return $val < 0 ? -$val : $val;
    }

    $num3 = abs(-6);
    print $num3;
?>