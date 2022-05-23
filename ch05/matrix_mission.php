<?php
    $scores = array(
        //국, 영, 수
        array(100, 100, 100),   //영수
        array(90, 80, 70),      //순자
        array(55, 65, 75),      //영철
        array(90, 88, 55)       //옥순
    );

    $names = array("영수", "순자", "영철", "옥순");
    $each_sum = array();
    $each_avg = array();

    for($i=0; $i<count($scores); $i++) {
        for($j=0; $j<count($scores[$i]); $j++) {                                                                                       
            $each_sum[$i] += $scores[$i][$j];
        }
    }

    for($i=0; $i<count($each_sum); $i++) {
        $each_avg[$i] = $each_sum[$i] / count($each_sum);
    }

    for($i=0; $i<count($names); $i++) {
        print $names[$i] . " 합 : " . $each_sum[$i] . ", ";
        print " 평균 : " . round($each_avg[$i], 1) . "<br><br>";
    }
?>