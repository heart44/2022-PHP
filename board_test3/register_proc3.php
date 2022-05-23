<?php
    include_once '../board/db.php';

    $u_id = $_POST['u_id'];
    $u_pw = $_POST['u_pw'];
    $u_nick = $_POST['u_nick'];

    $conn = get_conn();
    $sql = "INSERT INTO t_user (u_id, u_pw, u_nick)
            VALUES ('$u_id', '$u_pw', '$u_nick')";
        
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("Location: login3.php");
?>