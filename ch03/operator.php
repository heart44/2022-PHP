<?php
    $num = 16;

    if($num % 2 === 0) {
        print "${num}은 짝수입니다. ";
    } else {
        print "${num}은 홀수입니다.";
    }

    print "<br>";

    $odd_even = "홀";
    if($num % 2 == 0) {
        $odd_even = "짝";
    } 
    print "${num}은 ${odd_even}수입니다.";
?>