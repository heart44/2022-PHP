<?php
    function make_ten() {
        global $i;
        $i += 10;
    }

    $i = 0;
    make_ten();
    print "i : $i <br>";
?>