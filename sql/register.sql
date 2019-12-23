-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 23 2019 г., 15:36
-- Версия сервера: 10.4.10-MariaDB
-- Версия PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `register`
--

-- --------------------------------------------------------

--
-- Структура таблицы `logins`
--

CREATE TABLE `logins` (
  `Email` varchar(20) NOT NULL,
  `Surname` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `logins`
--

INSERT INTO `logins` (`Email`, `Surname`, `Name`, `password`) VALUES
('180107140@stu.sdu.ed', 'Rakhmetulla', 'Shyngys', '349161damir'),
('ba@ss', 'Fatih', 'Ruslan', '456456'),
('damirr2001@gmail.com', 'Rakhmetulla', 'Damir', '349161damir');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
