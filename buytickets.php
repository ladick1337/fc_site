<?php
 // Параметры для подключения
 $db_host = "localhost"; 
 $db_user = "root"; // Логин БД
 $db_password = "root"; // Пароль БД
 $db_base = 'fc_db'; // Имя БД
 $db_table = "accounts"; // Имя Таблицы БД
 
 // Подключение к базе данных
 $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" >
        $(function(){
            var id = $(".choose_match").val();
            $.ajax({
                    type: "POST",
                    url: "choose_sector.php",
                    data: {id: id},
                    success: function(data){
                        $(".choose_sector").html(data);
                    }
                });
            $(".choose_match").change(function(){
                var id = $(".choose_match").val();
                if(id == 0){

                }
                $.ajax({
                    type: "POST",
                    url: "choose_sector.php",
                    data: {id: id},
                    success: function(data){
                        $(".choose_sector").html(data);
                    }
                });

                var place_id = $(".sector").val();
                $.ajax({
                        type: "POST",
                        url: "choose_place.php",
                        data: {id: place_id},
                        success: function(data){
                            $(".choose_place").html(data);
                        }
                    });
                $(".choose_sector").change(function(){
                    var place_id = $(".sector").val();
                    var sector_id = $(".choose_match").val();
                    if(place_id == 0){

                    }
                    $.ajax({
                        type: "POST",
                        url: "choose_place.php",
                        data: {id: place_id, match_id: sector_id},
                        success: function(data){
                            $(".choose_place").html(data);
                        }
                    });
                });
            });
        
    
                var place_id = $(".sector").val();
                var sector_id = $(".choose_match").val();
                $.ajax({
                        type: "POST",
                        url: "choose_place.php",
                        data: {id: place_id, match_id: sector_id},
                        success: function(data){
                            $(".choose_place").html(data);
                        }
                    });
                $(".sector").change(function(){
                    var place_id = $(".sector").val();
                    var sector_id = $(".choose_match").val();
                    if(place_id == 0){

                    }
                    $.ajax({
                        type: "POST",
                        url: "choose_place.php",
                        data: {id: place_id, match_id: sector_id},
                        success: function(data){
                            $(".choose_place").html(data);
                        }
                    });
                });
            
        });
   
    </script>
    <title>Buy</title>
</head>
<body style="background: #020030">
    <div class="registration__inner">
        <div class="registration__authorization" onclick="expansion()">
            <form action="buytickets-verification.php" method="POST">
                <select class="choose_match" name="match_id" >
                    <option value="0">Выберите матч</option>
                    <?php
                    $result = $mysqli->query("SELECT DISTINCT `match_id` FROM `tickets` WHERE `bought` = 0 ");
                    while($match_id = $result->fetch_assoc()):{
                        $match_id_id = $match_id['match_id'];
                        $result2 = $mysqli->query("SELECT DISTINCT * FROM `match_names` WHERE `id` = '$match_id_id' ");
                        $result2 = $result2->fetch_assoc();
                    }
                    ?>
                    <option value="
                    <?php
                        echo $result2['id'];
                    ?>
                    ">
                        <?php
                            echo $result2['match_name'];
                        ?>
                    </option>
                    <?php
                    print_r($result3['match_name']);
                    ?>
                <?php endwhile; ?>
                

                </select>
                <span class="choose_sector">

                </span>
                <span class="choose_place">

                </span>
                <input type="submit" value="КУПИТЬ">
            </form>
            
        </div>
    </div>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/registration.js"></script>
</body>
</html>