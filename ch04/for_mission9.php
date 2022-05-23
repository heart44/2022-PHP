<?php
    // 별찍기3
    $star = rand(3, 10);

    print "star : $star <br> <br>";
    for($i=0; $i<=$star; $i++) {
        for($j=0; $j<$i; $j++) {
            print "* ";
        }
        print "<br>";
    }

    print "<br> <br>";

    $sum = "";
    for($i=1; $i<=$star; $i++) {
        $sum .= "#";
        print "$sum <br>";
    }
?>