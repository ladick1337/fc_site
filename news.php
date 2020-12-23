<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Новости</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__menu__inner">
                <div class="logo">
                    <a href="index.php">
                        <img src="images/logo100.png" alt="">
                    </a>
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
    </header>

    <section class="section news">
        <div class="container">
            <div class="news__inner">

                <?php
                    // Параметры для подключения
                    $db_host = "localhost"; 
                    $db_user = "root"; // Логин БД
                    $db_password = "root"; // Пароль БД
                    $db_base = 'fc_db'; // Имя БД
                    $db_table = "accounts"; // Имя Таблицы БД
                    
                    // Подключение к базе данных
                    $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

                    $result = $mysqli->query("SELECT * FROM `news`
                    ORDER BY `news_pubdate` DESC ");
                    while($news = $result->fetch_assoc()):
                ?>

                <div class="news__item">
                    <div class="news__item__image">
                        <img src=
                        <?php
                        echo $news['news_image'];
                        ?>
                        alt="">
                    </div>
                    <div class="news__item__content">
                        <h4 class="news__item__content-title">
                            <?php
                            echo $news['news_title'];
                            ?>
                        </h4>
                        <time class="news__item__content-pubdate">
                        <?php
                            echo $news['news_pubdate'];
                            ?>
                        </time>
                        <p class="news__item__content-text">
                        <?php
                            echo $news['news_text'];
                            ?>
                        </p>
                    </div>
                </div>
                <?php endwhile;?>


                <div class="news__item">
                    <div class="news__item__image">
                        <img src="images/news_1_300.jpg" alt="">
                    </div>
                    <div class="news__item__content">
                        <h4 class="news__item__content-title">
                            Бавария сенсационно потерпела разгромное поражение от Хоффенхайма
                        </h4>
                        <time class="news__item__content-pubdate">
                            30.11.2020
                        </time>
                        <p class="news__item__content-text">
                            В поединке второго тура немецкой Бундеслиги Хоффенхайм принимал на своем поле Баварию, которая в прошлом сезоне стала чемпионом Германии, а также триумфатором Лиги чемпионов и Кубка Германии.
                        </p>
                    </div>
                </div>
                <div class="news__item">
                    <div class="news__item__image">
                        <img src="images/news_1_300.jpg" alt="">
                    </div>
                    <div class="news__item__content">
                        <h4 class="news__item__content-title">
                            Бавария сенсационно потерпела разгромное поражение от Хоффенхайма
                        </h4>
                        <time class="news__item__content-pubdate">
                            30.11.2020
                        </time>
                        <p class="news__item__content-text">
                            В поединке второго тура немецкой Бундеслиги Хоффенхайм принимал на своем поле Баварию, которая в прошлом сезоне стала чемпионом Германии, а также триумфатором Лиги чемпионов и Кубка Германии.
                        </p>
                    </div>
                </div>
                <div class="news__item">
                    <div class="news__item__image">
                        <img src="images/news_1_300.jpg" alt="">
                    </div>
                    <div class="news__item__content">
                        <h4 class="news__item__content-title">
                            Бавария сенсационно потерпела разгромное поражение от Хоффенхайма
                        </h4>
                        <time class="news__item__content-pubdate">
                            30.11.2020
                        </time>
                        <p class="news__item__content-text">
                            В поединке второго тура немецкой Бундеслиги Хоффенхайм принимал на своем поле Баварию, которая в прошлом сезоне стала чемпионом Германии, а также триумфатором Лиги чемпионов и Кубка Германии.
                        </p>
                    </div>
                </div>
                <div class="news__item">
                    <div class="news__item__image">
                        <img src="images/news_1_300.jpg" alt="">
                    </div>
                    <div class="news__item__content">
                        <h4 class="news__item__content-title">
                            Бавария сенсационно потерпела разгромное поражение от Хоффенхайма
                        </h4>
                        <time class="news__item__content-pubdate">
                            30.11.2020
                        </time>
                        <p class="news__item__content-text">
                            В поединке второго тура немецкой Бундеслиги Хоффенхайм принимал на своем поле Баварию, которая в прошлом сезоне стала чемпионом Германии, а также триумфатором Лиги чемпионов и Кубка Германии.
                        </p>
                    </div>
                </div>
                <div class="news__item">
                    <div class="news__item__image">
                        <img src="images/news_1_300.jpg" alt="">
                    </div>
                    <div class="news__item__content">
                        <h4 class="news__item__content-title">
                            Бавария сенсационно потерпела разгромное поражение от Хоффенхайма
                        </h4>
                        <time class="news__item__content-pubdate">
                            30.11.2020
                        </time>
                        <p class="news__item__content-text">
                            В поединке второго тура немецкой Бундеслиги Хоффенхайм принимал на своем поле Баварию, которая в прошлом сезоне стала чемпионом Германии, а также триумфатором Лиги чемпионов и Кубка Германии.
                        </p>
                    </div>
                </div>
                <div class="news__item">
                    <div class="news__item__image">
                        <img src="images/news_1_300.jpg" alt="">
                    </div>
                    <div class="news__item__content">
                        <h4 class="news__item__content-title">
                            Бавария сенсационно потерпела разгромное поражение от Хоффенхайма
                        </h4>
                        <time class="news__item__content-pubdate">
                            30.11.2020
                        </time>
                        <p class="news__item__content-text">
                            В поединке второго тура немецкой Бундеслиги Хоффенхайм принимал на своем поле Баварию, которая в прошлом сезоне стала чемпионом Германии, а также триумфатором Лиги чемпионов и Кубка Германии.
                        </p>
                    </div>
                </div>
                <div class="news__item">
                    <div class="news__item__image">
                        <img src="images/news_1_300.jpg" alt="">
                    </div>
                    <div class="news__item__content">
                        <h4 class="news__item__content-title">
                            Бавария сенсационно потерпела разгромное поражение от Хоффенхайма
                        </h4>
                        <time class="news__item__content-pubdate">
                            30.11.2020
                        </time>
                        <p class="news__item__content-text">
                            В поединке второго тура немецкой Бундеслиги Хоффенхайм принимал на своем поле Баварию, которая в прошлом сезоне стала чемпионом Германии, а также триумфатором Лиги чемпионов и Кубка Германии.
                        </p>
                    </div>
                </div>
                <div class="news__item">
                    <div class="news__item__image">
                        <img src="images/news_1_300.jpg" alt="">
                    </div>
                    <div class="news__item__content">
                        <h4 class="news__item__content-title">
                            Бавария сенсационно потерпела разгромное поражение от Хоффенхайма
                        </h4>
                        <time class="news__item__content-pubdate">
                            30.11.2020
                        </time>
                        <p class="news__item__content-text">
                            В поединке второго тура немецкой Бундеслиги Хоффенхайм принимал на своем поле Баварию, которая в прошлом сезоне стала чемпионом Германии, а также триумфатором Лиги чемпионов и Кубка Германии.
                        </p>
                    </div>
                </div>
                <div class="news__item">
                    <div class="news__item__image">
                        <img src="images/news_1_300.jpg" alt="">
                    </div>
                    <div class="news__item__content">
                        <h4 class="news__item__content-title">
                            Бавария сенсационно потерпела разгромное поражение от Хоффенхайма
                        </h4>
                        <time class="news__item__content-pubdate">
                            30.11.2020
                        </time>
                        <p class="news__item__content-text">
                            В поединке второго тура немецкой Бундеслиги Хоффенхайм принимал на своем поле Баварию, которая в прошлом сезоне стала чемпионом Германии, а также триумфатором Лиги чемпионов и Кубка Германии.
                        </p>
                    </div>
                </div>
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
    <script type="text/javascript" src="js/header_fixed.js"></script>
</body>
</html>