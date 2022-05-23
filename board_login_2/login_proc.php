<?php
    session_start();
    include_once 'db/db_user.php';

    $uid = $_POST['uid'];
    $upw = $_POST['upw'];

    $param = [
        "uid" => $uid
    ];

    $rs = sel_user($param);

    if(empty($rs)) {
        echo "아이디가 틀렸습니다.";
        exit;
    }

    echo "i_user : ", $rs["i_user"], "<br>";
    echo "upw : ", $rs["upw"], "<br>";

    if($upw == $rs["upw"]) {
        $_SESSION["login_user"] = $rs;
        header("Location: list.php");
    } else {
        header("Location: login.php");
    }