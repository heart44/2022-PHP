<?php
    define("URL", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "506greendg@");
    define("DB_NAME", "board1");
    $conn = mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME);

    $sql = "insert into t_board(title, ctnt)
    values('test', 'content')";

    mysqli_query($conn, $sql);

    mysqli_close($conn);
?>