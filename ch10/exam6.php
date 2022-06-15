<?php
    $filep = fopen("./exam6.txt", "r");
    $newFile = fopen("./exam6_capital.txt", "w");

    if(!$filep) { die("파일을 열 수 없습니다."); }
    while($line = fgets($filep)) {
        fputs($newFile, strtoupper($line));
    }

    fclose($filep);
    fclose($newFile);