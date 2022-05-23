<?php
    $dan = rand(2, 9);

    print_gugudan($dan);
    print "<br>";
    print_gugudan_from_to(2, 6);

    function print_gugudan($num) {
        $result = 0;
        for($i=1; $i<10; $i++) {
            $result = $num * $i;
            print "$num x $i = $result <br>";
        }
    }

    function print_gugudan_from_to($n1, $n2) {
        for($i=$n1; $i<=$n2; $i++) {
            print "<br>";
            print_gugudan($i);
        }
    }
?>