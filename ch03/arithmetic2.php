<?php
    $n1 = 10;

    $n1++;
    print "$n1 <br>";

    ++$n1;
    print "$n1 <br>";

    print "----------<br>";

    $n2 = 10;
    $sum = 10 + $n2++;
    print "$sum <br>";
    print "$n2 <br>";

    print "----------<br>";

    $n3 = 10;
    $n3 = $n3 + 1;      // $n3++; 이랑 같음
    print "$n3 <br>";

    print "----------<br>";

    $n4 = 10;
    $n4 += 2;           // $n4 = $n4 + 2;
    print "$n4 <br>";

    print "----------<br>";

    $oprd1 = 10;
    $oprd2 = 10;

    $result = $oprd1 == $oprd2;
    print "$oprd1 == $oprd2 : $result <br>";

    $result = $oprd1 === $oprd2;
    print "$oprd1 === $oprd2 : $result <br>";

    $result = $oprd1 != $oprd2;
    print "$oprd1 != $oprd2 : $result <br>";

    $result = $oprd1 > $oprd2;
    print "$oprd1 > $oprd2 : $result <br>";
?>