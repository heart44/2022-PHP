<?php
    session_start();
    // session_unset();    //세션을 바로 죽임
    // session_destroy();  //만나기 전의 세션 값은 살아 있음->새로고침 or 다른 파일 이동 사라진걸 확인

    echo $_SESSION['var1'], "<br>";
    echo $_SESSION['var2'], "<br>";
?>
<a href="confirm.php">확인</a>