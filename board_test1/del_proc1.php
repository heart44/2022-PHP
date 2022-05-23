<?php
    include_once '../board/db.php';

    $i_board = $_GET["i_board"];

    $conn = get_conn();
    $sql = "DELETE FROM t_board2 WHERE i_board = $i_board";

    mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("Location: list1.php");
?>