<?php
    session_start();
    include_once '../board/db.php';

    $u_id = $_POST['u_id'];
    $u_pw = $_POST['u_pw'];

    $conn = get_conn();
    $sql = "SELECT * FROM t_user
            WHERE u_id = '$u_id' and u_pw = '$u_pw'";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    $row = mysqli_fetch_assoc($result);

    if($row != null) {
        $_SESSION['u_id'] = $row['u_id'];
        $_SESSION['u_nick'] = $row['u_nick'];
        header("Location: list3.php");
        exit;
    } else {
        echo "<script>alert('아이디 또는 비밀번호가 틀렸습니다');</script>";
        echo "<script>location.href='login3.php';</script>";
    }
?>