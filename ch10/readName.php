<?php
    $data = file("./name.txt");

    print $data[0];
    print "<br>-----------<br>";

    foreach($data as $idx => $name) {
        print "[${idx}] : " . $name . "<br>";
    }