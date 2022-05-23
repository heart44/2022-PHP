<?php
    include_once '../board/db.php';

    $i_board = $_GET['i_board'];

    $conn = get_conn();
    $sql = "SELECT title, ctnt FROM t_board3
            WHERE i_board = $i_board";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    if($row = mysqli_fetch_assoc($result)) {
        $title = $row['title'];
        $ctnt = $row['ctnt'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/write.css" type='text/css'>
    <title>글수정</title>
</head>
<body>
    <div id="container">
        <h1>글수정</h1>
        <!-- <a href="detail3.php?i_board=<?= $i_board ?>"><button>뒤로</button></a> -->
        <div class="write_area">
            <form action="mod_proc3.php" method="POST">
                <div><input type="hidden" name="i_board" value="<?= $i_board ?>"></div>
                <div class="title"><input type="text" name="title" value="<?= $title ?>"></div>
                <div class="ctnt"><textarea name="ctnt"><?= $ctnt ?></textarea></div>
                <div class="btn">
                    <input type="submit" value="글수정" class="sb_btn">
                    <input type="reset" value="초기화" class="rs_btn">                    </div>
            </form>
        </div>
    </div>
</body>
</html>