<?php
    include_once '../board/db.php';
    
    $i_board = $_GET["i_board"];

    $conn = get_conn();
    $sql = "SELECT * FROM t_board2 WHERE i_board = $i_board";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    if($row = mysqli_fetch_assoc($result)) {
        $title = $row['title'];
        $ctnt = $row['ctnt'];
        $create_at = $row['create_at'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
    <a href="list1.php"><button>리스트</button></a>
    <div>제목 : <?= $title ?></div>
    <div>작성일 : <?= $create_at ?></div>
    <div>내용 : <?= $ctnt ?></div>
    <a href="del_proc1.php?i_board=<?= $i_board ?>"><button>삭제</button></a>
    <a href="modify1.php?i_board=<?= $i_board ?>"><button>수정</button></a>
</body>
</html>