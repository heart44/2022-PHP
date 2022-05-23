<?php
    include_once 'db.php';

    $i_board = $_GET["i_board"];

    $conn = get_conn();
    $sql = "delete from t_board where i_board = $i_board";

    mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("Location: list.php");
?>