<?php
if(isset($_SERVER["HTTP_REFERER"])){
    $dt = date("d-m-Y H:i:s");
    $page = $_SERVER['REQUEST_URI'];
    $url = $_SERVER['HTTP_REFERER'];
    $str = $dt . ' ' . $page . ' ' . $url . "\n";
    $log = fopen(PATH_LOG, 'a+');
    fwrite($log, $str);
    fclose($log);
}
