<?php
    session_start();
    include_once '../board/db.php';

    $title = $_POST['title'];
    $ctnt = $_POST['ctnt'];
    $u_id = $_SESSION['u_id'];

    $conn = get_conn();
    $sql = "INSERT INTO t_board3 (title, ctnt, u_id)
            VALUES ('$title', '$ctnt', '$u_id')";
    
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("Location: list2.php");
?>