<?php
    $scores = array(
        //국, 영, 수
        array(100, 100, 100),   //영수
        array(90, 80, 70),      //순자
        array(55, 65, 75),      //영철
        array(90, 88, 55),      //옥순
        // array(90, 88, 50),
    );
 
    $subject = array("국어", "영어", "수학");
    $sum_scores = array();
    $avg_scores = array();

    for($i=0; $i<count($scores); $i++) {
        for($j=0; $j<count($scores[$i]); $j++) {
            $sum_scores[$j] += $scores[$i][$j];
        }
    }

    for($i=0; $i<count($sum_scores); $i++) {
        $avg_scores[$i] = $sum_scores[$i] / count($scores);
    }
    
    for($i=0; $i<count($subject); $i++) {
        print $subject[$i] . "<br>" . 
        " 합 : " . $sum_scores[$i] . ", " .
        " 평균 : " . $avg_scores[$i] . "<br><br>";
    }

    /*
    for($i=0; $i<count($subject); $i++) {
        $sum = $sum_scores[$i];
        $avg = $sum / count($scores);

        print $subject[$i] . "<br>" . 
        " 합 : " . $sum . ", " .
        " 평균 : " . $avg . "<br><br>";
    }
    */
?>