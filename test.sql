-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2022 at 04:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

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

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`%` PROCEDURE `combobox_view` ()  select id_type,name from type
END$$

CREATE DEFINER=`root`@`%` PROCEDURE `delete_comments` (IN `_id_comments` INT)  BEGIN  
  DELETE FROM comments where (_id_comments = id_comments);
  SELECT * from comments;
END$$

CREATE DEFINER=`root`@`%` PROCEDURE `delete_position` (IN `_id_position` INT)  BEGIN
DELETE FROM position where (_id_position = id_position);
  SELECT * from position;
END$$

CREATE DEFINER=`root`@`%` PROCEDURE `delete_services` (IN `_id_services` INT)  BEGIN
DELETE FROM services where (_id_services = id_services);
  SELECT * from services;
END$$

CREATE DEFINER=`root`@`%` PROCEDURE `delete_stock` (IN `_id_stock` INT)  BEGIN  
DELETE FROM stock where (_id_stock = id_stock);
  SELECT * from stock;
END$$

CREATE DEFINER=`root`@`%` PROCEDURE `delete_type` (IN `_id_type` INT)  BEGIN  
DELETE FROM type where (_id_type = id_type);
  SELECT * from type;
END$$

CREATE DEFINER=`root`@`%` PROCEDURE `delete_users` (IN `_id` INT)  BEGIN
DELETE FROM users where (_id = id);
  SELECT * from users;
END$$

CREATE DEFINER=`root`@`%` PROCEDURE `insert_position` (IN `_name` VARCHAR(250), IN `_id_type` INT)  BEGIN
INSERT INTO position (name, id_type) VALUES (_name, _id_type);
SELECT * from position;
END$$

CREATE DEFINER=`root`@`%` PROCEDURE `insert_services` (IN `_name` VARCHAR(250), IN `_description` VARCHAR(500), IN `_price` DECIMAL, IN `_photo` VARCHAR(250), IN `_id_type` INT)  BEGIN
INSERT INTO services (name, description, price, photo, id_type) VALUES (_name, _description, _price, _photo, _id_type);
 SELECT * from services;
END$$

CREATE DEFINER=`root`@`%` PROCEDURE `insert_stock1` (IN `_name` VARCHAR(250), IN `_description` VARCHAR(500), IN `_conditions` VARCHAR(500), IN `_price` DOUBLE, IN `_photo` VARCHAR(250))  BEGIN  
INSERT INTO stock (name, description, conditions, price, photo) VALUES(_name, _description, _conditions, _price, _photo);
END$$

CREATE DEFINER=`root`@`%` PROCEDURE `insert_stock2` (IN `_name` VARCHAR(250), IN `_description` VARCHAR(500), IN `_conditions` VARCHAR(500), IN `_price` DOUBLE, IN `_photo` VARCHAR(250))  BEGIN  
INSERT INTO stock (name, description, conditions, price, photo) VALUES(_name, _description, _conditions, _price, _photo);
END$$

CREATE DEFINER=`root`@`%` PROCEDURE `insert_type` (IN `_name` VARCHAR(250))  BEGIN  
    INSERT INTO type (name) VALUES (_name);
SELECT * from type;
END$$

CREATE DEFINER=`root`@`%` PROCEDURE `update_comments` (IN `_type` INT)  BEGIN  
  update comments
  set type =  1
  where id_comments = _type;
  SELECT * from comments;
END$$

CREATE DEFINER=`root`@`%` PROCEDURE `update_position` (IN `_id_position` INT, IN `_name` VARCHAR(250), IN `_id_type` INT)  BEGIN
update position set name = _name, id_type = _id_type
where (id_position = _id_position);
  SELECT * from position;
END$$

CREATE DEFINER=`root`@`%` PROCEDURE `update_services` (IN `_id_services` INT, IN `_name` VARCHAR(250), IN `_description` VARCHAR(500), IN `_price` DECIMAL, IN `_photo` VARCHAR(250), IN `_id_type` INT)  BEGIN
update services set name = _name, description = _description, price = _price, photo = _photo, id_type = _id_type
where (id_services = _id_services);
  SELECT * from services;
END$$

CREATE DEFINER=`root`@`%` PROCEDURE `update_stock` (IN `_id_stock` INT, IN `_name` VARCHAR(250), IN `_description` VARCHAR(500), IN `_conditions` VARCHAR(500), IN `_price` DOUBLE, IN `_photo` VARCHAR(250))  BEGIN  
update stock set name = _name, description = _description, conditions = _conditions, price = _price, photo = _photo
where (id_stock = _id_stock);
  SELECT * from stock;
END$$

CREATE DEFINER=`root`@`%` PROCEDURE `update_type` (IN `_id_type` INT, IN `_name` VARCHAR(250))  BEGIN  
update type set name = _name where (id_type=_id_type);
  SELECT * from type;
END$$

CREATE DEFINER=`root`@`%` PROCEDURE `update_users` (IN `_id` INT, IN `_username` VARCHAR(50), IN `_name` VARCHAR(250), IN `_patronymic` VARCHAR(250), IN `_email` VARCHAR(50), IN `_phone` VARCHAR(13), IN `_surname` VARCHAR(100))  BEGIN
update users set username = _username, surname = _surname, name = _name, patronymic = _patronymic, email = _email, phone = _phone where (id = _id);
  SELECT * from users;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `time_slot_id` int(11) NOT NULL,
  `visitor_name` varchar(60) NOT NULL,
  `visitor_email` varchar(50) NOT NULL,
  `visitor_ph` varchar(20) NOT NULL,
  `service_id` int(11) NOT NULL,
  `book_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `worker_id`, `time_slot_id`, `visitor_name`, `visitor_email`, `visitor_ph`, `service_id`, `book_date`) VALUES
(10, 1, 1, 'newuser', 'newuser@gmail.com', 'newuser', 1, '2022-02-24'),
(11, 1, 2, 'newuser', 'newuser@gmail.com', 'newuser', 3, '2022-02-24'),
(12, 2, 4, 'newuser', 'newuser@gmail.com', 'newuser', 2, '2022-02-24'),
(13, 2, 3, 'newuser', 'newuser@gmail.com', 'newuser', 2, '2022-02-24'),
(15, 3, 6, 'khan1', 'khan1@gmail.com', '111-111-1111', 24, '2022-02-15'),
(16, 1, 1, 'newuser', 'newuser@gmail.com', '0900000', 24, '2022-02-25'),
(17, 3, 6, 'newuser', 'newuser@gmail.com', 'newuser', 24, '2022-02-25'),
(18, 3, 5, 'newuser', 'newuser@gmail.com', 'newuser', 24, '2022-02-25'),
(19, 1, 2, 'newuser', 'newuser@gmail.com', 'newuser', 24, '2022-02-25');

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
  `comment` text DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id_comments`, `name`, `photo`, `title`, `rating`, `comment`, `type`) VALUES
(50, '0', '/upload/1Pzl7WOys8o.jpg', 'Влад', 2, 'Верни', 1),
(53, '0', '/upload/BRSK-MDtFug.jpg', 'vdsbfng', 5, 'fsadf', 1),
(54, '5', '/upload/IMG_0700.JPG', '55', 5, '55', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id_employee` int(11) NOT NULL,
  `username` varchar(150) DEFAULT NULL,
  `surname` varchar(150) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `patronymic` varchar(150) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `telephone` varchar(150) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `id_position` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id_employee`, `username`, `surname`, `name`, `patronymic`, `address`, `telephone`, `password`, `id_position`) VALUES
(1, 'vlad', 'Колопенько', 'Владислав', 'Владимирович', 'г. Сморгонь', '+375298745632', '123', 1),
(2, 'kost1', 'Костовский', 'Алексей', 'Владимирович', 'г. Молодечно', '+375298745123', '1', 2),
(3, 'balla', 'balla', 'ball', 'balla', 'balla', '67676', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id_position` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `id_type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id_position`, `name`, `id_type`) VALUES
(1, 'Парикмахер', 4),
(2, 'Администратор', NULL);

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
(3, 'Классический педикюр', 'Классический педикюр разделяется на два вида: обрезной и европейский - отличаются они способом обработки кутикулы. При классическом обрезном педикюре стопы нужно распарить в ванночке для ног, после чего кутикула деревянной палочкой легко сдвигается к ногтевой лунке и срезается маникюрными ножницами или щипчиками. При не обрезном педикюре кутикулу удаляют при помощи специального средства для удаления кутикулы.', '30', '/upload/3.png', 2),
(24, 'Simple Cut', 'A single simple haircut.', '50', NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id_stock` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` varchar(400) NOT NULL,
  `conditions` text NOT NULL,
  `price` double(10,0) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id_stock`, `name`, `description`, `conditions`, `price`, `photo`) VALUES
(2, 'Подарочный', 'Подарочный сертификат на сумму 100руб!', 'Подарочный сертификат будет отличным подарком на день рождения или любой другой праздник', 100, '/upload/2.png'),
(3, 'Пенсионный', 'Скидка на все услуги в размере 5% людям старше 65 лет', 'Скидка действует месяц', 50, '/upload/1.png'),
(4, 'тест', 'тест', 'тест', 200, '/upload/1.png');

-- --------------------------------------------------------

--
-- Table structure for table `time_slot`
--

CREATE TABLE `time_slot` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `time_slot` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_slot`
--

INSERT INTO `time_slot` (`id`, `emp_id`, `time_slot`) VALUES
(1, 1, '09:00 - 10:00'),
(2, 1, '11:00 - 12:00'),
(3, 2, '09:30 - 10:30'),
(4, 2, '11:30 - 12:30'),
(5, 3, '07:30 - 08:30'),
(6, 3, '10:00 - 11:30');

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
  `phone` varchar(13) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `salt` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `surname`, `name`, `patronymic`, `email`, `phone`, `password`, `create_datetime`, `salt`) VALUES
(4, 'Abrar', 'khan', 'Niazi', 'Patronymic', 'abrar5959@gmail.com', '459', '202cb962ac59075b964b07152d234b70', '2022-02-12 21:18:20', ''),
(5, 'Mursaleen', 'Ahmad', 'Malik', 'Manzoor Ahmad', 'malik.mursaleen.ahmad@gmail.com', '900080', '202cb962ac59075b964b07152d234b70', '2022-02-12 21:18:20', ''),
(7, 'User1', 'User1', 'user1', 'user1', 'user1@gmail.com', '123451', '202cb962ac59075b964b07152d234b70', '2022-02-12 21:18:20', ''),
(8, '1', '1', '1', '1', '1@gmail.com', '11111', 'c4ca4238a0b923820dcc509a6f75849b', '2022-02-12 21:18:20', ''),
(9, 'kost2', 'Костовский', 'Алексей', 'Владимирович', 'kost2@gmail.com', '885474258', '827ccb0eea8a706c4c34a16891f84e7b', '2022-02-12 21:18:20', ''),
(10, 'GayNiggers', 'From', 'outer', 'space', 'example@mail.ru', '375299468259', '202cb962ac59075b964b07152d234b70', '2022-02-12 21:18:20', ''),
(11, 'username', 'surname', 'name', 'patronymic', 'email', 'phno', '31fca930f5082bdd2fcc90ebd019476420a16e38', '2022-02-12 21:18:20', '08bd94'),
(12, 'user', 'user', 'user', 'user', 'user', 'user', '3b50c63db103c1aa7360e9cd16e2def5b479d889', '2022-02-12 21:18:20', '4396e8'),
(13, '123', '123', '123', '123', 'alex.kastouski@gmail.com', '123', '3e6ea2603a51c880428e156c141fbff9bc002e4c', '2022-02-12 21:18:20', '5e0d2e'),
(14, 'kostov', '123', '456', '789', 'gfh@gmail.com', '375299468259', 'f55b1fdfe6bb614e55a024bf363098d13fb1388f', '2022-02-12 21:18:20', '5ab15c'),
(15, '0', '0', '0', '0', '0@gmail.com', '00000000000', '5fe2447589d898a236328bf95781d9cdc9012eab', '2022-02-12 21:18:20', '2b5846'),
(16, '5', '5', '5', '5', '5@gmail.com', '555555', '4d9dc143bba251c6272eb684827947ef5e8cbabc', '2022-02-12 21:18:20', '450de2'),
(17, 'test', 'test', 'test', 'test', 'test@test.com', '89', 'ed390a5d6f057a19952ab24d4ce8b2527b02f37f', '2022-02-12 21:19:58', '177d8c'),
(18, 'test1@test.com', 'sdfj', 'sldkfj', 'sdlkfj', 'test1@gmail.com', '9090', 'd8b63256461f073d3cf6140de7afae220fe822f3', '2022-02-12 21:23:11', '408812'),
(19, 'newuser', 'newuser', 'newuser', 'newuser', 'newuser@gmail.com', '12345', 'd13d4c16f6761fb12853033404c178bbea4b0efd', '2022-02-12 21:28:47', '6d0b7d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comments`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id_employee`),
  ADD KEY `fk_employee_position` (`id_position`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id_position`),
  ADD KEY `id_type` (`id_type`);

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
-- Indexes for table `time_slot`
--
ALTER TABLE `time_slot`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comments` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id_employee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id_position` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id_services` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id_stock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `time_slot`
--
ALTER TABLE `time_slot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `fk_employee_position` FOREIGN KEY (`id_position`) REFERENCES `position` (`id_position`);

--
-- Constraints for table `position`
--
ALTER TABLE `position`
  ADD CONSTRAINT `position_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
