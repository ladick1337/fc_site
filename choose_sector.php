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
    $result = $mysqli->query("SELECT DISTINCT `sector_id` FROM `tickets` WHERE `bought` = 0 AND `match_id` = $id");
    echo "<select class = 'sector' name='sector_id'>";
    echo "<option value = '0'> Выберите сектор </option>";
    while($sector_id = $result->fetch_assoc()){
        echo "<option value = '{$sector_id['sector_id']}'>{$sector_id['sector_id']}</option>";
    }
    echo "</select>";
}

?>