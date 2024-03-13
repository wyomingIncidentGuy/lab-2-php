<?php
$dt = date("d-m-Y H:i:s");
$page = $_SERVER['REQUEST_URI'];
$url = $_SERVER['HTTP_REFERER'];
$str = $dt . ' ' . $page . ' ' . $url;
$log = fopen('path.log', 'a+');
fwrite($log, $str, 25);
fclose($log);