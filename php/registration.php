<?php
    if (isset($_POST['login']) && isset($_POST['password']) && isset($_POST['email'])){

        // Переменные с формы
        $login = $_POST['login'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        
        if(mb_strlen($login) < 5 || mb_strlen($login) > 30){
            echo "Слишком маленькая/большая длина логина";
            exit();
        }
        else if(mb_strlen($password) < 5 || mb_strlen($password) < 5){
            echo "Слишком маленькая/большая длина пароля";
            exit();
        }

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
        $result = $mysqli->query("SELECT * FROM `$db_table` WHERE `login` = '$login'");
        $user = $result->fetch_assoc();
        if(count($user) != 0){
            echo "Такой пользователь уже существует";
            exit();
        }
        $result = $mysqli->query("SELECT * FROM `$db_table` WHERE `email` = '$email'");
        $user = $result->fetch_assoc();
        if(count($user) != 0){
            echo "Пользователь с указанным e-mail уже существует";
            exit();
        }

        $result = $mysqli->query("INSERT INTO ".$db_table." (login,password,email) VALUES ('$login','$password','$email')");
        
        // if ($result == true){
        //     echo "Информация занесена в базу данных";
        // }else{
        //     echo "Информация не занесена в базу данных";
        // }
        
        $mysqli->close();

        header('Location: /');
    }
?>


