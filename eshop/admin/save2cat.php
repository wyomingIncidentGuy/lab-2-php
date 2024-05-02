<?php
	// подключение библиотек
	require "secure/session.inc.php";
    require "../inc/config.inc.php";
	require "../inc/lib.inc.php";

    if(!addItemToCatalog($_POST['title'], $_POST['author'], $_POST['pubyear'], $_POST['price'], $link)){
        echo 'Произошла ошибка при добавлении товара в каталог';
    }else{
        header("Location: add2cat.php");
        exit;
    }
