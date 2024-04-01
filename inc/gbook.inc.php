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
}
$addQuery = mysqli_query($link, "INSERT INTO msgs (name, email, msg) VALUES ('$name', '$email', '$msg')");
/* Сохранение записи в БД */

/* Удаление записи из БД */

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
var_dump($getQuery);

for($i = 0; $i < count($getQuery); $i++){
    echo "<p>";
    echo "<a " . "href = 'mailto:" . $getQuery[$i][2] . "'" . ">"  . $getQuery[$i][1] . "</a>" . " написал в " . date("d-m-Y H:i:s", $getQuery[$i][4]) . "<br>";
    echo "</p>";
    echo "<p align = 'right'>";
    echo "</p>";
}
mysqli_close($link);
/* Вывод записей из БД */
?>