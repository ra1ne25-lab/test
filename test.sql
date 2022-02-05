-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2022 at 02:58 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id_comments` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `title` varchar(40) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id_comments`, `name`, `photo`, `title`, `rating`, `comment`) VALUES
(31, 'Влад', '/upload/афыаф.jpg', 'Хорошее место!', 5, 'Очень понравилось, буду приходить ещё, но уже после армии!\r\nМастер подстригла под 0, как нужно!!!'),
(32, 'Артур', '/upload/BRSK-MDtFug.jpg', 'Как же хорошо!', 5, 'Пришёл на пересадку волос, сделали как нужно, лучшие в своём деле! Приглашу своего друга Торетто к вам!'),
(33, 'Яшар', '/upload/fg.jpg', 'Неплохо', 4, 'Угостили бананом и сделали, как просил!'),
(34, 'Алексей', '/upload/KostovskiySP405.jpg', 'Лучшие в своём деле', 5, 'Почитав информацию на сайте, я подумал, что за высокомерие, но придя к ним, я понял - они БОГИ в своём деле. Очень рекомендую! '),
(35, 'Эдуард ', '/upload/et3ZFEL1UVo.jpg', 'Всё хорошо, но за звонок -1 балл!', 4, 'Зачем мне звонить?? А если бы я умирал?? Не звоните мне больше с напоминанием о записи. Я ВСЁ ПОМНЮ!!!!! Это вам учтётся) ');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id_services` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `id_type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id_services`, `name`, `description`, `price`, `photo`, `id_type`) VALUES
(1, 'Гигиенический маникюр', 'Классический маникюр – наиболее оптимальный вариант, ведь он подходит абсолютно всем – вне зависимости от формы и состояния ногтей, кутикулы.', '15', '/upload/3.png', 1),
(2, 'Европейский маникюр', 'Одна из наиболее популярных разновидностей необрезного маникюра. Это идеальная процедура для людей, у которых особо нежная и тонкая кожа или слишком близко расположены кровеносные сосуды. При европейском необрезном маникюре практически к нулю приближен риск занесения какой-либо инфекции.', '25', '/upload/3.png', 1),
(3, 'Классический педикюр', 'Классический педикюр разделяется на два вида: обрезной и европейский - отличаются они способом обработки кутикулы. При классическом обрезном педикюре стопы нужно распарить в ванночке для ног, после чего кутикула деревянной палочкой легко сдвигается к ногтевой лунке и срезается маникюрными ножницами или щипчиками. При не обрезном педикюре кутикулу удаляют при помощи специального средства для удаления кутикулы.', '30', '/upload/3.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id_stock` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` varchar(400) NOT NULL,
  `conditions` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id_stock`, `name`, `description`, `conditions`, `price`, `photo`) VALUES
(1, 'Сертификат любимой', 'Обрадуй свою вторую половинку нашим сертификатом!', 'Акция действует при показе штампа в паспорте на кассе', '120', '/upload/3.png'),
(2, 'Подарочный', 'Подарочный сертификат на сумму 100руб!', 'Подарочный сертификат будет отличным подарком на день рождения или любой другой праздник', '100', '/upload/2.png'),
(3, 'Пенсионный', 'Скидка на все услуги в размере 5% людям старше 65 лет', 'Скидка действует месяц', '50', '/upload/1.png'),
(4, 'тест', 'тест', 'тест', '200', '/upload/1.png');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `name`) VALUES
(1, 'Маникюр'),
(2, 'Педикюр'),
(3, 'Спа-процедуры'),
(4, 'Стрижка');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `surname` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `patronymic` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `surname`, `name`, `patronymic`, `email`, `phone`, `password`, `create_datetime`) VALUES
(1, 'kost1', '', '', '', 'leha.kosovskiy@mail.ru', 0, 'c4ca4238a0b923820dcc509a6f75849b', '2022-02-04 13:55:19'),
(4, 'Abrar', 'khan', 'Niazi', 'Patronymic', 'abrar5959@gmail.com', 459, '202cb962ac59075b964b07152d234b70', '2022-02-05 11:49:43'),
(5, 'Mursaleen', 'Ahmad', 'Malik', 'Manzoor Ahmad', 'malik.mursaleen.ahmad@gmail.com', 900080, '202cb962ac59075b964b07152d234b70', '2022-02-05 12:24:24'),
(7, 'User1', 'User1', 'user1', 'user1', 'user1@gmail.com', 123451, '202cb962ac59075b964b07152d234b70', '2022-02-05 13:13:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comments`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id_services`),
  ADD KEY `id_type` (`id_type`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id_stock`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comments` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id_services` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id_stock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
