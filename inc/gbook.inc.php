<?php
/* Основные настройки */
const DB_HOST = 'localhost';
const DB_LOGIN = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'gbook';
$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);
/* Основные настройки */

/* Сохранение записи в БД */
if(isset($_POST['name']) and isset($_POST['email']) and isset($_POST['msg'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    $addQuery = mysqli_query($link, "INSERT INTO msgs (name, email, msg) VALUES ('$name', '$email', '$msg')");
    unset($_POST['name']);
    unset($_POST['email']);
    unset($_POST['msg']);
}

/* Сохранение записи в БД */

/* Удаление записи из БД */
if(isset($_GET["del"])){
    $deleteQuery = mysqli_query($link, "DELETE FROM msgs WHERE id = {$_GET['del']}");
}
/* Удаление записи из БД */
?>
<h3>Оставьте запись в нашей Гостевой книге</h3>

<form method="post" action="<?= $_SERVER['REQUEST_URI']?>">
Имя: <br /><input type="text" name="name" /><br />
Email: <br /><input type="text" name="email" /><br />
Сообщение: <br /><textarea name="msg"></textarea><br />

<br />

<input type="submit" value="Отправить!" />

</form>
<?php
/* Вывод записей из БД */
$getQuery = mysqli_fetch_all(mysqli_query($link, 'SELECT id, name, email, msg, UNIX_TIMESTAMP(datetime) as dt FROM msgs ORDER BY id DESC'));
echo "<p>" .  "Всего записей в гостевой книге: " . count($getQuery) ."</p>";
echo "<pre>";

for($i = 0; $i < count($getQuery); $i++){
    $inc = ++$i;
    echo "<p>";
    echo "<a " . "href = 'mailto:" . $getQuery[$i][2] . "'" . ">"  . $getQuery[$i][1] . "</a>" . "<br>" . " написал в " . date("d-m-Y H:i:s", $getQuery[$i][4]) . "<br>". $getQuery[$i][3] . "<br>";
    echo "</p>";
    echo "<p align = 'right'>";
    echo "<a href = '../lab2-php/index.php?id=gbook&del={$inc}'>link</a>";
    echo "</p>";
}
mysqli_close($link);
/* Вывод записей из БД */
?>