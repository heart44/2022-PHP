<?php
    include_once '../board/db.php';

    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];

    print $title;

    $conn = get_conn();
    $sql = "INSERT INTO t_board2(title, ctnt) 
            VALUES ('${title}', '${ctnt}')";
    
    mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("Location: list1.php");
?>