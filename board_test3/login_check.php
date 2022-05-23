<?php
    session_start();

    function session_check($n) {
        if($n == 1) {
            return $_SESSION['u_id'];
        }
        return $_SESSION['u_nick'];
    }

    function log_btn() {
        if(!isset($_SESSION['u_nick'])) {
            print "<a href='login3.php' class='log'><button>로그인</button></a>";
        } else {
            print "<a href='mypage.php' class='mypage'><button>마이페이지</button></a>";
            print "<a href='logout_proc3.php'class='log'><button>로그아웃</button></a>";
        }
    }

    function log_check() {
        if(!isset($_SESSION['u_nick'])) {
            echo "<script>alert('로그인을 해주세요');</script>";
            echo "<script>location.href='login3.php';</script>";
        } 
    }

?>