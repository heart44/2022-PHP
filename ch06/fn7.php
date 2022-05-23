<?php
    $mon = rand(1, 15);
    $season = get_season($mon);

    if($season) {
        print "${mon}월은 ${season}입니다.";
    }

    // function get_season($mon) {
    //     switch($mon) {
    //         case 3: case 4: case 5:
    //             return "봄";
    //         case 6: case 7: case 8:
    //             return "여름";
    //         case 9: case 10: case 11:
    //             return "가을";
    //         case 12: case 1: case 2:
    //             return "겨울";
    //         default:
    //             return "잘못된 값";
    //     }
    // }

    function get_season($mon) {
        if($mon <1 || $mon >12) {
            return "잘못된 값";
        } else if($mon <=2 || $mon ===12) {
            return "겨울";
        } else if($mon < 6) {
            return "봄";
        } else if($mon <9) {
            return "여름";
        } else {
            return "가을";
        }
    }
?>