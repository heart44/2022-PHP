<?php
    // 별찍기2
    $star = rand(2, 10);

    print "star : $star <br> <br>";
    for($i=0; $i<$star; $i++) {
        for($j=0; $j<$star; $j++) {
            print "* ";
        }
        print "<br>";
    }
?>