<?php
	require "inc/lib.inc.php";
	require "inc/config.inc.php";

    $bookId = $_GET['id'];
    add2Basket($bookId);
    header('Location: catalog.php');