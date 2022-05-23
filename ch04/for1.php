<?php

    for($i = 0; $i < 10; $i++) {
        print "$i <br>";
    }
    print "@@@@@@끝@@@@@@@ <br>";

    //짝수만 나오게
    for($i = 0; $i < 100; $i++) {
        if ($i % 2 == 0) {
            print "$i <br>";
        }
    }
    
    print "@@@@@@끝@@@@@@@ <br>";

    for($i = 0; $i < 100; $i += 2) {
        print "$i <br>";
    }
?>