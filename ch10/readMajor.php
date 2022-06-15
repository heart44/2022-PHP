<?php
    $data = file("./major.txt");

    print_r($data);
    print $data[0];
    print "<br>-----------<br>";

    foreach($data as $line) {
        $div = explode(" ", $line);
        print "Name: {$div[0]}, Major: {$div[1]} <br>";
    }