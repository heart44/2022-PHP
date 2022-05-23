<?php
    print __FILE__ . "<br>";
    print __LINE__ . "<br>";
    print __LINE__ . "<br>";
    print "PHP VERSION : " . PHP_VERSION . "<br>";
    print "OS : " . PHP_OS . "<br>";

    print "-- 글로벌 상수 -- <br>";
    $GLOBALS["foo"] = 10;
    foreach($GLOBALS as $key => $val) {
        print $key . " : " . $val . "<br>";
    }

    
?>