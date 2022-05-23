<?php
    /*
    $total_col          총 게시글 수
    $now_page           현재 페이지 번호
    $page_col_num       한 페이지 게시글 수
    $page_block_num     한 페이지 블럭 수
    */
    
    function paging($total_col, $now_page, $page_col_num, $page_block_num) {
        $list_num = $page_col_num;
        $page_num = $page_block_num;
        $page = $now_page;
        $total_page = ceil($total_col / $list_num);
        //$total_block = ceil($total_page / $page_num);
        $now_block = ceil($page / $page_num);
        $start_num = ($now_block - 1) * $page_num + 1;

        if($start_num <= 0) {
            $start_num = 1;
        }

        $end_num = $now_block * $page_num;

        if($end_num > $total_page) {
            $end_num = $total_page;
        }

        $p = $page - 1;
        $p2 = $page + 1;

        if($page <= 1) {
            print "<a href='list3.php?page=1'> [◀]" . "&nbsp" . "</a>";
        } else {
            print "<a href='list3.php?page=$p'> [◀]" . "&nbsp" . "</a>";
        }

        for($i = $start_num; $i<=$end_num; $i++) {
            if($i != $page) {
                print "<a href='list3.php?page=$i'> $i" . "&nbsp" . "</a>";
            } else {
                print "<b> $i" . "&nbsp" . "</b>";
            }
        }

        if($page >= $total_page) {
            print "<a href='list3.php?page=${total_page}'>" . "&nbsp" . "[▶] </a>";
        } else {
            print "<a href='list3.php?page=$p2'>[▶] </a>";
        }
    }
?>
