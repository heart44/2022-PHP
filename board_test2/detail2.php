<?php
    session_start();
    include_once '../board/db.php';

    $i_board = $_GET['i_board'];
    $nick = $_SESSION['u_nick'];

    $conn = get_conn();
    $sql = "SELECT * FROM t_board3 aa, t_user bb
            WHERE i_board = $i_board and aa.u_id = bb.u_id";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    if($row = mysqli_fetch_assoc($result)) {
        $title = $row['title'];
        $ctnt = $row['ctnt'];
        $create_at = $row['create_at'];
        $u_nick = $row['u_nick'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>
</head>
<body>
    <a href="list2.php"><button>글목록</button></a>
    <div>제목 : <?= $title?></div>
    <div>작성자 : <?= $u_nick ?></div>
    <div>작성일 : <?= $create_at?></div>
    <div>내용 : <?= $ctnt?></div>
    <?php
        if($nick == $u_nick) {
            print "<a href='del_proc2.php?i_board=$i_board'><button>삭제</button></a>";
            print "<a href='modify2.php?i_board=$i_board'><button>수정</button></a>";
        }
    ?>
</body>
</html>