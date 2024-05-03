<?php
	// подключение библиотек
	require "inc/lib.inc.php";
	require "inc/config.inc.php";

    $basketItems = myBasket();
    $i = 0;
    $sum = 0;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Корзина пользователя</title>
</head>
<body>
	<h1>Ваша корзина</h1>
<?php
    if(sizeof($basket) == 1){
        echo "Корзина пуста! Вернитесь в <a href = 'catalog.php'>каталог</a>";
    }
    else{
        echo "Вернуться в <a href = 'catalog.php'>каталог</a>";
    }
?>

<?php
    if(is_bool($basketItems) != true){
?>
<table border="1" cellpadding="5" cellspacing="0" width="100%">
<tr>
	<th>N п/п</th>
	<th>Название</th>
	<th>Автор</th>
	<th>Год издания</th>
	<th>Цена, руб.</th>
	<th>Количество</th>
	<th>Удалить</th>
</tr>

<?php
	foreach($basketItems as $basketItem){
    $i++;
    $q = (int) $basketItem['quantity'];
    $sum +=  (int) $basketItem['price'] * $q;
?>
    <tr>
        <td><?=$i?></td>
        <td><?=$basketItem['title']?></td>
        <td><?=$basketItem['author']?></td>
        <td><?=$basketItem['pubyear']?></td>
        <td><?=$basketItem['price']?></td>
        <td><?=$basketItem['quantity']?></td>
        <td><a href = "delete_from_basket.php?id=<?=$basketItem['id']?>">Удалить</a></td>
    </tr>
<?php
    }

?>
</table>

<p>Всего товаров в корзине на сумму: <?=$sum?>руб.</p>

<div align="center">
	<input type="button" value="Оформить заказ!" onClick="location.href='orderform.php'" />
</div>
<?php
    }
?>
</body>
</html>