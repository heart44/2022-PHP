<?php
    $score = 99;

    print "당신의 성적은 ";
    switch($score) {
        case 100: case 99:
            print "A입니다.";
            break;
        case 80:
            print "B입니다.";
            break;
        case 60:
            print "C입니다.";
            break;
        case 40:
            print "D입니다.";
            break;
        case 0:
            print "F입니다.";
            break;
    }
?>