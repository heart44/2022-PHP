<?php
    class Calc {
        function sum($n1, $n2) {
            return $n1 + $n2;
        }
    }

    //Calc를 객체화, 변수명은 c
    //sum 메소드 호출. 5, 10을 더한 값을 리턴받고 화면에 출력하시오.
    $c = new Calc;
    print $c->sum(10, 10) . "<br>";

    class StaticCalc {
        static function sum2($n1, $n2) {
            return $n1 + $n2; 
        }
    }

    $rs = StaticCalc::sum2(5, 10);
    print $rs . "<br>";