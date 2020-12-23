<?php
// Параметры для подключения
$db_host = "localhost"; 
$db_user = "root"; // Логин БД
$db_password = "root"; // Пароль БД
$db_base = 'fc_db'; // Имя БД
$db_table = "accounts"; // Имя Таблицы БД

// Подключение к базе данных
$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

if (isset($_POST['match_id']) && isset($_POST['sector_id']) && isset($_POST['place_id']) && isset($_COOKIE['id']) ){
    $id_match = $_POST['match_id'];
    $id_sector = $_POST['sector_id'];
    $id_place = $_POST['place_id'];
    $cookie_id = $_COOKIE['id'];

    $result = $mysqli->query("UPDATE `tickets`
    SET `bought`=1,`tickets_owner_id`= $cookie_id
    WHERE `match_id`=$id_match AND `sector_id`=$id_sector AND `place_id`=$id_place ");

header('Location: /');
}

?>