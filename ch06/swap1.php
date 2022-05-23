<?php
    // call_by_value
    function swap_value($n1, $n2) {
        $tmp = $n1;
        $n1 = $n2;
        $n2 = $tmp;
    }

    //call_by_reference 
    function swap_ref(&$n1, &$n2) {
        $tmp = $n1;
        $n1 = $n2;
        $n2 = $tmp;
    }

    $a = 10;
    $b = 30;

    print "a : $a, b : $b <br>";
    swap_value($a, $b);
    print "a : $a, b : $b <br>";
    print "-------------------<br>";

    print "a : $a, b : $b <br>";
    swap_ref($a, $b);
    print "a : $a, b : $b <br>";
?>