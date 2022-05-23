<?php
    function datetime($datetime) {
        if(empty($datetime)) {
            return false;
        }
        
        date_default_timezone_set("Asia/seoul");
        $target = date("Y.m.d", strtotime($datetime));
        $today = date("Y.m.d");

        if($target == $today) {
            $result = date("H:i", strtotime($datetime));
        } else {
            $result = $target;
        }
        return $result;
    }
?>