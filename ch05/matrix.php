<?php
    $matrix = array(
        array(1, 2, 3, 0),
        array(4, 5, 6, 0, 9),
        array(7, 8, 9, 0)
    );

    print_r($matrix);
    print "<br><br>";

    print $matrix[1][1] . "<br>";
    print $matrix[2][1] . "<br>";

    $child1 = $matrix[1]; //깊은 복사 (주소값이 아닌 배열 자체를 복사)
    print $child1[1] . "<br>";

    print "matrix count : " . count($matrix) . "<br>";
    print "matrix count : " . count($matrix[0]) . "<br>";
    print "matrix count : " . count($matrix[1]) . "<br>";
    print "matrix count : " . count($matrix[2]) . "<br>"; 
?>