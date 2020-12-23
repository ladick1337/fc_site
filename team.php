<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    
    <title>Команда</title>
</head>
<body class="teams-body">
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

    <section class="section teams">
        <div class="container">
            <div class="teams__inner">

                <!-- <?php
                    // // Параметры для подключения
                    // $db_host = "localhost"; 
                    // $db_user = "root"; // Логин БД
                    // $db_password = "root"; // Пароль БД
                    // $db_base = 'fc_db'; // Имя БД
                    // $db_table = "matches"; // Имя Таблицы БД
                    
                    // // Подключение к базе данных
                    // $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

                    // $result = $mysqli->query("SELECT * FROM `matches` 
                    // WHERE `matches_is_over`=1 ");
                    // while($matches = $result->fetch_assoc()):
                ?> -->

                <div class="team-number-1 teams_numb">
                    
                    <div class="team__inner">
                        <div class="team__players">
                            <h4 class="team__players-title">
                                Основной состав
                            </h4>

                            <?php
                                // Параметры для подключения
                                $db_host = "localhost"; 
                                $db_user = "root"; // Логин БД
                                $db_password = "root"; // Пароль БД
                                $db_base = 'fc_db'; // Имя БД
                                $db_table = "players"; // Имя Таблицы БД
                                
                                // Подключение к базе данных
                                $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

                                $result = $mysqli->query("SELECT * FROM `players` 
                                WHERE `team_id`=1 ");
                                while($players = $result->fetch_assoc()):
                            ?>

                            <div class="team__players-item">
                                <div class="team__players-item__img">
                                    <img src=
                                    <?php
                                        echo $players['player_image'];
                                    ?>
                                    alt="">
                                </div>
                                <div class="team__players-item__info">
                                    <div class="team__players-item__info__FLN">
                                        <div class="team__players-item__info__Number">
                                        <?php
                                            echo $players['player_id'];
                                        ?>
                                        </div>
                                        <div class="team__players-item__info__FL">
                                            <p class="team__players-item__info__FirstName">
                                            <?php
                                                echo $players['FirstName'];
                                            ?>
                                            </p>
                                            <p class="team__players-item__info__LastName">
                                            <?php
                                                echo $players['LastName'];
                                            ?>
                                            </p>
                                        </div>
                                    </div>
                                    <p class="team__players-item__info__position">
                                        <?php
                                            echo $players['player_position'];
                                        ?>
                                    </p>
                                    <div class="team__players-item__info__characterisctics">
                                        <div class="player__HW">
                                            <p class="player-height">
                                                Рост: 
                                                <?php
                                                    echo $players['height'];
                                                ?>
                                            </p>
                                            <p class="player-weight">
                                                Вес: 
                                                <?php
                                                    echo $players['weight'];
                                                ?>
                                            </p>
                                        </div>
                                        <p class="player-age">
                                            Возраст: 
                                            <?php
                                                echo $players['age'];
                                            ?>
                                        </p>
                                        <p class="nationality">
                                            Гражданство: 
                                            <?php
                                                echo $players['nationality'];
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <?php endwhile;?>

                            

                        </div>
                    

                        <h4 class="team__trainers-title">
                            Тренерский состав
                        </h4>
                        <div class="team__trainers">
                            
                        <?php
                                // Параметры для подключения
                                $db_host = "localhost"; 
                                $db_user = "root"; // Логин БД
                                $db_password = "root"; // Пароль БД
                                $db_base = 'fc_db'; // Имя БД
                                $db_table = "trainers"; // Имя Таблицы БД
                                
                                // Подключение к базе данных
                                $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

                                $result = $mysqli->query("SELECT * FROM `trainers` ");
                                while($trainers = $result->fetch_assoc()):
                            ?>

                            <div class="team__trainers-item">
                                <div class="team__trainers-item__img">
                                    <img src=
                                    <?php
                                        echo $trainers['trainer_image'];
                                    ?>
                                    alt="">
                                </div>
                                <div class="team__trainers-item__info">
                                    
                                    <div class="team__trainers-item__info__FML">
                                         <div class="name-delimiter">
                                            <p class="team__trainers-item__info__FirstName">
                                            <?php
                                                echo $trainers['FirstName'];
                                            ?>
                                            </p>
                                            <p class="team__trainers-item__info__MiddleName">
                                            <?php
                                                echo $trainers['MiddleName'];
                                            ?>
                                            </p>
                                         </div>
                                         <p class="team__trainers-item__info__LastName">
                                            <?php
                                                echo $trainers['LastName'];
                                            ?>
                                          </p>

                                    </div>
                                    <p class="team__trainers-item__info__position">
                                        <?php
                                            echo $trainers['trainer_position'];
                                        ?>
                                    </p>
                                    
                                </div>
                            </div>

                            <?php endwhile;?>
                        </div>



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