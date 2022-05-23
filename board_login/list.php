<?php
    session_start();
    include_once 'db/db_board.php';
    include_once 'date.php';
    include_once 'cnt_board.php';
    include_once 'new_board.php';

    // $nm = "";
    // if(isset($_SESSION["login_user"])) {
    //     $login_user = $_SESSION["login_user"];
    //     $nm = $login_user["nm"];
    // }

    $page = $_GET["page"];
    $row_cnt_list = array(5, 10, 15, 20);

    if(!$page) { 
        $page = 1; 
    } else {
        $page = intval($page);
    }

    if(isset($_POST['board_list_chk'])) {
        $row_cnt = $_POST['board_list_chk'];
    } else {
        $row_cnt = $row_cnt_list[0];
    }
    $block = 5;
    $param = [
        "row_cnt" => $row_cnt,
        "start_idx" => ($page - 1) * $row_cnt,
    ];

    $paging_cnt = sel_paging_cnt($param);
    $rs = sel_board_list($param);
    $cnt = sel_board_list2();

    $now_block = ceil($page / $block);
    $start = ($now_block - 1) * $block + 1;
    $total = ceil($cnt / $row_cnt);

    if($start <= 0) {
        $start = 1;
    }

    $end = $now_block * $block;

    if($end > $total) {
        $end = $total;
    }

    function selet_chk($row_cnt, $cnt) {
        if($row_cnt == $cnt) {
            return "<option value=".$cnt." selected>";
        } else {
            return "<option value=".$cnt.">";
        }
    }

    if(isset($_POST['search_inp']) && $_POST['search_inp'] != "") {
        $param += [
            "search_sel" => $_POST['search_sel'],
            "search_inp" => $_POST['search_inp'],
        ];

        $rs = search_board($param);
    }

    list($today_cnt, $total_cnt) = cnt_board();
    $new_cnt = new_board();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <title>글목록</title>
</head>
<body>
    <div id="container">
        <?php include('header.php') ?>
        <main>
            <h1>글목록</h1>
            <div>
                <form method="post">
                    <select name="board_list_chk" onchange="this.form.submit()">
                        <?php 
                            for($i=0; $i < count($row_cnt_list); $i++) {
                                echo selet_chk($row_cnt, $row_cnt_list[$i]), $row_cnt_list[$i], "개</option>";
                            }
                        ?>
                    </select>
                </form>
            </div>
            <div>새글 <font color=red><?= $new_cnt ?></font>/<?= $cnt ?></div>
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
                        <td><?= dateFormat($row["created_at"]) ?></td>
                        <td><?= $row['view_cnt'] ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            
            <div class="paging">
                <?php if($page > 1) { ?>
                    <a href="list.php?page=<?= $page-1 ?>">[◀]</a>
                <?php } ?>        
                <?php for($i=$start; $i<=$end; $i++) { ?>
                    <span class="<?= $i == $page ? "pageSelected" : "" ?>">
                        <a href="list.php?page=<?= $i ?>"><?= $i; ?></a>
                    </span>
                <?php } ?>
                <?php if($page < $total ) { ?>
                    <a href="list.php?page=<?= $page+1 ?>">[▶]</a>
                <?php } ?>  
            </div>

            <div class="search_board">
                <form action="list.php" method="POST">
                    <select name="search_sel">
                        <option value="search_nm">작성자</option>
                        <option value="search_title">제목</option>
                        <option value="search_ctnt">제목+내용</option>
                    </select>
                    <div class="inp">
                        <input type="text" name="search_inp">
                        <input type="submit" value="검색">
                    </div>
                </form>
            </div>
            <br><center><h3> 방문자 수 통계 </h3>
            <div>
                [ Today : <font color = red><?=  $today_cnt ?>명</font> ] <br>
                [ Total : <font color = blue><?=  $total_cnt ?>명</font> ]
            </div>
        </main>
    </div>
</body>
</html>