<?php

session_start();
if(!isset($_SESSION['admin'])){
    header('Location: http://localhost/lab-2-php/eshop/admin/secure/login.php?ref=' . 'http://localhost/' . $_SERVER["REQUEST_URI"]);
    exit;
}
