<?php
    echo "country : ", $_COOKIE['country'], "<br>";

    $_COOKIE['country'] = "UK";
    echo "country : ", $_COOKIE['country'], "<br>";

    unset($_COOKIE['country']);
    echo "country : ", $_COOKIE['country'], "<br>";
