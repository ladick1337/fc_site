<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <title>project</title>
</head>
<body class="photo-body">
    <header class="header">
        <div class="container">
            <div class="header__menu__inner">
                <div class="logo">
                    <a href="index.php">
                        <img src="images/logo100.png" alt="">
                    </a>
                </div>
                <div class="login__menu__inner" >
                    <div class="login__signin">
                        <?php
                            if($_COOKIE['user'] == ''):
                        ?>
                            <a class="login" href="authorization.html">ВОЙТИ</a>
                        <?php else: ?>
                            <a class="login" href="mycabinet.php">
                                <?=$_COOKIE['user']?>
                            </a>
                                 
                        <?php endif;?>
                            

                    </div>
                    <div class="menu">
                        <ul>
                            <li><a href="news.php">Новости</a></li>
                            <li><a href="#">Клуб</a></li>
                            <li><a href="team.php">Команда</a></li>
                            <li><a href="matches.php">Матчи</a></li>
                            <li><a href="buytickets.php">Билеты</a></li>
                            <li><a href="media.php">Медиа</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="section photo">
        <div class="container">
            <div class="photo__inner">

            <?php
                // Параметры для подключения
                $db_host = "localhost"; 
                $db_user = "root"; // Логин БД
                $db_password = "root"; // Пароль БД
                $db_base = 'fc_db'; // Имя БД
                $db_table = "photo"; // Имя Таблицы БД
                                
                // Подключение к базе данных
                $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

                $result = $mysqli->query("SELECT * FROM `photo` ");
                while($photo = $result->fetch_assoc()):
            ?>

                <div class="photo-item">
                    <img src=
                    <?php
                        echo $photo['photo_image'];
                    ?>
                    alt="">
                    <h4 class="photo-item__title">
                        <?php
                            echo $photo['photo_title'];
                        ?>
                    </h4>
                    <time class="photo-item__pubdate">
                    <?php
                        echo $photo['photo_pubdate'];
                    ?>
                    </time>
                </div>

                <?php endwhile;?>

                
            </div>
        </div>
    </section>
    
    <footer class="footer">
        <div class="container">
            <div class="partners">
                <img src="images/favbet.png" alt="">
                <img src="images/favbet.png" alt="">
                <img src="images/favbet.png" alt="">
                <img src="images/favbet.png" alt="">
                <img src="images/favbet.png" alt="">
            </div>
            <div class="contacts__inner">
                <div class="contacts__item">
                    <div class="contacts__item-img">
                        <img src="images/address_icon100.png" alt="">
                    </div>
                    <div class="contacts__item-text">
                        Ул.Пушкина<br>д.Колотушкина 19
                    </div>
                </div>
                <div class="contacts__item">
                    <div class="contacts__item-img">
                        <img src="images/email_icon100.png" alt="">
                    </div>
                    <div class="contacts__item-text">
                        football_club2020@gmail.com
                    </div>
                </div>
                <div class="contacts__item">
                    <div class="contacts__item-img">
                        <img src="images/phone_icon100.png" alt="">
                    </div>
                    <div class="contacts__item-text">
                        <a href="tel:+380710717171">+3 8 071-071-71-71</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>
    <script type="text/javascript" src="js/header_fixed.js"></script>
</body>
</html>