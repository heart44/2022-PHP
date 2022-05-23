<style>
    table { border-collapse: collapse; }
    table, td { border: 1px solid #000; }
</style>


<?php
    $val = rand(2, 5);

    print_table($val);

    function print_table($val) {
        $num = 1;
        print "<table>";
        for($i=0; $i<$val; $i++) {
            print "<tr>";
            for($j=0; $j<$val; $j++) {
                print "<td>" . $num++ . "</td>";
            }
            print "</tr>";
        }
        print "</table>";
    }
?>
