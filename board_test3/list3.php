<?php
    include_once '../board/db.php';
    include_once 'paging.php';
    include_once 'date.php';

    if(isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $list = 5;
    $block = 3;
    $start = ($page - 1) * $list;

    $conn = get_conn();
    $sql = "SELECT * FROM t_board3 aa, t_user bb
            WHERE aa.u_id = bb.u_id
            ORDER BY i_board desc
            limit $start, $list";
    $total = "SELECT * FROM t_board3";

    $result = mysqli_query($conn, $sql);
    $total_rs = mysqli_query($conn, $total);
    mysqli_close($conn);

    $cnt = mysqli_num_rows($total_rs);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/list.css" type='text/css'>
    <title>리스트</title>
</head>
<body>
    <div id="container">
        <header id="head">
            <?php 
                include_once 'login_check.php';
                log_btn();  
            ?>
            <h1>글목록</h1>
        </header>
        <a href="write3.php" class="write"><button>글쓰기</button></a>
        <div class="total">총 <?= $cnt ?>개</div>
        <table>
            <tr>
                <th width=10%>No.</th>
                <th width=35%>제목</th>
                <th width=15%>작성자</th>
                <th width=30%>작성일</th>
                <th width=10%>조회</th>
            </tr>
            <?php
                while($row = mysqli_fetch_assoc($result)) {
                    $i_board = $row['i_board'];
                    $title = $row['title'];
                    $u_nick = $row['u_nick'];
                    $create_at = $row['create_at'];
                    $view_cnt = $row['view_cnt'];

                    print "<tr>";
                    print "<td width=10%>${i_board}</td>";
                    print "<td width=35%><a href='detail3.php?i_board=${i_board}'>${title}</td>";
                    print "<td width=15%>${u_nick}</td>";
                    print "<td width=30%>" . datetime($create_at) . "</td>";
                    print "<td width=10%>${view_cnt}</td>";
                    print "</tr>";
                }
            ?>
        </table>
        <div class="page">
            <?php paging($cnt, $page, $list, $block); ?>
        </div>
</body>
</html>
