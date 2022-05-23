<?php
    function rv($param) {
        $rv = $param;

        for($i=1; $i<=$rv; $i++) {
            print "⭐";
        }
    }

    function avg_rv($val1, $val2) {
        $rv_cnt = $val1;
        $cnt = $val2;
        $avg_rv = $rv_cnt / $cnt;

        return $avg_rv;
    }