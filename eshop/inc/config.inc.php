<?php
    const DB_HOST = 'localhost';
    const DB_LOGIN = 'root';
    const DB_PASSWORD = '';
    const DB_NAME = 'eshop';
    const ORDERS_LOG = 'W:/domains/localhost/lab-2-php/eshop/admin/orders.log';

    $basket = [];
    $count = 0;
    $link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);
    if(function_exists('basketInit')){
        basketInit();
    }