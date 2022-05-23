<?php
    session_start();
    include_once 'db/db_board.php';

    $page = 1;
    if(isset($_GET['page'])) {
        $page = intval($_GET['page']);
    }

    $param = [
        
    ];

    $rs = sel_board_list($param);
    $cnt = sel_board_list2();
    $paging_cnt = sel_paging_cnt();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/common.css">
    <title>글목록</title>
</head>
<body>
    <div id="container">
        <?php include('header.php') ?>
        <main>
            <h1>글목록</h1>
            <table>
                <thead>
                    <tr>
                        <th>글번호</th>
                        <th>제목</th>
                        <th>작성자</th>
                        <th>작성일</th>
                        <th>조회</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($rs as $row) { 
                        $i_board = $row["i_board"];
                        $profile_img = $row["profile_img"] == null ? "profile.png" : $row["i_user"] . "/" . $row["profile_img"];
                    ?>
                    <tr>
                        <td><?= $i_board ?></td>
                        <td><a href="detail.php?i_board=<?= $i_board ?>"><?= $row["title"] ?></td>
                        <td>
                            <?= $row["nm"] ?>
                            <div class="circular_img wh40">
                                <img src="/board_login/img/profile/<?= $profile_img ?>">
                            </div>
                        </td>
                        <td><?= $row["created_at"] ?></td>
                        <td><?= $row['view_cnt'] ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div>
                <?php for($i=1; $i<=$paging_cnt; $i++) { ?>
                    <span><a href="list.php?page=<?= $i ?>"><?= $i ?></a></span>
                <?php } ?>
            </div>
        </main>
    </div>
</body>
</html>