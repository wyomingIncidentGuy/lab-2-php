<?php
    $count = 0;
    $last = "";

    if(isset($_COOKIE['count']) and isset($_COOKIE['last'])){
        $count = $_COOKIE['count'];
        $last = $_COOKIE['last'];
    }


    $count++;
    $last = date('d-m-Y H:i:s');
    setcookie('count', $count, 3600 * 24);
    setcookie('last', $last, 3600 *  24);