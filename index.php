<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/main.css">
    <title>project</title>
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
    <section class="section main">
        <div class="container">
            <div class="main__inner">
                <!-- <div class="main__content">
                    <h2 class="main__content-title">
                        ФК YOUR__TEAM-NAME
                    </h2>
                    <div class="main__content-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis exercitationem quod velit commodi animi nam ipsum sapiente autem, maiores aut laudantium at eaque similique repellendus reiciendis possimus eos neque iste.
                    </div>
                </div> -->
    
                <div class="main__slider">
                <?php
                    // Параметры для подключения
                    $db_host = "localhost"; 
                    $db_user = "root"; // Логин БД
                    $db_password = "root"; // Пароль БД
                    $db_base = 'fc_db'; // Имя БД
                    $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

                    $result = $mysqli->query("SELECT * FROM `main-slider` ");
                    while($slider = $result->fetch_assoc()):
                ?>
                    <div class="main__slider-item">
                        <img src=
                            <?php
                                echo $slider['slider_image'];
                            ?>
                        alt="">
                        <p>
                            <?php
                                echo $slider['slider_text'];
                            ?>
                        </p>
                    </div>
                
                    <?php endwhile;?>
                    
                </div>
            </div>
        </div>
    </section>
    <section class="section main__matches">
        <div class="container">
            <div class="main__matches__inner">

                <?php
                    // Параметры для подключения
                    $db_host = "localhost"; 
                    $db_user = "root"; // Логин БД
                    $db_password = "root"; // Пароль БД
                    $db_base = 'fc_db'; // Имя БД
                    $db_table = "matches"; // Имя Таблицы БД
                    
                    // Подключение к базе данных
                    $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

                    $result = $mysqli->query("SELECT * FROM `matches`
                    WHERE `matches_is_over` = 1 
                    ORDER BY `matches_pubdate` DESC limit 0,1 ");
                    while($matches = $result->fetch_assoc()):
                ?>

                <div class="main__matches-item main-last">
                    <h3 class="main__matches-item__title">
                        <?php
                            echo $matches['matches_league'];
                        ?>
                    </h3>
                    <div class="main__matches-item__date">
                        <?php
                            echo $matches['matches_pubdate'];
                        ?>
                    </div>
                    <div class="main__matches-item__inner">
                        <div class="main__matches-item__team main__matches-item__team-first">
                            <div class="main__matches-item__team__logo">
                                <img src=
                                <?php
                                    echo $matches['matches_team1_img'];
                                ?>
                                alt="">
                            </div>
                            <div class="main__matches-item__team__name">
                                <?php
                                    echo $matches['matches_team1'];
                                ?>
                            </div>
                        </div>
                        <div class="main__matches-item__score">
                                <?php
                                    echo $matches['matches_team1_score'];
                                ?>
                                -
                                <?php
                                    echo $matches['matches_team2_score'];
                                ?>
                        </div>
                        <div class="main__matches-item__team main__matches-item__team-second">
                            <div class="main__matches-item__team__logo">
                                <img src=
                                <?php
                                    echo $matches['matches_team2_img'];
                                ?>
                                alt="">
                            </div>
                            <div class="main__matches-item__team__name">
                                <?php
                                    echo $matches['matches_team2'];
                                ?>
                            </div>
                        </div> 
                    </div>
            
                </div>

                <?php endwhile;?>
                
                <?php
                    // Параметры для подключения
                    $db_host = "localhost"; 
                    $db_user = "root"; // Логин БД
                    $db_password = "root"; // Пароль БД
                    $db_base = 'fc_db'; // Имя БД
                    $db_table = "matches"; // Имя Таблицы БД
                    
                    // Подключение к базе данных
                    $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

                    $result = $mysqli->query("SELECT * FROM `matches`
                    WHERE `matches_is_over` = 0 
                    ORDER BY `matches_pubdate` limit 0,1 ");
                    while($matches = $result->fetch_assoc()):
                ?>

                <div class="main__matches-item main-future">
                    <h3 class="main__matches-item__title">
                        <?php
                            echo $matches['matches_league'];
                        ?>
                    </h3>
                    <div class="main__matches-item__date">
                        <?php
                            echo $matches['matches_pubdate'];
                        ?>
                    </div>
                    <div class="main__matches-item__inner">
                        <div class="main__matches-item__team main__matches-item__team-first">
                            <div class="main__matches-item__team__logo">
                                <img src=
                                <?php
                                    echo $matches['matches_team1_img'];
                                ?>
                                alt="">
                            </div>
                            <div class="main__matches-item__team__name">
                                <?php
                                    echo $matches['matches_team1'];
                                ?> 
                            </div>
                        </div>
                        <div class="main__matches-item__score">
                            VS
                        </div>
                        <div class="main__matches-item__team main__matches-item__team-second">
                            <div class="main__matches-item__team__logo">
                                <img src=
                                    <?php
                                        echo $matches['matches_team2_img'];
                                    ?>
                                alt="">
                            </div>
                            <div class="main__matches-item__team__name">
                                <?php
                                    echo $matches['matches_team2'];
                                ?> 
                            </div>
                        </div> 
                    </div>
                </div>
                <?php endwhile;?>
            </div>
        </div>
    </section>
    <section class="section main__news">
        <div class="container">
            <div class="main__news__inner">

                <?php
                    // Параметры для подключения
                    $db_host = "localhost"; 
                    $db_user = "root"; // Логин БД
                    $db_password = "root"; // Пароль БД
                    $db_base = 'fc_db'; // Имя БД
                    $db_table = "news"; // Имя Таблицы БД
                    
                    // Подключение к базе данных
                    $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

                    $result = $mysqli->query("SELECT * FROM `news` 
                    ORDER BY `id` DESC limit 0,4 ");
                    while($news = $result->fetch_assoc()):
                ?>

                <div class="main__news-item">
                    <div class="main__news-item__inner">
                        <div class="main__news-item__image">
                            <img src=
                            <?php
                                echo $news['news_image'];
                            ?>
                            alt="">
                        </div>
                        <div class="main__news-item__content">
                            <h4 class="main__news-item__title">
                                <?php
                                    echo $news['news_title'];
                                ?>
                            </h4>
                            <div class="main__news-item__text">
                                <?php
                                    echo $news['news_text'];
                                ?>
                            </div>
                        </div>
                    </div>
                    <time class="main__news-item__pubdate">
                        <?php
                            echo $news['news_pubdate'];
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