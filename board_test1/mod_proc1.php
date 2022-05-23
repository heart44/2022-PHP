<?php
    include_once '../board/db.php';

    $i_board = $_POST["i_board"];
    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];

    $conn = get_conn();
    $sql = "UPDATE t_board2 
            SET title = '$title', ctnt = '$ctnt', mod_at = now()
            WHERE i_board = $i_board";

    mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("Location: detail.php?i_board=$i_board");
?>