<?php
define("URL", "localhost");
define("USERNAME", "root");
define("PASSWORD", "1234");     // heidisql (506greendg@)
define("DB_NAME", "board_project"); //heidisql (board_login)

function get_conn() {
    return mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME);
}
