<?php
    session_start();
    session_destroy();

    header("Location: list2.php");
?>