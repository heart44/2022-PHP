<?php
    //함수 function

    $result = sum(10, 20);

    print "sum : $result <br>";
    print "sum : " . sum(30, 40) . "<br>";

    minus(20, 10);

    function sum($n1, $n2) {
        return $n1 + $n2;
    }

    function minus($n1, $n2) {
        print "minus : " . $n1 - $n2 . "<br>";
    }
?>
