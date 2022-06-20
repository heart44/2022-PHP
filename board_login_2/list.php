<?php
    session_start();
    include_once 'db/db_board.php';
    include_once 'date.php';

    //페이징
    $page = 1;
    if(isset($_GET['page'])) {
        $page = intval($_GET['page']);
    }
    $row_cnt = 10;      //한 페이지에 보여줄 글개수

    //검색
    $search_txt = "";
    if(isset($_GET['search_txt'])) {
        $search_txt = $_GET['search_txt'];
    }

    $param = [
        "s_idx" => ($page - 1) * $row_cnt,
        "row_cnt" => $row_cnt,
        "search_txt" => $search_txt,
    ];

    $rs = sel_board_list($param);
    $cnt = sel_board_list2();
    $paging_cnt = sel_paging_cnt($param);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/container.css">
    <title>글목록</title>
</head>
<body>
    <div id="container">
        <?php include('header.php') ?>
        <main>
            <h1>글목록</h1>
            <div class="search_board">
                <form action="list.php" method="GET">
                    <div>
                        <input type="search" name="search_txt" value="<?= $search_txt ?>">
                        <input type="submit" value="검색">
                    </div>
                </form>
            </div>
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
                        <td><a href="detail.php?i_board=<?= $i_board ?>&page=<?= $page ?><?= $search_txt != "" ? "&search_txt={$search_txt}" : "" ?>">
                            <?= str_ireplace($search_txt, "<mark>{$search_txt}</mark>", $row["title"]) ?>
                        </a></td>
                        <td>
                            <?= $row["nm"] ?>
                            <div class="circular_img wh40">
                                <img src="/board_login/img/profile/<?= $profile_img ?>">
                            </div>
                        </td>
                        <td><?= dateFormat($row["created_at"]) ?></td>
                        <td><?= $row['view_cnt'] ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="paging">
                <?php for($i=1; $i<=$paging_cnt; $i++) { ?>
                    <span class="<?= $i==$page ? "selected_page" : "" ?>">
                        <a href="list.php?page=<?= $i ?><?= $search_txt != "" ? "&search_txt={$search_txt}" : "" ?>"><?= $i ?></a>
                    </span>
                <?php } ?>
            </div>
        </main>
    </div>
</body>
</html>