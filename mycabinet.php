<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    
    <title>My Cabinet</title>
</head>
<body style="background: #020030">
    <div class="registration__inner">
        <div class="registration__authorization" onclick="expansion()">
            <p>Ваши билеты:</p>
            <div class="tickets__inner">
                <div class="tickets-characteristic">Матч</div>
                <div class="tickets-characteristic">Сектор</div>
                <div class="tickets-characteristic">Место</div>
                <div class="tickets-characteristic">Стадион</div>
                <div class="tickets-characteristic">Дата, время</div>
                <div class="tickets-characteristic">Код билета</div>
                <div class="tickets-characteristic">Цена</div>
            </div>
            <div class="purchased-tickets">
                <?php
                    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                    // Параметры для подключения
                    $db_host = "localhost"; 
                    $db_user = "root"; // Логин БД
                    $db_password = "root"; // Пароль БД
                    $db_base = 'fc_db'; // Имя БД
                    $db_table = "tickets"; // Имя Таблицы БД
                    
                    // Подключение к базе данных
                    // $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);
                    // $result = $mysqli->query('SELECT * FROM `$db_table` WHERE `tickets_owner_id` = $_COOKIE["user"] ');
                    $cookie_id = $_COOKIE['id'];
                    // $induction = mysqli_connect($db_host,$db_user,$db_password,$db_base);
                    // $query = "SELECT * FROM `$db_table` WHERE `tickets_owner_id` = 1" ;
                    // $result = mysqli_query($induction, $query);
                    
                    $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);
                    $result = $mysqli->query("SELECT * FROM `$db_table` WHERE `tickets_owner_id` = '$cookie_id' ");
                    
                    // $user_tickets = $result->fetch_assoc();
                    // print_r($user_tickets);
                    while($user_tickets = $result->fetch_assoc()):
                ?>
                <div class="user-ticket">
                    <div class="user-ticket_match">
                        <p>
                            <?php
                                $temp = $user_tickets['match_id'];
                                $resultat = $mysqli->query("SELECT `match_name` FROM `match_names` WHERE `id` = '$temp' ");
                                $temp2 = $resultat->fetch_assoc();
                                echo $temp2['match_name'];
                            ?>
                        </p>
                    </div>
                    <div class="user-ticket_sector">
                        <p>
                            <?php
                            
                                echo $user_tickets['sector_id'];

                            ?>
                        </p>
                    </div>
                    <div class="user-ticket_place">
                        <p>
                            <?php
                                
                                echo $user_tickets['place_id'];

                            ?>
                        </p>
                    </div>
                    <div class="user-ticket_stadium">
                        <p>
                            <?php
                                $temp = $user_tickets['stadium_id'];
                                $resultat = $mysqli->query("SELECT `stadium_name` FROM `stadiums` WHERE `id` = '$temp' ");
                                $temp2 = $resultat->fetch_assoc();
                                echo $temp2['stadium_name'];
                            ?>
                        </p>
                    </div>
                    <div class="user-ticket_time">
                        <p>
                        <?php
                            $temp = $user_tickets['time_id'];
                            $resultat = $mysqli->query("SELECT `time` FROM `time_match` WHERE `id` = '$temp' ");
                            $temp2 = $resultat->fetch_assoc();
                            echo $temp2['time'];
                        ?>
                        </p>
                    </div>
                    <div class="user-ticket_hash">
                        <p>
                        <?php
                            $temp = $user_tickets['hash_id'];
                            $resultat = $mysqli->query("SELECT `hash` FROM `hash_ticket` WHERE `id` = '$temp' ");
                            $temp2 = $resultat->fetch_assoc();
                            echo $temp2['hash'];
                        ?>
                        </p>
                    </div>
                    <div class="user-ticket_price">
                        <p>
                        <?php
                            $temp = $user_tickets['price_id'];
                            $resultat = $mysqli->query("SELECT `tickets_price` FROM `tickets_price` WHERE `id` = '$temp' ");
                            $temp2 = $resultat->fetch_assoc();
                            echo $temp2['tickets_price'];
                        ?>
                        </p>
                    </div>
                </div>
                    <?php endwhile;?>
                
                
            </div>
            <form class="logout" action="logout.php">
                <button class="logout-btn">
                    ВЫЙТИ
                </button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/registration.js"></script>
</body>
</html>