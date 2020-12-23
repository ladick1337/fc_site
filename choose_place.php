<?php
// Параметры для подключения
$db_host = "localhost"; 
$db_user = "root"; // Логин БД
$db_password = "root"; // Пароль БД
$db_base = 'fc_db'; // Имя БД
$db_table = "accounts"; // Имя Таблицы БД

// Подключение к базе данных
$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

if(isset($_POST['id']) && !empty($_POST['id'])){
    $id = intval($_POST['id']);
    $match_id = intval($_POST['match_id']);
    $result = $mysqli->query("SELECT DISTINCT `place_id` FROM `tickets` WHERE `bought` = 0 AND `sector_id` = $id AND  `match_id` = $match_id");
    echo "<select class = 'place' name='place_id'>";
    echo "<option value = '0'> Выберите место </option>";
    while($place_id = $result->fetch_assoc()){
        echo "<option value = '{$place_id['place_id']}'>{$place_id['place_id']}</option>";
    }
    echo "</select>";
}


?>