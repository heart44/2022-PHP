<?php
    function inc() {
        static $i = 1;

        print $i . "<br>";
        $i += 1;
    }

    $z = 1;
    function inc2() {
        global $z;
        print $z . "<br>";
        $z++;
    }

    for($i=0; $i<10; $i++) {
        inc();
    }
?>