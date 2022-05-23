<?php
    function cnt_board(){
        include_once 'db/db.php';

        $YY = date('Y');
        $MM = date('m');
        $DD = date('d');
        $dat = $YY."-".$MM."-".$DD;

        $conn = get_conn();
        $sle_sql = "SELECT * FROM cnt_db
                    WHERE redate = '$dat'";

        $rs = mysqli_query($conn, $sle_sql);
        $list = mysqli_num_rows($rs);

        if(!$list) {
            $cnt = 0;
        } else {
            $row = mysqli_fetch_assoc($rs);
            $cnt = $row['cnt'];
        }

        if($cnt == 0) {
            $cnt++;
            $sql = "INSERT INTO cnt_db VALUES ($cnt, '$dat')";
        } else {
            $cnt++;
            $sql = "UPDATE cnt_db SET cnt = $cnt WHERE redate = '$dat'";
        }
        mysqli_query($conn, $sql);

        $total_sql = "SELECT SUM(cnt) FROM cnt_db"; 
        $total_rs = mysqli_query($conn, $total_sql);
        $total_cnt = mysqli_fetch_array($total_rs)[0];

        mysqli_close($conn);
        
        return array($cnt, $total_cnt);
    }