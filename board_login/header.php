<?php
    session_start();

    $nm = "";
    if(isset($_SESSION["login_user"])) {
        $login_user = $_SESSION["login_user"];
        $nm = $login_user["nm"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <title>Document</title>
</head>
<body>
    <div id="container">
        <header>
            <?php
                if(isset($_SESSION["login_user"])) {
                    echo "<div><b>${nm}님</b> 환영합니다.</div>";
                }
            ?>
            <div>
                <a href="list.php">글목록</a>
                <?php if(isset($_SESSION["login_user"])) { ?>
                    <a href="write.php">글쓰기</a>
                    <a href="logout.php">로그아웃</a>
                    <a href="profile.php">
                        프로필
                        <?php
                            $session_img = $_SESSION['login_user']['profile_img'];
                            $profile_img = $session_img == null ? "profile.png" : $_SESSION['login_user']['i_user'] . "/" . $session_img;
                        ?>
                        <div class="circular_img wh40">
                            <img src="/board_login/img/profile/<?= $profile_img ?>">
                        </div>
                    </a>

                <?php } else { ?>
                    <a href="login.php">로그인</a>
                <?php } ?>
            </div>
        </header>
    </div>
    
</body>
</html>