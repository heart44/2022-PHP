<a href="product_list.php">상점보기</a>
<a href="cart.php">장바구니보기</a>

<?php
    session_start();
    if(isset($_SESSION["login_user"])) {    //로그인 했으면
        $login_user = $_SESSION["login_user"];

        if($login_user[0] === "admin") {    //관리자
            echo("
                <a href='add_goods.php'>상품입력</a>
                <a href='admin_buy.php'>구매관리</a>
                <a href='admin_mem_list.php'>회원리스트</a>
                <a href='admin_mem_update.php'>회원정보수정</a>
            ");
        } else {    //일반 회원 
            echo("
                <a href='my_buy.php'>내구매관리</a>
                <a href='update_member.php'>내정보수정</a>
            ");
        }
    }
