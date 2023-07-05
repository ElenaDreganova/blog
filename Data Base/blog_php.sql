-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Лют 05 2023 р., 19:37
-- Версія сервера: 10.4.27-MariaDB
-- Версія PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `blog_php`
--

-- --------------------------------------------------------

--
-- Структура таблиці `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `twit` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп даних таблиці `posts`
--

INSERT INTO `posts` (`id`, `twit`, `user_id`, `created`, `image`) VALUES
(21, 'Lemon', 1, '2023-02-04 22:03:46', '90MYLoNMCNCMNNMv8OEAHoYQaMKb68412zRUzCDCaYXnPd5HwTAA8qV4uzEEXLdD1675541026.png'),
(22, 'Apple', 1, '2023-02-04 22:27:27', 'OhcBE1l37z5S3wUV49gsUd90WrSZYd3yUUJRMPpL5WzZRt72I961LRewd56iFUjJ1675542447.png'),
(24, 'Stars way', 1, '2023-02-05 16:33:11', 'W6fpBZPtlRofiqhBcmP075MpdgGj3DyHCCQgSMmmikmBzFz6hJ0sOgadCCKxQltC1675607591.png'),
(25, ' Golden autumn', 1, '2023-02-05 16:54:48', 'ASNjkrcxsx7taTQekV7E1Fxky43Gh40MpEAT2vpRKuz7lFpzKQidznyQ2OZdXCZZ1675608888.jpg'),
(26, 'Hello, world!', 1, '2023-02-05 19:53:28', 'a0Nj5lzeWZ22JruhevMCqzAcE53ON7XpBzY29LX1gBLnCCwy0dBv3Lk50FLR5mpA1675619608.jpg');

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(30) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'Elena', 'elena@i.ua', '123456', 'admin'),
(4, 'Alex', 'alex@i.ua', NULL, 'user'),
(5, 'Flin', 'flin@i.ua', NULL, 'user'),
(6, 'Masha', 'masha@i.ua', NULL, 'user'),
(7, 'Anna', 'anna@i.ua', '147852', 'user'),
(9, 'Ivan', 'ivan@i.ua', '111', 'user'),
(10, 'Mark', 'mark@i.ua', '222', 'user');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
