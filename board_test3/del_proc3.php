<?php
    include_once '../board/db.php';

    $i_board = $_GET['i_board'];

    $conn = get_conn();

    if($i_board != null) {
        print "<script>alert('삭제되었습니다.');</script>";
        $sql = "DELETE FROM t_board3 WHERE i_board = $i_board";
    }
    
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    echo "<script>location.href='list3.php';</script>";
?>