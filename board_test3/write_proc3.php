<?php
    include_once '../board/db.php';
    include_once 'login_check.php';

    $title = $_POST['title'];
    $ctnt = $_POST['ctnt'];
    $u_id = session_check(1);

    $conn = get_conn();
    if(($title && $ctnt) != "") {
        $sql = "INSERT INTO t_board3 (title, ctnt, u_id)
            VALUES ('$title', '$ctnt', '$u_id')";
    } else {
        print "<script>alert('제목과 내용을 적어주세요');</script>";
        print "<script>history.back();</script>";
    }

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("Location: list3.php");
?>