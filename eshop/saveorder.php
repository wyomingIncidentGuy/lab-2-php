<?php
	require "inc/lib.inc.php";
	require "inc/config.inc.php";

    $orderDate = (string) date('d-m-Y H:i:s');
    $order = implode('|', $_POST);
    $order .= '|' . $basket['orderid'] . '|' . $orderDate;
    addOrderToLog($order);
    saveOrder($orderDate);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Сохранение данных заказа</title>
</head>
<body>
	<p>Ваш заказ принят.</p>
	<p><a href="catalog.php">Вернуться в каталог товаров</a></p>
</body>
</html>