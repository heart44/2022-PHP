<?php
    $snum = 10;
    $enum = 5;
    print_num_from_to($snum, $enum);

    function print_num_from_to($snum, $enum) {
        print "[";
        if($snum > $enum) {
            for($i=$snum; $i>=$enum; $i--) {
                if($i < $snum) {
                    print ", ";
                }
                print $i;
            }

        } else {   
            for($i=$snum; $i<=$enum; $i++) {
                if($i > $snum) {
                    print ", ";
                }
                print $i;
            }
        }
        print "]";
    }

    function print_num_from_to_2($snum, $enum) {
        print "[";
        for($i=$snum; $snum < $enum ? $i<=$enum : $i>=$enum; $snum < $enum ? $i++ : $i--) {
            if($i != $snum) {
                print ", ";
            }
            print $i;
        } 
        print "]";
    }
?>
