<?php
	// подключение библиотек
	require "inc/lib.inc.php";
	require "inc/config.inc.php";
    deleteItemFromBasket($_GET['id']);
    header('Location: basket.php');