<?php
    $snum = 5;
    $enum = 10;
    print_num_from_to($snum, $enum);

    function print_num_from_to($snum, $enum) {
        if($snum < $enum) {
            print "[";
            for($i=$snum; $i<=$enum; $i++) {
                if($i > $snum) {
                    print ", ";
                }
                print $i;
            }
            print "]";
        } else {
            print "종료값이 더 작을 수 없습니다.";
        }
    }



    // function print_num_from_to($snum, $enum) {
    //     if($snum > $enum) {
    //         print "종료값이 더 작을 수 없습니다.";
    //         return;
    //     }
    //     print "[";
    //     for($i=$snum; $i<=$enum; $i++) {
    //        if($i > $snum) {
    //             print ", ";
    //         }
    //         print $i;
    //     }
    //     print "]";
    // }
?>
