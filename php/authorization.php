<?php
    if (isset($_POST['login']) && isset($_POST['password'])){

        // Переменные с формы
        $login = $_POST['login'];
        $password = $_POST['password'];
        
        $password = md5($password."kjsdgbk12123");

        // Параметры для подключения
        $db_host = "localhost"; 
        $db_user = "root"; // Логин БД
        $db_password = "root"; // Пароль БД
        $db_base = 'fc_db'; // Имя БД
        $db_table = "accounts"; // Имя Таблицы БД
        
        // Подключение к базе данных
        $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);
    
        // Если есть ошибка соединения, выводим её и убиваем подключение
        if ($mysqli->connect_error) {
            die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
        }
        
        $result = $mysqli->query("SELECT * FROM `$db_table` WHERE `login` = '$login' AND `password` = '$password'");
        $user = $result->fetch_assoc();
        if(count($user) == 0){
            echo "Такой пользователь не найден";
            exit();
        }
        setcookie('user', $user['login'], time() + 60*60, "/");
        setcookie('id', $user['id'], time() + 60*10, "/");
        $mysqli->close();

        header('Location: /');
    }
?>