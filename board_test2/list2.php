<?php
    session_start();
    if(!isset($_SESSION['u_nick'])) {
        print "<a href='login.php'><button>로그인</button></a>";
    } else {
        $u_id = $_SESSION['u_id'];
        $u_nick = $_SESSION['u_nick'];
        print "<a href='logout_proc.php'><button>로그아웃</button></a>";
    }

    include_once '../board/db.php';

    $conn = get_conn();
    $sql = "SELECT * FROM t_board3 aa, t_user bb 
            WHERE aa.u_id = bb.u_id
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
    <title>리스트</title>
</head>
<body>
    <h1>리스트</h1>
    <a href="write2.php"><button>글쓰기</button></a>
    <table>
        <tr>
            <th>글번호</th>
            <th>제목</th>
            <th>작성자</th>
            <th>작성일</th>
        </tr>
        
        <?php
            while($row = mysqli_fetch_assoc($result)) {
                $i_board = $row['i_board'];
                $title = $row['title'];
                $create_at = $row['create_at'];
                $u_nick = $row['u_nick'];

                print "<tr>";
                print "<td>${i_board}</td>";
                print "<td><a href='detail2.php?i_board=$i_board'>${title}</a></td>";
                print "<td>${u_nick}</td>";
                print "<td>${create_at}</td>";
                print "</tr>";
            }
        ?>
    </table>
</body>
</html>
