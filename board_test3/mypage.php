<?php
    include_once '../board/db.php';
    include_once 'login_check.php';
    include_once 'date.php';

    $u_id = session_check(1);
    $nick = session_check(0);

    $conn = get_conn();
    $sql = "SELECT * FROM t_board3 aa, t_user bb
            WHERE aa.u_id = bb.u_id AND aa.u_id = '$u_id'
            ORDER BY i_board desc";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mypage.css">
    <title>마이페이지</title>
</head>
<body>
    <div id="head">
        <h1><?= $nick ?>의 마이페이지</h1>
        <a href="list3.php" class="write"><button>글목록</button></a>
    </div>
    <table>
        <tr>
            <th width=10%>글번호</th>
            <th width=35%>제목</th>
            <th width=15%>작성자</th>
            <th width=30%>작성일</th>
            <th width=10%>조회수</th>
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
                print "<td width=35%><a href='detail3.php?i_board=$i_board'>${title}</td>";
                print "<td width=15%>${u_nick}</td>";
                print "<td width=30%>" . datetime($create_at) . "</td>";
                print "<td width=10%>${view_cnt}</td>";
                print "</tr>";
            }
        ?>
    </table>
</body>
</html>