<?php
    include_once 'login_check.php';

    log_check();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/write.css" type='text/css'>
    <title>글쓰기</title>
</head>
<body>
    <div id="container">
        <h1>글쓰기</h1>
        <!-- <a href="list3.php"><button>글목록</button></a> -->
        <div class="write_area">
            <form action="write_proc3.php" method="POST">
                <div class="title"><input type="text" name="title" placeholder="제목"></div>
                <div class="ctnt"><textarea name="ctnt" placeholder="내용"></textarea></div>
                <div class="btn">
                    <input type="submit" value="글등록" class="sb_btn">
                    <input type="reset" value="초기화" class="rs_btn">
                </div>
            </form>
        </div>
    </div>
</body>
</html>