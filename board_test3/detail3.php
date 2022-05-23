<?php
    include_once '../board/db.php';
    include_once 'login_check.php';
    include_once 'date.php';

    log_check();

    $i_board = $_GET['i_board'];

    $conn = get_conn();
    $sql = "SELECT * FROM t_board3 aa, t_user bb
            WHERE i_board = $i_board and aa.u_id = bb.u_id";
    $view_sql = "UPDATE t_board3
                SET view_cnt = view_cnt + 1
                WHERE i_board = $i_board";
    
    mysqli_query($conn, $view_sql);
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    if($row = mysqli_fetch_assoc($result)) {
        $title = $row['title'];
        $nick = $row['u_nick'];
        $view_cnt = $row['view_cnt'];
        $create_at = $row['create_at'];
        $ctnt = $row['ctnt'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/detail.css">
    <title><?= $title ?></title>
</head>
<body>
    <div id="container">
        <div class="head">
            <a href="list3.php" class="list_btn"><button>글목록</button></a>
            <div class="btn">
                <?php
                    if($_SESSION['u_nick'] == $nick) {
                        print "<a href='modify3.php?i_board=$i_board'><button>수정</button></a>";
                        print "<a href='del_proc3.php?i_board=$i_board'><button>삭제</button></a>";
                    }
                ?>
            </div>
        </div>
        <div class="contents">
            <div class="title"><?= $title ?></div>
            <div class="sub">
                <span class="nick"><?= $nick ?></span>
                <span class="view">조회 : <?= $view_cnt ?></span>
                <span class="date">작성일 : <?= datetime($create_at) ?></span>
            </div>
            <div class="ctnt"><?= $ctnt ?></div>
        </div>
    </div>
    
</body>
</html>