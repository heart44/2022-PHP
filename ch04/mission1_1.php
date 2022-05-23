<?php
    $score = rand(0, 120);
    print "점수 : $score <br>";



    if($score > 100 || $score <0) {
        print "잘못된 값";
    } else {
        $a = intval($score/10);
        $grade = "F";
        switch($a) {
            case 9: case 10:
                $grade ="A";
                break;
            case 8:
                $grade ="B";
                break;
            case 7:
                $grade ="C";
                break;
            case 6:
                $grade ="D";
                break;
        }
        $b = $score%10;
        $sign ="";
        if($score >= 60) {
            if($score === 100 || $b >=7) {
                $sign = "+";
            } else if($b <= 3) {
                $sign = "-";
            }
        }
        print $grade . $sign;
    }

    
?>