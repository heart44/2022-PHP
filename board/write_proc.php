<?php
    include_once "db.php";

    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];

    print $title . "<br>";
    print $ctnt;

    $conn = get_conn();
    $sql = "INSERT INTO t_board(title, ctnt)
    VALUES('${title}', '${ctnt}')";

    mysqli_query($conn, $sql);
    mysqli_close($conn);

    //echo "<script>location.href='list.php';</script>";
    header("Location: list.php");
?>