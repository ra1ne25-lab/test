-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 02 2022 г., 18:50
-- Версия сервера: 8.0.15
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id_comments` int(11) NOT NULL,
  `name` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `title` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id_comments`, `name`, `photo`, `title`, `rating`, `comment`) VALUES
(31, 'Влад', '/upload/афыаф.jpg', 'Хорошее место!', 5, 'Очень понравилось, буду приходить ещё, но уже после армии!\r\nМастер подстригла под 0, как нужно!!!'),
(32, 'Артур', '/upload/BRSK-MDtFug.jpg', 'Как же хорошо!', 5, 'Пришёл на пересадку волос, сделали как нужно, лучшие в своём деле! Приглашу своего друга Торетто к вам!'),
(33, 'Яшар', '/upload/fg.jpg', 'Неплохо', 4, 'Угостили бананом и сделали, как просил!'),
(34, 'Алексей', '/upload/KostovskiySP405.jpg', 'Лучшие в своём деле', 5, 'Почитав информацию на сайте, я подумал, что за высокомерие, но придя к ним, я понял - они БОГИ в своём деле. Очень рекомендую! '),
(35, 'Эдуард ', '/upload/et3ZFEL1UVo.jpg', 'Всё хорошо, но за звонок -1 балл!', 4, 'Зачем мне звонить?? А если бы я умирал?? Не звоните мне больше с напоминанием о записи. Я ВСЁ ПОМНЮ!!!!! Это вам учтётся) ');

-- --------------------------------------------------------

--
-- Структура таблицы `stock`
--

CREATE TABLE `stock` (
  `id_stock` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` varchar(400) NOT NULL,
  `conditions` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `stock`
--

INSERT INTO `stock` (`id_stock`, `name`, `description`, `conditions`, `price`, `photo`) VALUES
(1, 'Сертификат любимой', 'Обрадуй свою вторую половинку нашим сертификатом!', 'Акция действует при показе штампа в паспорте на кассе', '120', '/upload/3.png'),
(2, 'Подарочный', 'Подарочный сертификат на сумму 100руб!', 'Подарочный сертификат будет отличным подарком на день рождения или любой другой праздник', '100', '/upload/2.png'),
(3, 'Пенсионный', 'Скидка на все услуги в размере 5% людям старше 65 лет', 'Скидка действует месяц', '50', '/upload/1.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comments`);

--
-- Индексы таблицы `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id_stock`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comments` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `stock`
--
ALTER TABLE `stock`
  MODIFY `id_stock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
