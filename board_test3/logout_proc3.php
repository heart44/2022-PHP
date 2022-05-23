<?php
    session_start();
    session_destroy();

    header("Location: list3.php");
?>