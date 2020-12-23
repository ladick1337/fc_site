-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 17 2020 г., 00:46
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fc_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `accounts`
--

INSERT INTO `accounts` (`id`, `login`, `password`, `email`) VALUES
(1, 'asd', '123asd', '123asd@mail.ru'),
(2, 'login', '', 'mail@mail.ru'),
(3, 'login', '', 'mail@mail.ru'),
(4, 'login1', 'pas1', 'lp1@yandex.ru'),
(5, 'admin', 'admin', 'admin@mail.ru'),
(7, 'Administrator', '2cd22cde752846d0c26e45b6580d7275', 'admin@mail.ru'),
(8, 'asdasd123', 'cc4d73c2f321e2852c17df3a70f1e0ec', 'asdasd123@mail.ru'),
(9, 'asdasd123', '45125c1ac6c3b3c75f0969c5e2d6157d', 'mail@mail.ru'),
(10, 'test12', '3c9c2d792b865610566978ccd9af5999', 'test12@mail.ru'),
(11, 'test1', 'e2b55b6f32a2e84318ced688e091f8d8', 'test1@mail.ru'),
(12, 'test123', '78fef7c61fc1a95fbdd3496b70d1552e', 'test123@mail.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `hash_ticket`
--

CREATE TABLE `hash_ticket` (
  `id` int(11) NOT NULL,
  `hash` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `hash_ticket`
--

INSERT INTO `hash_ticket` (`id`, `hash`) VALUES
(5, '24h225'),
(8, '412fa213'),
(7, '8asf7ad'),
(4, 'a8afsh'),
(6, 'f12h7f21'),
(1, 'g45etg4'),
(3, 'he45f3d'),
(2, 'sdg63');

-- --------------------------------------------------------

--
-- Структура таблицы `matches`
--

CREATE TABLE `matches` (
  `id` int(11) NOT NULL,
  `matches_team1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matches_team2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matches_team1_score` int(2) DEFAULT NULL,
  `matches_team2_score` int(2) DEFAULT NULL,
  `matches_league` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matches_pubdate` datetime NOT NULL,
  `matches_team1_img` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matches_team2_img` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matches_is_over` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `matches`
--

INSERT INTO `matches` (`id`, `matches_team1`, `matches_team2`, `matches_team1_score`, `matches_team2_score`, `matches_league`, `matches_pubdate`, `matches_team1_img`, `matches_team2_img`, `matches_is_over`) VALUES
(1, 'команда1', 'команда2', 3, 2, 'лига1', '2020-12-10 17:11:22', 'images/logo100.png', 'images/news_1_300.jpg', 1),
(2, 'команда 3', 'команда 4', NULL, NULL, 'лига будущего', '2020-12-31 00:00:00', 'images/news_1_300.jpg', 'images/logo100.png', 0),
(3, 'komanda5', 'komanda6', 4, 2, 'chempionat mira', '2020-12-11 23:15:17', 'images/news_1_300.jpg', 'images/logo.png', 1),
(4, 'komanda7', 'komanda8', NULL, NULL, 'chempionat mira 2', '2021-12-17 23:15:17', 'images/logo.png', 'images/news_1_300.jpg', 0),
(5, 'Шахтёр', 'Динамо', 5, 3, 'Кубок Украины', '2020-12-17 00:00:30', 'images/logo100.png', 'images/logo100.png', 1),
(6, 'Мариуполь', 'Шахтёр', NULL, NULL, 'Кубок Украины', '2020-12-24 01:00:00', 'images/logo100.png', 'images/logo100.png', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `match_names`
--

CREATE TABLE `match_names` (
  `id` int(11) NOT NULL,
  `match_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `match_names`
--

INSERT INTO `match_names` (`id`, `match_name`) VALUES
(1, 'Шахтёр - Динамо'),
(2, 'Мариуполь - Шахтёр');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news_title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_pubdate` datetime NOT NULL DEFAULT current_timestamp(),
  `news_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_image` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'images/news_1_300.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `news_title`, `news_pubdate`, `news_text`, `news_image`) VALUES
(1, 'Новый заголовок1', '2020-12-16 16:36:34', 'текст1', 'images/news_1_300.jpg'),
(2, 'заголовок2', '2020-12-16 16:36:34', 'текст2', 'images/news_1_300.jpg'),
(3, 'zagolovok3', '2020-12-16 16:46:08', 'text33333', 'images/logo100.png'),
(4, 'ПСЖ стал первым финалистом Лиги чемпионов ', '2020-12-17 00:39:42', 'ПСЖ впервые в истории стал финалистом Лиги чемпионов, уверенно разгромив РБ Лейпциг 2019/20. Подопечные Томаса Тухеля разбили РБ Лейпциг и впервые в своей истории сыграют в решающем матче – видео голов и обзор игры.\r\n\r\n', 'images/news-img.jpg'),
(5, 'Результаты игрового дня  ЛЧ 2020/21', '2020-12-17 00:39:42', 'Артем Милевский отдал два ассиста, а его Динамо победило с теннисным счетом и прошло дальше – результаты игрового дня  ЛЧ 2020/21, квалификация: Динамо Брест разгромило Астану с ассистами Милевского – все фавориты прошли дальше.', 'images/news_1_300.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `photo`
--

CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `photo_title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_pubdate` datetime NOT NULL DEFAULT current_timestamp(),
  `photo_image` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'images/logo.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `photo`
--

INSERT INTO `photo` (`id`, `photo_title`, `photo_pubdate`, `photo_image`) VALUES
(1, 'заголовок 1 заголовок 1 заголовок 1', '2020-12-16 23:08:03', 'images/logo.png'),
(2, 'заголовок 2 заголовок 2', '2020-12-16 23:08:03', 'images/logo.png'),
(3, 'Шахтёр-Динамо 0-1', '2020-12-16 23:12:41', 'images/news_1_300.jpg'),
(4, 'Шахтёр-Мариуполь 2-1', '2020-12-16 23:12:41', 'images/news_1_300.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `places`
--

INSERT INTO `places` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10);

-- --------------------------------------------------------

--
-- Структура таблицы `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `player_position` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FirstName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LastName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` int(4) NOT NULL,
  `weight` int(4) NOT NULL,
  `age` int(3) NOT NULL,
  `nationality` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `player_image` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `players`
--

INSERT INTO `players` (`id`, `team_id`, `player_id`, `player_position`, `FirstName`, `LastName`, `height`, `weight`, `age`, `nationality`, `player_image`) VALUES
(1, 1, 19, 'Нападающий', 'Иван', 'Иванов', 183, 69, 19, 'ДНР', 'images/player-img.jpg'),
(2, 1, 1, 'Голкипер', 'Константин', 'Константа', 185, 76, 24, 'Украина', 'images/player-img.jpg'),
(3, 1, 44, 'Защитник', 'Михаил', 'Медведев', 186, 78, 25, 'Россия', 'images/player-img.jpg'),
(4, 2, 2, 'Голкипер', 'Андрей', 'Чекушкин', 179, 73, 22, 'Украина', 'images/player-img.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `sectors`
--

CREATE TABLE `sectors` (
  `id` int(11) NOT NULL,
  `sector123` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sectors`
--

INSERT INTO `sectors` (`id`, `sector123`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `stadiums`
--

CREATE TABLE `stadiums` (
  `id` int(11) NOT NULL,
  `stadium_name` varchar(100) NOT NULL,
  `stadium_sectors` int(3) NOT NULL,
  `stadium_places` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `stadiums`
--

INSERT INTO `stadiums` (`id`, `stadium_name`, `stadium_sectors`, `stadium_places`) VALUES
(1, 'Стадион А', 12, 10000),
(2, 'Стадион Б', 10, 8000);

-- --------------------------------------------------------

--
-- Структура таблицы `tickets`
--

CREATE TABLE `tickets` (
  `tickets_id` int(11) NOT NULL,
  `sector_id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  `price_id` int(11) NOT NULL,
  `hash_id` int(11) NOT NULL,
  `match_id` int(11) NOT NULL,
  `bought` tinyint(1) NOT NULL DEFAULT 0,
  `stadium_id` int(11) NOT NULL,
  `time_id` int(11) NOT NULL,
  `tickets_owner_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tickets`
--

INSERT INTO `tickets` (`tickets_id`, `sector_id`, `place_id`, `price_id`, `hash_id`, `match_id`, `bought`, `stadium_id`, `time_id`, `tickets_owner_id`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 10),
(2, 1, 5, 5, 3, 1, 0, 1, 2, NULL),
(3, 2, 7, 6, 4, 1, 1, 1, 3, 10),
(4, 2, 2, 2, 2, 1, 0, 1, 1, NULL),
(5, 1, 6, 5, 5, 1, 1, 1, 1, 10),
(6, 2, 4, 2, 6, 2, 1, 2, 3, 10),
(7, 2, 10, 6, 8, 2, 0, 2, 2, NULL),
(8, 1, 9, 2, 7, 2, 1, 2, 2, 11);

-- --------------------------------------------------------

--
-- Структура таблицы `tickets_price`
--

CREATE TABLE `tickets_price` (
  `id` int(11) NOT NULL,
  `tickets_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tickets_price`
--

INSERT INTO `tickets_price` (`id`, `tickets_price`) VALUES
(1, 100),
(2, 200),
(5, 300),
(6, 400);

-- --------------------------------------------------------

--
-- Структура таблицы `time_match`
--

CREATE TABLE `time_match` (
  `id` int(11) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `time_match`
--

INSERT INTO `time_match` (`id`, `time`) VALUES
(1, '2020-12-03 11:30:00'),
(2, '2020-12-04 17:00:00'),
(3, '2020-12-05 20:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `trainers`
--

CREATE TABLE `trainers` (
  `id` int(11) NOT NULL,
  `trainer_position` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FirstName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MiddleName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LastName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trainer_image` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `trainers`
--

INSERT INTO `trainers` (`id`, `trainer_position`, `FirstName`, `MiddleName`, `LastName`, `trainer_image`) VALUES
(1, 'Главный тренер', 'Иван', 'Иванович', 'Иванов', 'images/player-img.jpg'),
(2, 'Тренер вратарей', 'Олег', 'Олегович', 'Олегов', 'images/player-img.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `user_tickets`
--

CREATE TABLE `user_tickets` (
  `id` int(10) NOT NULL,
  `ticket_hash` varchar(10) NOT NULL,
  `ticket_price` double NOT NULL,
  `ticket_match` int(11) NOT NULL,
  `ticket_stadium` int(11) NOT NULL,
  `ticket_sector` int(3) NOT NULL,
  `ticket_place` int(7) NOT NULL,
  `ticket_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_tickets`
--

INSERT INTO `user_tickets` (`id`, `ticket_hash`, `ticket_price`, `ticket_match`, `ticket_stadium`, `ticket_sector`, `ticket_place`, `ticket_time`) VALUES
(1, 'dasd72asd', 1, 1, 1, 1, 1, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `hash_ticket`
--
ALTER TABLE `hash_ticket`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hash` (`hash`);

--
-- Индексы таблицы `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `match_names`
--
ALTER TABLE `match_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sectors`
--
ALTER TABLE `sectors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`sector123`);

--
-- Индексы таблицы `stadiums`
--
ALTER TABLE `stadiums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stadium_name` (`stadium_name`),
  ADD KEY `stadium_name_2` (`stadium_name`),
  ADD KEY `stadium_name_3` (`stadium_name`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Индексы таблицы `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`tickets_id`),
  ADD UNIQUE KEY `hash_id` (`hash_id`),
  ADD KEY `place_id` (`place_id`),
  ADD KEY `sector_id` (`sector_id`),
  ADD KEY `price_id` (`price_id`),
  ADD KEY `match_id` (`match_id`),
  ADD KEY `stadium_id` (`stadium_id`),
  ADD KEY `time_id` (`time_id`),
  ADD KEY `tickets_owner_id` (`tickets_owner_id`);

--
-- Индексы таблицы `tickets_price`
--
ALTER TABLE `tickets_price`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `time_match`
--
ALTER TABLE `time_match`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_tickets`
--
ALTER TABLE `user_tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticket_match` (`ticket_match`),
  ADD KEY `user_tickets_ibfk_2` (`ticket_stadium`),
  ADD KEY `ticket_time` (`ticket_time`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `hash_ticket`
--
ALTER TABLE `hash_ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `match_names`
--
ALTER TABLE `match_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `sectors`
--
ALTER TABLE `sectors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `stadiums`
--
ALTER TABLE `stadiums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `tickets`
--
ALTER TABLE `tickets`
  MODIFY `tickets_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `tickets_price`
--
ALTER TABLE `tickets_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `time_match`
--
ALTER TABLE `time_match`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `user_tickets`
--
ALTER TABLE `user_tickets`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`hash_id`) REFERENCES `hash_ticket` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tickets_ibfk_2` FOREIGN KEY (`place_id`) REFERENCES `places` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tickets_ibfk_3` FOREIGN KEY (`sector_id`) REFERENCES `sectors` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tickets_ibfk_4` FOREIGN KEY (`price_id`) REFERENCES `tickets_price` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tickets_ibfk_5` FOREIGN KEY (`match_id`) REFERENCES `match_names` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tickets_ibfk_6` FOREIGN KEY (`stadium_id`) REFERENCES `stadiums` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tickets_ibfk_7` FOREIGN KEY (`time_id`) REFERENCES `time_match` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tickets_ibfk_8` FOREIGN KEY (`tickets_owner_id`) REFERENCES `accounts` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
