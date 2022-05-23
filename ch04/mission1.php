<?php
    $score = rand(0, 120);
    print "점수 : $score <br>";


    switch(true) {
        case ($score >100):
            print "잘못된 값";
            break;
        case ($score >= 90):
            print "A";
            break;
        case ($score >= 80):
            print "B";
            break;
        case ($score >= 70):
            print "C";
            break;
        case ($score >= 60):
            print "D";
            break;  
        case ($score < 60): 
            print "F";
            break;
    }
    if($score < 60 || $score > 100) {
        print "";
    } else if($score%10 >=7 || $score === 100) {
        print "+";
    } else if($score%10 <= 3) {
        print "-";
    }
?>